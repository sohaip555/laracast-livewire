<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditeArticle extends AdminComponent
{
    use WithFileUploads;
    public ArticleForm $form;

    public function mount(Article $article): void
    {
        $this->form->setArticle($article);
    }

    public function downloadPhoto()
    {
        return response()->download(
            Storage::disk('public')->path($this->form->photo_path),
            'article.png'
        );

//        return response()->streamDownload(function (){
//        }, 'article.png');
    }

    public function save()
    {
        $this->form->update();
        $this->redirect(ArticleList::class, navigate: true);
    }

    public function render()
    {
        return view('livewire.edite-article');
    }
}
