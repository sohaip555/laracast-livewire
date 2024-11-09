









<div class="m-auto w-1/2 mb-4">
    <h3 class="text-lg ⬛ text-gray-200 mb-3">Edite Article</h3>
    <form wire:submit="save()">
        <div class="mb-3">
            <h1 class="block" for="article-title">Title</h1>
            <input
                type="text"
                class="p-2 w-full border rounded-md ⬛ bg-gray-700 ⬛ text-white"
                wire:model="form.title"
            />
        </div>
        <div>
            @error('title')
            <h3 class="⬛ text-red-600"> {{$message}} </h3>
            @enderror
            {{--            @error('title') <span class="⬛ text-red-600"> {{ $message }} </span> @enderror--}}
        </div>
        <div class="mb-3">
            <label class="block" for="article-content">Content</label>
            <textarea
                id="article-content"
                class="p-2 w-full border rounded-md ⬛ bg-gray-700 ⬛ text-white"
                wire:model="form.content">

        </textarea>
            <div>
                @error('content') <span class="text-red-600"> {{ $message }} </span> @enderror
            </div>
        </div>

        <div class="mb-3">
            <label class="flex items-center">
                <input type="checkbox" name="published"
                       class="mr-2"
                       wire:model="form.published"
                >
                Published
            </label>
        </div>

        <div class="mb-3 notification-options">
            <div class="notification-heading mb-2">Notification Options</div>
            <div class="flex gap-6">
                <label class="flex items-center" for="yes-option">
                    <input type="radio" value="true" class="mr-1"
                           wire:model.boolean="form.allowNotifications">
                    Yes
                </label>
                <label class="flex items-center" for="no-option">
                    <input type="radio" value="false" class="mr-1"
                           wire:model.boolean="form.allowNotifications">
                    No
                </label>
            </div>

            <div x-show="$wire.form.allowNotifications">
                <label class="flex items-center " for="email-option">
                    <input type="checkbox" value="email" class="mr-2" id="email-option"
                           wire:model="form.notifications">
                    Email
                </label>
                <label class="flex items-center " for="sms-option">
                    <input type="checkbox" value="sms" class="mr-2" id="sms-option"
                           wire:model="form.notifications">
                    SMS
                </label>
                <label class="flex items-center " for="none-option">
                    <input type="checkbox" value="push" class="mr-2" id="none-option"
                           wire:model="form.notifications">
                    Push
                </label>
            </div>
        </div>

        <div class="mb-3">
            <button
                class="text-gray-200 p-2 bg-indigo-700 hover:bg-indigo-900 rounded-sm"
                type="submit"
            >
                Save
            </button>
        </div>
    </form>
</div>

