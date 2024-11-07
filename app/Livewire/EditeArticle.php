<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditeArticle extends AdminComponent
{
    public Article $article;
    #[Validate('required')]
    public  $title = '';

    public ArticleForm $form;


    #[Validate('required')]
    public  $content = '';

    public function mount(Article $article)
    {
        $this->title = $article->title;
        $this->content = $article->content;

        $this->article  = $article;
    }

    public function save()
    {
        $this->validate();
        $this->article->update($this->only(['title', 'content']));

        $this->redirect('/dashboard/articles', navigate: true);
    }

    public function render()
    {
        return view('livewire.edite-article');
    }
}
