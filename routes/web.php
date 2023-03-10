<?php

use App\Http\Controllers\Blog\BlogController;
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

Route::namespace('Blog')->group(callback: function(){
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/login', [BlogController::class, 'login'])->name('blog.login');
    Route::post('/login', [BlogController::class, 'auth'])->name('login');
});
