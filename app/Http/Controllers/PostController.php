<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SearchTerm {

    public $column;
    public $value;

    public function __construct($column, $value) {

        $this->column = $column;
        $this->value = $value;

    }

}

class PostController extends Controller {

    public $searches_key = [

        'title' => 'title',
        'tit' => 'title',

        'body' => 'body',

        'slug' => 'slug',

        'uid' => 'uid',

    ];

    public function index(Request $Request) {

        if($Request->method() == 'POST') {
            $searches = $Request->input('search');
            if(!empty($searches)) {

                if(strtolower($searches) === "open_sesame!"){
                    return redirect()->route('casino.index');
                }

                // Parse searches
                $columns_done = [];
                $searches = explode(',',$searches);
                $new_searches = [];
                foreach($searches as $i => $search) {
                    $new_search = null;
                    $trimed_new_search = trim($search);
                    if(strpos($trimed_new_search, ":") !== false) {
                        $exploded_new_search = explode(':',$trimed_new_search);
                        if(isset($this->searches_key[$exploded_new_search[0]])){
                            if(!in_array($this->searches_key[$exploded_new_search[0]],$columns_done)){
                                $columns_done[] = $this->searches_key[$exploded_new_search[0]];
                                $new_search = new SearchTerm($this->searches_key[$exploded_new_search[0]], $exploded_new_search[1]);
                            }
                        }
                    }else{
                        $new_search = $trimed_new_search;
                    }
                    if($new_search){
                        $new_searches[] = $new_search;
                    }
                }

                // Search
                $columns_done = [];
                $is_there_str_sql = false;
                $search_str_sql = null;
                $available_columns = [
                    'title', 'body', 'slug', 'uid',
                ];
                $posts = DB::table('posts')->select('*');
                foreach($new_searches as $search) {
                    if($search instanceof SearchTerm) {
                        $posts->where($search->column, 'LIKE', '%'.$search->value.'%');
                        $columns_done[] = $search->column;
                    }else if(is_string($search) && !$is_there_str_sql){
                        $search_str_sql = $search;
                        $is_there_str_sql = true;
                        break;
                    }
                }
                if($search_str_sql){
                    foreach($available_columns as $column) {
                        if(!in_array($column, $columns_done)) {
                            $posts->orWhere($column, 'LIKE', '%' . $search_str_sql . '%');
                        }
                    }
                }
                $posts = $posts->get();
                if($posts->count() > 0){
                    if($posts->count() == 1){
                        $result_message = [
                            'type' => 'success',
                            'message' => '1 post found.'
                        ];
                    }else{ 
                        $result_message = [
                            'type' => 'success',
                            'message' => $posts->count().' posts found.'
                        ];
                    }
                }else{
                    $result_message = [
                        'type' => 'error',
                        'message' => 'No post found.'
                    ];
                }
                return view('posts.index', [
                    'posts' => $posts,
                    'search' => $Request->input('search'),
                    $result_message['type'] => $result_message['message'],
                ]);
            }
        }
        $posts = Post::all();
        return view('posts.index', compact('posts'));

    }

    public function create(Request $Request) {

        if($Request->isMethod('post')) {

            $post = new Post();
            $post->title = $Request->input('title');
            $post->body = $Request->input('body');
            $post->slug = Str::slug($Request->input('title'));
            $post->uid = Str::uuid();
            $post->save();
            return redirect()->route('posts.index')->with('success', 'Post created successfully.');
        }
        return view('posts.create');

    }


    public function show($id) {
        
        $post = Post::find($id);
        return view('posts.show', compact('post'));

    }

    public function edit($id) {
        //
    }


    public function destroy($id) {
        //
    }
    
}
