<?php

use App\Post;
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


Route::get('/', 'HomeController@index')->name('home');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

// Route::resources([
//     'posts' => 'PostController', []
// ]);

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts/store', 'PostController@store')->name('posts.store');
Route::get('/posts/{post:slug}', 'PostController@show')->name('posts.show');
Route::get('/posts/{post:slug}/edit', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{post:slug}', 'PostController@update')->name('posts.update');
Route::delete('/posts/{post:slug}', 'PostController@destroy')->name('posts.destroy');

Route::get('/admin', 'AdminController@index')->name('admin');
