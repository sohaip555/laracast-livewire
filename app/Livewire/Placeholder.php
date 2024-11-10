<?php

namespace App\Livewire;

use Livewire\Component;

class Placeholder extends Component
{

    public string $message = '';

    public function render()
    {
        return view('livewire.placeholder');
    }
}
