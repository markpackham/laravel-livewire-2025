<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class CreateBook extends Component
{
    public $title;
    public $author;
    public $rating;

    public function save()
    {

        $this->validate([
            'title' => 'string|required|min:3|max:300',
            'author' => 'string|required|min:3|max:300',
            'rating' => 'integer|required|min:1|max:10',

        ]);

        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating
        ]);

        $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.create-book');
    }
}