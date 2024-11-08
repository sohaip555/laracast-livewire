<?php

namespace App\Livewire\Forms;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Symfony\Component\Mailer\Header\TagHeader;

class ArticleForm extends Form
{

    public Article $article;

    #[Validate('required')]
    public  $title = '';

    #[Validate('required')]
    public  $content = '';

    #[Validate('required')]
    public $published = true;

    #[Validate('required')]
    public $notification = 'none';

    public function setArticle(Article $article): void
    {
        $this->title = $article->title;
        $this->content = $article->content;
        $this->published =  $article->published;
        $this->notification = $article->notification;

        $this->article = $article;
    }

    public function store(): void
    {
        $this->validate();

        Article::create($this->only(['title', 'content' , 'published', 'notification']));

    }


    public function update(): void
    {
        $this->validate();

        $this->article->update($this->only(['title', 'content', 'published', 'notification']));

    }
}
