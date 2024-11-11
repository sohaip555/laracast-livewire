<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Session;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    use WithPagination;

    #[Session(key: 'Published')]
    public $showOnlyPublished = false;

    public function delete(Article $article)
    {
        $article->delete();
    }

    public function togllePublished($showOnlyPublished)
    {
        $this->showOnlyPublished = $showOnlyPublished;
        $this->resetPage('articles-page');
    }

    #[Computed]
    public function articles()
    {
        $query = Article::query();

        if ($this->showOnlyPublished )
        {
            $query->where('published', true);
        }

        return $query->paginate(7, pageName:'articles-page');
    }

    public function render()
    {
        return view('livewire.article-list' );
    }
}
