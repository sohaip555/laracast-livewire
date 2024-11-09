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

    public $published = true;

    public $notifications = [];

    public $allowNotifications = false;

    public function setArticle(Article $article): void
    {
        $this->title = $article->title;
        $this->content = $article->content;
        $this->published =  $article->published;
        $this->notifications = $article->notifications ?? [];

        $this->allowNotifications = count($article->notifications) > 0;

        $this->article = $article;
    }

    public function store(): void
    {
        $this->validate();

        if (!$this->allowNotifications) {
            $this->notifications = [];
        }

        Article::create($this->only(['title', 'content' , 'published', 'notifications']));

    }


    public function update(): void
    {
        $this->validate();

        if (!$this->allowNotifications) {
            $this->notifications = [];
        }

        $this->article->update($this->only(['title', 'content', 'published', 'notifications']));

    }
}
