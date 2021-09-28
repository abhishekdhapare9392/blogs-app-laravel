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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});
Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blogs', [App\Http\Controllers\BlogsController::class, 'getAllBlogs'])->name('blogs');
Route::get('/blogs/add', [App\Http\Controllers\BlogsController::class, 'create'])->name('blogs.add');
Route::post('/blogs/add', [App\Http\Controllers\BlogsController::class, 'store'])->name('blogs.save');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogsController::class, 'show'])->name('blogs.view');
Route::get('/blog/edit/{slug}', [App\Http\Controllers\BlogsController::class, 'edit'])->name('blogs.edit');
Route::post('/blog/update/{id}', [App\Http\Controllers\BlogsController::class, 'update'])->name('blogs.update');
Route::get('/blog/delete/{slug}', [App\Http\Controllers\BlogsController::class, 'destroy'])->name('blogs.delete');