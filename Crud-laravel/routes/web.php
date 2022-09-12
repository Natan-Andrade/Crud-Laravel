<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home-index');

Route::prefix('notas')->group(function(){
    Route::get('/', [NotesController::class, 'index'])->name('notes-index');
    Route::get('/create', [NotesController::class, 'create'])->name('notes-create');
    Route::get('/{id}/read', [NotesController::class, 'show'])->where('id', '[0-9]+')->name('notes-read');
    Route::post('/', [NotesController::class, 'store'])->name('notes-store');
    Route::get('/{id}/edit', [NotesController::class, 'edit'])->where('id', '[0-9]+')->name('notes-edit');
    Route::put('/{id}', [NotesController::class, 'update'])->where('id', '[0-9]+')->name('notes-update');
    Route::delete('/{id}', [NotesController::class, 'destroy'])->where('id', '[0-9]+')->name('notes-destroy');

});

Route::fallback(function(){
    return "Erro";
});
//Route::get('/notes', [NotesController::class, 'index'])->name('notes-index');

