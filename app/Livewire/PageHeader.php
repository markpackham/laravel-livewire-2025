<?php

namespace App\Livewire;

use Livewire\Component;

class PageHeader extends Component
{

    public $name = 'Mario';
    public $subtitle;

    // Life cycle hooks, mount, updated & rendering are common
    // mount runs when component first created
    public function mount($subtitle){
        // Use whatever prop value got passed into it from book-list.blade.php
        $this->subtitle = $subtitle;
    }

    public function render()
    {
        return view('livewire.page-header');
    }
}
