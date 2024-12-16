<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ContactController::class, 'index'])->name('contacts.index');

// Route::get('/contacts/search', [ContactController::class, 'search'])->name('contacts.search');