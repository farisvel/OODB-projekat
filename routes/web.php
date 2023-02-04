<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\WritersController;
use App\Http\Controllers\GenresController;

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



Route::middleware(['auth:sanctum', 'verified'])->get('/', function (){
    return view('dashboard');
})->name('dashboard');

/* Route::middleware(['auth:sanctum', 'verified'])->get('/articles', function (){
    return view('articles.index');
 })->name('articles'); */

Route::middleware(['auth:sanctum', 'verified'])->get('articles',[ArticlesController::class, 'index']) ->name('articles');
Route::middleware(['auth:sanctum', 'verified'])->get('writers',[WritersController::class, 'index']) ->name('writers');
Route::middleware(['auth:sanctum', 'verified'])->get('add_writer',[WritersController::class, 'create'])->name('add_writer');
Route::middleware(['auth:sanctum', 'verified'])->post('store_writer',[WritersController::class, 'store'])->name('store_writer');

Route::middleware(['auth:sanctum', 'verified'])->get('genres',[GenresController::class, 'index']) ->name('genres');