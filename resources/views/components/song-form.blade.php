@props(['action', 'method', 'albums', 'song'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <!-- Song Name Field -->
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Song Name</label>
        <input type="text" id="name" name="name" value="{{ old('name', $song->name ?? '') }}" class="mt-1 block w-full p-2 border rounded-md" required>
    </div>

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

    <!-- Song Selection -->
    <div class="mb-4">
        <label for="song_id" class="block text-sm font-medium text-gray-700">Album</label>
        <select id="song_id" name="song_id" class="mt-1 block w-full p-2 border rounded-md" required>
            <option value="">Select Song</option>
            @foreach($albums as $album) <!-- Changed $song to $songItem -->
                <option value="{{ $album->id }}" {{ old('album_id') == $album->id ? 'selected' : '' }}>
                    {{ $album->name }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Submit Button -->
    <div class="mb-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            {{ $buttonText ?? 'Create Song' }}
        </button>
    </div>
</form>
