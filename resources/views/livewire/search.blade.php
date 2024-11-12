<div>
    <div>

        <form >

            <div class="mt-2">

                <input
                    type="text"
                    class="mr-8 w-60 border rounded-md bg-gray-700 text-white"
                    wire:offline.attr="disabled"
                    wire:model.live.debounce="searchText"
                    placeholder= "{{$placeholder}}"
                >
            </div>

        </form>

        @if(!empty($searchText))
            <div wire:transition.scale.origin.bottom.left>
                <livewire:search-result :$results/>
            </div>
        @endif
    </div>

</div>

{{--                <button class="p-4 text-white font-medium
{{--                    disabled:bg-indigo-400 rounded-md bg-indigo-600"--}}
{{--                wire:click.prevent="clear()"--}}
{{--                {{empty($searchText) ? 'disabled' : ''}}>Clear</button>--}}
