<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookList extends Component
{
  public $name = 'Mario';
  public $count = 0;

  public function increment($number)
  {
    $this->count += $number;
  }

  public function render()
  {
    return view('livewire.book-list', [
      'books' => Book::all()
    ]);
  }
}
