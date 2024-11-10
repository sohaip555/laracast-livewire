




<div class="m-auto w-1/2 mb-4">

    <div class="mb-3 flex items-center justify-between">
        <a href="/dashboard/articles/create" class="text-blue-600 p-2 hover:text-blue-400 -indigo-900 rounded-sm" wire:navigate>
            Create Article
        </a>
        <div class="">

            <button class="text-gray-200 p-2 bg-blue-700  hover:bg-blue-900  rounded-sm"
                wire:click="showAll()">
                Show all
            </button>
            <button class="text-gray-200 p-2 bg-blue-700  hover:bg-blue-900  rounded-sm w-52"
                    wire:click="showPublished()">
                Show Published <livewire:published-count  placeholder_text="loading"/>
            </button>

        </div>


    </div>
    <div class="mt-3">{{$articles->links()}}</div>


    <table class="w-full">

        <thead class="text-xs uppercase bg-gray-700 text-gray-400 ">
            <tr>
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr wire:key="{{$article->id}}"  class="border-b bg-gray-800 border-gray-700">
                    <td class="px-6 py-3">{{$article->title}}</td>
                    <td class="px-6 py-3">
                        <a href="/dashboard/articles/{{$article->id}}/edite"
                           class="text-gray-200 p-2 "
                            wire:navigate
                        >
                            Edite
                        </a>
                        <button class="text-gray-200 p-2 bg-red-600 hover:bg-red-900 rounded-sm"
                            wire:click="delete({{$article->id}})"
                            wire:confirm="are you sure you want to delete this article">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
