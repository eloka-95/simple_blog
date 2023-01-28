<?php

use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

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
//  !group routes for pages
Route::controller(pagesController::class)->group(function(){
        Route::get('/home', 'getHome');
        Route::get('/about', 'getAbout');
        Route::get('/contact', 'getContact');
        Route::get('/logout', 'logout');
});

Route::resource('posts', PostController::class);

Route::get('/dashboard', function () {

    $posts = Post::all();
    return view('dashboard',compact('posts'));
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
