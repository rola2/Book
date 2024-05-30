<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\IsAdmin;

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
    return view('welcome');
});




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('books', [BookController::class, 'index']);
Route::get('create', [BookController::class, 'create']);
Route::get('books/{id}', [BookController::class, 'show']);

Route::post('/Add/book', [BookController::class, 'store']);
Route::post('/update/book/{id}', [BookController::class, 'update'])->middleware('admin');
Route::delete('books/{id}', [BookController::class, 'destroy'])->middleware('admin');


Route::resource('books',BookController::class);

