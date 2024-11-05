@props(['action', 'method'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <!-- Album Name -->
    <div class="mb-4">
        <label for="name" class="block text-sm text-gray-700">Album Name</label>
        <input
            type="text"
            name="name"
            id="name"
            value="{{ old('name', $album->name ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('name')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Album Duration -->
    <div class="mb-4">
        <label for="duration" class="block text-sm text-gray-700">Album Duration</label>
        <input
            type="text"
            name="duration"
            id="duration"
            value="{{ old('duration', $album->duration ?? '') }}"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
            required
        />
        @error('duration')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Number of Songs -->
    <div class="mb-4">
        <label for="number_of_songs" class="block text-sm text-gray-700">Number of Songs</label>
        <input
            type="number"
            name="number_of_songs"
            id="number_of_songs"
            value="{{ old('number_of_songs', $album->number_of_songs ?? '') }}"
            min="1"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
            required
        />
        @error('number_of_songs')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Release Year -->
    <div class="mb-4">
        <label for="year" class="block text-sm text-gray-700">Release Year</label>
        <input
            type="number"
            name="year"
            id="year"
            value="{{ old('year', $album->year ?? '') }}"
            min="1900" max="{{ date('Y') }}"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
            required
        />
        @error('year')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Album Cover Image -->
    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Album Cover Image</label>
        <input
            type="file"
            name="image"
            id="image"
            {{ isset($album) ? '' : 'required' }}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    @isset($album->image)
        <!-- Display Existing Album Cover -->
        <div class="mb-4">
            <img src="{{ asset($album->image) }}" alt="Album Cover" class="w-24 h-24 object-cover rounded-lg shadow-lg">
        </div>
    @endisset

    <!-- Submit Button -->
    <div>
        <x-primary-button>
            {{ isset($album) ? 'Update Album' : 'Add Album' }}
        </x-primary-button>
    </div>
</form>
