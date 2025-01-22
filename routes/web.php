<?php

use App\Http\Controllers\CotxesController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ComptadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/informacio', function () {
    return view('informacio');
});

Route::get('/comptador', [ComptadorController::class, 'index']);
Route::post('/incrementar', [ComptadorController::class, 'incrementar']);
Route::post('/decrementar', [ComptadorController::class, 'decrementar']);
Route::post('/reset', [ComptadorController::class, 'reset']);

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::get('/books/{book}/delete', [BookController::class, 'delete'])->name('books.delete');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

Route::get('/cotxes', [CotxesController::class, 'index'])->name('cotxes.index');
Route::get('/cotxes/create', [CotxesController::class, 'create'])->name('cotxes.create');
Route::post('/cotxes', [CotxesController::class, 'store'])->name('cotxes.store');
Route::get('/cotxes/{cotxe}', [CotxesController::class, 'show'])->name('cotxes.show');
Route::get('/cotxes/{cotxe}/edit', [CotxesController::class, 'edit'])->name('cotxes.edit');
Route::put('/cotxes/{cotxe}', [CotxesController::class, 'update'])->name('cotxes.update');
Route::get('/cotxes/{cotxe}/delete', [CotxesController::class, 'delete'])->name('cotxes.delete');
Route::delete('/cotxes/{cotxe}', [CotxesController::class, 'destroy'])->name('cotxes.destroy');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
