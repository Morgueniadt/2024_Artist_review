<!-- resources/views/components/review-form.blade.php -->

<form action="{{ $action }}" method="POST">
    @csrf
    @method($method)

    <div class="mb-4">
        <label for="rating" class="block font-medium text-sm text-gray-700">Rating</label>
        <select name="rating" id="rating" class="mt-1 block w-full" required>
            <option value="1" {{ $review->rating == 1 ? 'selected' : '' }}>1</option>
            <option value="2" {{ $review->rating == 2 ? 'selected' : '' }}>2</option>
            <option value="3" {{ $review->rating == 3 ? 'selected' : '' }}>3</option>
            <option value="4" {{ $review->rating == 4 ? 'selected' : '' }}>4</option>
            <option value="5" {{ $review->rating == 5 ? 'selected' : '' }}>5</option>
        </select>
    </div>

    <div class="mb-4">
        <label for="comment" class="block font-medium text-sm text-gray-700">Comment</label>
        <textarea name="comment" id="comment" rows="3" class="mt-1 block w-full" placeholder="Write your review here...">{{ $review->comment }}</textarea>
    </div>

    <!-- Hidden input to pass album_id -->
    <input type="hidden" name="album_id" value="{{ $album->id }}">

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        {{ __('Update Review') }}
    </button>
</form>
