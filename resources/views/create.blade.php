

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="display: flex; justify-content: center">
                    <form action="{{ route('store') }}" method="post" style="display: flex; flex-direction: column; width: 100%; padding: 10px;" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" style="width: 250px; border-radius: 5px; color: #000" placeholder="Title...">
                        <textarea name="text" rows="10" style="border-radius: 5px; margin-top: 5px; color: #000" placeholder="Text..."></textarea>
                        <label for="image" style="margin-top: 5px">Image: <input type="file" id="image" name="image" style="border-radius: 5px;"></label>
                        <div style="width: 100%; display: flex; justify-content: center">
                            <button type="submit" style="background: #0c63e4; width: 25%; padding: 8px 15px; border-radius: 5px; margin-top: 5px">Create</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
