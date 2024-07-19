<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('books.index');
})->name('book.home');

// Route::get('/books',[BookController::class,'index'])->name('book.index');
Route::get('/list',[BookController::class,'index'])->name('book.list');

Route::get('/detail/{id}',[BookController::class,'detail'])->name('book.detail');
