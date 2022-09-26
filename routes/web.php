<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;

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

Route::get('/',[BlogController::class,'index']);

Route::get('/blog/{blog:blog_id}', [BlogController::class,'show'])->where('blog', '.*+$');

Route::get('/about', function () {
    return view('about');
});

Route::get('/disclaimer', function () {
    return view('disclaimer');
});

Route::get('/privacy', function () {
    return view('privacy');
});
