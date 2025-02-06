<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Title;
use Livewire\Component;

class BookList extends Component
{
  public $term = '';

  public function delete(Book $book)
  {
    $book->delete();
  }

  // Appears in title of html in main layout
  #[Title('Book List - Home')]

  public function render()
  {
    // If user enters in the search input look for the book
    // use Laravel's Eloquent for database search
    if($this->term){
      return view('livewire.book-list', [
        'books' => Book::where('title', 'LIKE', "%{$this->term}%")->get(),
      ]);
    }

    // Show all books if nothing entered in search input
    return view('livewire.book-list', [
      'books' => Book::all()
    ]);
  }
}
