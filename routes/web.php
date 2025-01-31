<?php

use App\Livewire\BookList;
use Illuminate\Support\Facades\Route;

Route::get('/', BookList::class);