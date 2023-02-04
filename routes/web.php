<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
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