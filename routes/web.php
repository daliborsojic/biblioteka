<?php

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
//     return view('welcome');
// });

// use App\Http\Controllers\BooksController;

Route::get('/', [App\Http\Controllers\BooksController::class, 'index'])->name('kniga.lista');
Route::get('/book/{bookId}', [App\Http\Controllers\BooksController::class, 'show'])->name('kniga.prikazi');


Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);
