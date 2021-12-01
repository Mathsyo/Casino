@extends('layouts.default')

@section('content')

    <h1>
        <a href="{{ route('home') }}" class="btn btn-clear-dark">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
        My Blog
        @can('posts-create')
            <a href="{{ route('posts.create') }}" class="btn btn-primary float-end">
                <ion-icon name="add-outline"></ion-icon>
                Create
            </a>
        @endcan
    </h1>

    <hr>

    
    {!! Form::open(['route' => 'posts.index', 'method'=>'POST']) !!}
        <div class="form-group">
            <div class="input-group mb-3">
                <span class="input-group-text">Search for a post</span>
                <input type="text" class="form-control" placeholder="Search... " name="search" value="<?= isset($search) ? $search : '' ?>">
                @if(isset($search))
                    <a href="{{ route('posts.index') }}" class="btn btn-outline-danger  ">
                        <ion-icon name="close-outline"></ion-icon>
                    </a>
                @endif
                <button class="btn btn-outline-primary" type="submit">
                    <ion-icon name="search-outline"></ion-icon>
                    Rechercher
                </button>
            </div>
        </div>
    {!! Form::close() !!}
    
    @include('includes.flash')

    <div class="card-columns">
        @if(count($posts) > 0)
            @foreach ($posts as $post)
                <div class="card">
                    <a class="text-dark text-decoration-none" href="{{ route('posts.show', $post->id) }}">
                        <div class="card-header">
                            <h3>{{ $post->title }}</h3>
                        </div>
                        <div class="card-body">
                            <p>{{ $post->body }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary col">Read More</a>
                        </div>
                    </a>
                </div>
            @endforeach
        @else
            @if(!isset($search))
                <div class="alert alert-primary">
                    No post found
                </div>
            @endif
        @endif
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#input').focus();
        });
    </script>
@endsection

@section('styles')
    <style>
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
@endsection