<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Admin dashboard')]
class Dashboard extends AdminComponent
{
    public function render()
    {
        return view('livewire.dashboard');
    }
}
