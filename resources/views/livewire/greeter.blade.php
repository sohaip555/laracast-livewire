<div>

    <form
        wire:submit="ChangeGreeting()"
    >

        <div class="mt-2">
            <select
                type="text"
                class="p-4 px-8 border rounded-md bg-gray-700 text-white"
                wire:model.fill="greeting"
            >

                @foreach($greetings as $item)
                    <option value="{{$item->greeting}}">
                        {{$item->greeting}}
                    </option>
                @endforeach

            </select>

            <input
                type="text"
                class="p-4 border rounded-md bg-gray-700 text-white"
                wire:model="name"
            >
        </div>

        <div class="text-red-600">
            @error('name')
                {{$message}}
            @enderror
        </div>

        <div class="mt-2">
            <button
                class="text-white font-medium rounded-md px-4 py-4 bg-blue-600"
            >
                change name
            </button>
        </div>
    </form>

    @if($greetingMessage !== '')
        <div>
            {{$greetingMessage}}
        </div>
    @endif

</div>

