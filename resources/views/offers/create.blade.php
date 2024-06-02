<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Offer Create') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="bg-gray-100 flex items-center justify-center h-screen">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
                <h2 class="text-2xl font-bold mb-6 text-center">Create Offer</h2>
                <form action="{{ route('offers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                        <input type="text" name="title" id="title"
                            class="w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 font-bold mb-2">Price</label>
                        <input type="text" name="price" id="price"
                            class="w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 font-bold mb-2">Category</label>
                        <select id="category" name="category_id" class="w-full px-3 py-2 border rounded" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="location" class="block text-gray-700 font-bold mb-2">Location</label>
                        <select id="location" name="location_id" class="w-full px-3 py-2 border rounded" required>
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 font-bold mb-2">Image</label>
                        <input type="file" name="image" id="image"
                            class="w-full p-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                        <textarea name="description" id="description" class="w-full p-2 border border-gray-300 rounded-md" rows="4"
                            required></textarea>
                    </div>
                    <div class="flex justify-between">
                        <a href="{{ route('offers.index') }}"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Cancel
                        </a>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</x-app-layout>
