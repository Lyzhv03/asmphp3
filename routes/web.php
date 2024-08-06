<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
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

Route::get('/',[BookController::class,'bookPrice'])->name('book.home');
Route::get('/contact', function () {
    return view('layout.contact');
})->name('book.contact');

Route::get('/admin', function () {
    $countUser = User::count();
    $countBook = Book::count();
    $countCate = Category::count();
    return view('admin.dashbroard.db',compact('countUser','countBook','countCate'));
})->name('admin.db')->middleware(AdminMiddleware::class);

// Route::get('/books',[BookController::class,'index'])->name('book.index');
// Route::get('/list',[BookController::class,'index'])->name('book.list');

// Route::get('/detail/{id}',[BookController::class,'detail'])->name('book.detail');

Route::prefix('admin')->middleware(AdminMiddleware::class)->group(function(){
    //book
    Route::get('/book/list', [BookController::class, 'index'])->name('admin.books.index');
    Route::get('/book/create', [BookController::class, 'create'])->name('admin.books.create');
    Route::post('/book/create', [BookController::class, 'store'])->name('admin.books.store');
    Route::get('/book/edit/{post}', [BookController::class, 'edit'])->name('admin.books.edit');
    Route::put('/book/edit/{post}', [BookController::class, 'update'])->name('admin.books.update');
    Route::delete('/book/delete/{post}', [BookController::class, 'destroy'])->name('admin.books.destroy');

    //user
    Route::get('/user/list', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/user/edit/{post}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/user/edit/{post}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/user/delete/{post}', [UserController::class, 'destroy'])->name('admin.users.destroy');

});


Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'postLogin'])->name('postLogin');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register',[LoginController::class,'postRegister'])->name('postRegister');

Route::get('sendmail',[SendMailController::class,'sendMail']);
