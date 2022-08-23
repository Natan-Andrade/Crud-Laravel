<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home-index');

Route::get('/notes', [NotesController::class, 'index'])->name('notes-index');

