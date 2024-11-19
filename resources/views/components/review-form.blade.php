@props(['action', 'method', 'album', 'review'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <!-- Rating Input (Dropdown) -->
    <div class="mb-4">
        <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
        <select name="rating" id="rating" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            <option value="">Select a Rating</option>
            <option value="1" {{ old('rating', $review->rating ?? '') == 1 ? 'selected' : '' }}>1</option>
            <option value="2" {{ old('rating', $review->rating ?? '') == 2 ? 'selected' : '' }}>2</option>
            <option value="3" {{ old('rating', $review->rating ?? '') == 3 ? 'selected' : '' }}>3</option>
            <option value="4" {{ old('rating', $review->rating ?? '') == 4 ? 'selected' : '' }}>4</option>
            <option value="5" {{ old('rating', $review->rating ?? '') == 5 ? 'selected' : '' }}>5</option>
        </select>
        @error('rating')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Comment Input -->
    <div class="mb-4">
        <label for="comment" class="block text-sm font-medium text-gray-700">Comment</label>
        <textarea name="comment" id="comment" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('comment', $review->comment ?? '') }}</textarea>
        @error('comment')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Submit Button -->
    <x-primary-button>
        {{ isset($review) ? 'Update Review' : 'Save Review' }}
    </x-primary-button>

    <!-- Cancel Button -->
    <button type="button" onclick="window.location='{{ route('album.show', $album->id) }}'" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md ml-2">
        Cancel
    </button>
</form>
