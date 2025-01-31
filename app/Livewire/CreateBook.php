<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateBook extends Component
{
    // Use attribute so second.blade.php layout used rather than main app.blade.php
    #[Layout('components.layouts.second')]
    public function render()
    {
        return view('livewire.create-book');
    }
}
