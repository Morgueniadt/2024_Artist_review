@props(['action', 'method', 'albums', 'song', 'image'])

@csrf
@if($method === 'PUT' || $method === 'PATCH')
    @method($method)
@endif

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">

    <!-- Song Name Field -->
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Song Name</label>
        <input type="text" id="name" name="name" value="{{ old('name', $song->name ?? '') }}" class="mt-1 block w-full p-2 border rounded-md" required>
    </div>

    <!-- Image Field -->
    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Album Image</label>
        <input
            type="file"
            name="image"
            id="image"
            accept="image/*"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    
    <!-- Display Current Image if Editing -->
    @isset($song->image)
        <div class="mb-4">
            <img src="{{ asset('storage/' . $song->image) }}" alt="{{ $song->name }}" class="w-24 h-24 object-cover rounded-md">
        </div>
    @endisset

    <!-- Duration Field -->
    <div class="mb-4">
        <label for="duration" class="block text-sm font-medium text-gray-700">Duration</label>
        <input type="text" id="duration" name="duration" value="{{ old('duration', $song->duration ?? '') }}" class="mt-1 block w-full p-2 border rounded-md" required>
    </div>

    <!-- Release Year Field -->
    <div class="mb-4">
        <label for="release_year" class="block text-sm font-medium text-gray-700">Release Year</label>
        <input type="text" id="release_year" name="release_year" value="{{ old('release_year', $song->release_year ?? '') }}" class="mt-1 block w-full p-2 border rounded-md" required>
    </div>

    <!-- Album Selection -->
    <div class="mb-4">
        <label for="album_id" class="block text-sm font-medium text-gray-700">Album</label>
        <select id="album_id" name="album_id" class="mt-1 block w-full p-2 border rounded-md" required>
            <option value="">Select Album</option>
            @foreach($albums as $album)
                <option value="{{ $album->id }}" {{ old('album_id', $song->album_id ?? '') == $album->id ? 'selected' : '' }}>
                    {{ $album->name }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Submit Button -->
    <div class="mb-4">
        <x-primary-button>
            {{ $buttonText ?? 'Create Song' }}
        </x-primary-button>
    </div>
</form>
