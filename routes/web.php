<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\WritersController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\ReadersController;

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

Route::middleware(['auth:sanctum', 'verified'])->post('delete_writer',[WritersController::class, 'delete'])->name('delete_writer');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_writer',[WritersController::class, 'edit'])->name('edit_writer');
Route::middleware(['auth:sanctum', 'verified'])->post('update_writer',[WritersController::class, 'update'])->name('update_writer');

Route::middleware(['auth:sanctum', 'verified'])->get('genres',[GenresController::class, 'index']) ->name('genres');
Route::middleware(['auth:sanctum', 'verified'])->get('readers',[ReadersController::class, 'index']) ->name('readers');