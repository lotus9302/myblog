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

use App\Http\Controllers\Admin\BlogController;
Route::controller(BlogController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {    
    Route::get('blog/create', 'add')->name('blog.add');
    Route::post('blog/create', 'create')->name('blog.create');
    Route::get('blog', 'index')->name('blog.index');
    Route::get('blog/edit', 'edit')->name('blog.edit');
    Route::post('blog/edit', 'update')->name('blog.update');
    Route::get('blog/delete', 'delete')->name('blog.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
use App\Http\Controllers\BlogController as PublicBlogController;
Route::get('/', [PublicNewsController::class, 'index'])->name('blog.index');