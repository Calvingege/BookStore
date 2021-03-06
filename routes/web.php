<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/create/book',
    [BooksController::class, 'createBook']
)->name('createBook');

Route::post(
    '/store/book',
    [BooksController::class, 'storeBook']
)->name('storeBook');

Route::get(
    'show/books',
    [BooksController::class, 'showBook']
)->name('showBook');

Route::get(
    'update/book/{id}',
    [BooksController::class, 'formUpdateBook']
)->name('formUpdateBook');

Route::patch(
    'updating/book/{id}',
    [BooksController::class, 'UpdateBook']
)->name('updateBook');

Route::delete(
    'delete/book/{id}',
    [BooksController::class, 'deleteBook']
)->name('deleteBook');