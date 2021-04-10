<?php

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

//formulario de posts
Route::get('create', [App\Http\Controllers\PostController::class, 'index'])->name('create');

//guardar posts
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

//ver posts
Route::get('posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');

//guardar comentrios
Route::post('/posts/{post}/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');


//eleminar post
Route::delete('/posts/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');


//eleminar comment
Route::delete('/comments/{comment}', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comments.destroy');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/json', function () {
    $json = response()->json('Please enter valid type');

    return $json;
});
