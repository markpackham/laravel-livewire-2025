<?php

use App\Livewire\BookList;
use App\Livewire\CreateBook;
use Illuminate\Support\Facades\Route;

Route::get('/', BookList::class);
Route::get('/create', CreateBook::class);