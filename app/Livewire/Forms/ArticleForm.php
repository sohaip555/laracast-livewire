<?php

namespace App\Livewire\Forms;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ArticleForm extends Form
{

    public Article $article;

    #[Validate('required')]
    public  $title = '';

    #[Validate('required')]
    public  $content = '';

    public function setArticle()
    {

    }

    public function store()
    {
        $this->validate();
        Article::create($this->all());

    }
}
