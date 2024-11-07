<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class SearchResult extends Component
{

    #[Reactive]
    public $results = [];

    #[Reactive]
    public $show = [];
//
//    public function clear()
//    {
//        $this->reset($this->results);
//    }

    public function render()
    {
        return view('livewire.search-result');
    }
}
