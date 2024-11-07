<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component
{
    #[Validate('required')]
    public $searchText = '';

    public $results = [];


    public function updatedSearchText($value)
    {
        $this->reset('results');
        $this->validate();
        $searchTeem = "%{$value}%";

        $this->results = Article::where('title', 'like',$searchTeem)->get();
//        dd($this->results);
    }

    #[On('search:clear-results')]
    public function clear()
    {
        $this->reset('results', 'searchText');
//        $this->validate();

    }

    public function render()
    {
        return view('livewire.search');
    }


}
