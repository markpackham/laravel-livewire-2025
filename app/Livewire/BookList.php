<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Title;
use Livewire\Component;

class BookList extends Component
{
  public $name = 'Mario';

  public function delete(Book $book)
  {
    $book->delete();
  }

  // Appears in title of html in main layout
  #[Title('Book List - Home')]

  public function render()
  {
    return view('livewire.book-list', [
      'books' => Book::all()
    ]);
  }
}
