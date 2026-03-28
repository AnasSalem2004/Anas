<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

require __DIR__.'/auth.php';

Route::get('/', [BookController::class, 'index'])->name('dashboard');

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');

Route::get('/books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/update/{id}', [BookController::class, 'update'])->name('books.update');

Route::delete('/books/delete/{id}', [BookController::class, 'destroy'])->name('books.destroy');