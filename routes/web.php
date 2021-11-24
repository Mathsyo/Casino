<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SiteController;
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

Route::prefix('posts')->group(function () {

    Route::get('/', [BlogController::class, 'index'])
        ->name('posts.index');

    Route::get('/show/{slug}', [BlogController::class, 'show'])
        ->name('posts.show');

    Route::get('/create', [BlogController::class, 'create'])
        ->name('posts.create');

    Route::get('/edit/{slug}', [BlogController::class, 'edit'])
        ->name('posts.edit');

    Route::get('/delete/{slug}', [BlogController::class, 'delete'])
        ->name('posts.delete');

});


