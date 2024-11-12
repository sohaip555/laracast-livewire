<div >
    <div class="mt-4 mr-8 p-4 absolute border rounded-md bg-gray-600 border-blue-500 ">
        <div class="absolute top-0 right-0 pr-2 pt-1">
        </div>
        @if(count($results) < 1)
            <p>No results fund</p>
        @endif

        @foreach($results as $result)
            <div class="p-2" wire:key="{{$result->id}}" >
                <a wire:navigate href="/articles/{{$result->id}}">{{$result->title}}</a>
            </div>
        @endforeach
    </div>

</div>
