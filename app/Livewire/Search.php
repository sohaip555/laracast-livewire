<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Isolate;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Isolate]
//#[Lazy] -> every Component has lazy attribute is Isolate by default
class Search extends Component
{

    #[Url(as: 'q', except: '', history: true)]
    public $searchText = '';
    public $placeHolder = "type something to search";


    #[On('search:clear-results')]
    public function clear()
    {
        $this->reset( 'searchText');
    }

    public function render()
    {
        return view('livewire.search',[
            'results' => Article::where('title', 'like', "%{$this->searchText}%")->get(),
        ]);
    }


}
