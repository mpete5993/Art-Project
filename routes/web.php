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

Route::get('/',[App\Http\Controllers\LayoutsController::class, 'index'])->name('welcome');

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/art',[App\Http\Controllers\BlogController::class, 'index'])->name('art');
Route::get('/art/{project}',[App\Http\Controllers\ArtController::class, 'show'])->name('art.show');

Route::get('/art-single', function () {
    return view('art-single');
});
Route::get('blog/',[App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}',[App\Http\Controllers\BlogController::class, 'show'])->name('blog.post');

Route::get('/post', function () {
    return view('post');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
