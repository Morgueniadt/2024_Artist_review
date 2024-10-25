@props(['action', 'method', 'album' => null]) <!-- Accepts action, method, and an optional album -->

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)

    <!-- Album Title Input -->
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Album Title</label>
        <input 
            type="text" 
            name="title" 
            id="title" 
            value="{{ old('title', $album->title ?? '') }}" <!-- Uses old input or the album's title -->
            required 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p> <!-- Displays error message for title -->
        @enderror
    </div>

    <!-- Album Image Input -->
    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Album Cover Image</label>
        <input 
            type="file" 
            name="image" 
            id="image" 
            {{ isset($album) ? '' : 'required' }} <!-- Required if no album is being edited -->
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p> <!-- Displays error message for image -->
        @enderror
    </div>

    @isset($album->image)
        <!-- Displays current album image -->
        <div class="mb-4">
            <img src="{{ asset('images/albums/' . $album->image) }}" alt="Album cover" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <!-- Submit Button -->
    <div>
        <x-primary-button>
            {{ isset($album) ? 'Update Album' : 'Add Album' }} <!-- Button text based on context -->
        </x-primary-button>
    </div>
</form>
