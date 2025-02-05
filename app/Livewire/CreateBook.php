<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateBook extends Component
{
    // How to do validation the Livewire way
    #[Rule('string|required|min:3|max:300')]
    public $title;

    #[Rule('string|required|min:3|max:300')]
    public $author;

    #[Rule('integer|required|min:1|max:10')]
    public $rating;

    public function save()
    {

        // Old validation method done in Laravel instead of the Livewire way
        // $this->validate([
        //     'title' => 'string|required|min:3|max:300',
        //     'author' => 'string|required|min:3|max:300',
        //     'rating' => 'integer|required|min:1|max:10',
        // ]);

        // If we use the validate method without arguments Livewire evaluates each property
        // based on the rules we defined for them above
        $this->validate();

        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating
        ]);

        // When we set navigate to true instead of regular link behavior we use
        // Livewire's version of Single Page Application loading so it is faster
        // so whenever a new page loads we don't need to request EVERYTHING again & again
        $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-book');
    }
}