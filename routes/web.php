<?php

use App\Livewire\ArticleIndex;
use App\Livewire\ArticleList;
use App\Livewire\CreateArticle;
use App\Livewire\Dashboard;
use App\Livewire\EditeArticle;
use App\Livewire\Login;
use App\Livewire\ShowArticle;
use App\Livewire\Sunin;
use Illuminate\Support\Facades\Route;

Route::get('/', ArticleIndex::class)->name('home');
Route::get('/articles/{article}', showArticle::class);

Route::get('/login', Login::class)->name('login');
Route::get('/sunin', Sunin::class);
Route::get('/logout', function() {
    Auth::logout();

   return redirect('/');
});


Route::middleware([
    'auth',
])->group(function () {
    Route::get('/dashboard', Dashboard::class) -> name('dashboard');
    Route::get('/dashboard/articles', ArticleList::class)->name('dashboard.articles.index');
    Route::get('/dashboard/articles/create', CreateArticle::class);
    Route::get('/dashboard/articles/{article}/edite', EditeArticle::class);
});
