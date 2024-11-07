<div class="m-auto w-1/2">
    @foreach($articles as $article)
        <div class="mt-4" wire:key="{{$article->id}}">
                <h1 class="text-lg text-blue-600 hover:text-blue-700">
                    <a href="/articles/{{$article->id}}">
                    {{$article->title}}
                    </a>
                </h1>
            <p>{{str($article->content)->words(30)}}</p>
        </div>
    @endforeach
</div>
