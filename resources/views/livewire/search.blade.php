<div>
    <div>

        <form>

            <div class="mt-2">

                <input
                    type="text"
                    class="px-2 w-60 border rounded-md bg-gray-700 text-white"
                    wire:model.live.debounce="searchText"
                    placeholder= {{$placeHolder}}
                >

                <button class="p-4 text-white font-medium disabled:bg-indigo-400 rounded-md bg-indigo-600"
                wire:click.prevent="clear()"
                {{empty($searchText) ? 'disabled' : ''}}>Clear</button>
            </div>

        </form>

        <livewire:search-result :$results :show="!empty($searchText)"/>
    </div>

</div>
