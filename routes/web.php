<?php

use App\Http\Controllers\CasinoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/home', [SiteController::class, 'index'])->name('home');

Auth::routes();

Route::prefix('posts')->group(function () {

    Route::any('/', [PostController ::class, 'index'])
        ->name('posts.index');

    Route::any('/show/{slug}', [PostController::class, 'show'])
        ->name('posts.show');

    Route::any('/create', [PostController::class, 'create'])
        ->middleware('can:posts-create')
        ->name('posts.create');

    Route::any('/edit/{slug}', [PostController::class, 'edit'])
        ->middleware('can:posts-edit')
        ->name('posts.edit');

    Route::any('/delete/{slug}', [PostController::class, 'delete'])
        ->middleware('can:posts-delete')
        ->name('posts.delete');

});

route::prefix('53cr3t_c4s1n0_d00r')->group(function() {

    Route::any('/', [CasinoController::class, 'index'])
        ->name('casino.index');

});