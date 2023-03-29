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

// Route::get('/', function () {
//     return view('home');
// });
Route::view('/', 'home');

// Route::get('/blog', function(){
//     return view('blog');
// });
Route::view('/blog', 'blog');

// Route::get('/blog-detail', function(){
//     return view('blog-detail');
// });
Route::view('/blog-detail', 'blog-detail');

// Route::get('/project-detail', function(){
//     return view('project-detail');
// });
Route::view('/project-detail', 'project-detail');

// Route::get('/contact', function(){
//     return view('contact');
// });
Route::view('/contact', 'contact');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
