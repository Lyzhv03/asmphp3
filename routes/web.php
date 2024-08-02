<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('books.index');
// })->name('book.home');

Route::get('/', function () {
    return view('admin.dashbroard.index');
})->name('book.home');

// Route::get('/books',[BookController::class,'index'])->name('book.index');
// Route::get('/list',[BookController::class,'index'])->name('book.list');

// Route::get('/detail/{id}',[BookController::class,'detail'])->name('book.detail');

Route::prefix('admin')->group(function(){
    Route::get('/book/list', [BookController::class, 'index'])->name('admin.books.index');
    Route::get('/book/create', [BookController::class, 'create'])->name('admin.books.create');
    Route::post('/book/create', [BookController::class, 'store'])->name('admin.books.store');
    Route::get('/book/edit/{post}', [BookController::class, 'edit'])->name('admin.books.edit');
    Route::put('/book/edit/{post}', [BookController::class, 'update'])->name('admin.books.update');
    Route::delete('/book/delete/{post}', [BookController::class, 'destroy'])->name('admin.books.destroy');
});


Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'postLogin'])->name('postLogin');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register',[LoginController::class,'postRegister'])->name('postRegister');
