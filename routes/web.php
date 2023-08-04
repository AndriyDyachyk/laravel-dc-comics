<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;
use Illuminate\Http\Requests\StoreComicRequest;
use Illuminate\Http\Requests\UpdateComicRequest;

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

Route::get('/', [ComicController::class, 'home'])->name('home');

Route::get('/comics', [ComicController::class, 'index']);

Route::get('/comics/{comic}',[ComicController::class, 'show']);

Route::resource('comic', ComicController::class);


