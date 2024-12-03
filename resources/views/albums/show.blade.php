<x-app-layout>
    <!-- Header Section -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Album Details') }}
        </h2>
    </x-slot>

    <!-- Main Content Section -->
    <div class="py-12">
        <!-- Container for centering the content with responsive padding -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- White background container with rounded corners and shadow for styling -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Content area with padding and text color styling -->
                <div class="p-6 text-gray-900">
                    <!-- Title for the page (Album Details) -->
                    <h3 class="font-semibold text-lg mb-4">Album Details</h3>

                    <!-- Album Details Component: Passing album data to the component -->
                    <x-album-details
                        :name="$album->name"
                        :image="$album->image"
                        :release_year="$album->release_year"
                        :duration="$album->duration"
                        :number_of_songs="$album->number_of_songs"
                    />

                    <!-- Links to External Platforms (YouTube, Spotify) -->
                    <div class="mt-4">
                        @if($album->youtube_link)
                            <a href="{{ $album->youtube_link }}" target="_blank" class="bg-red-600 hover:bg-red-800 text-white font-semibold py-3 px-6 rounded-full shadow-lg inline-block mb-2 mr-2">
                                Listen on YouTube
                            </a>
                        @endif
                        @if($album->spotify_link)
                            <a href="{{ $album->spotify_link }}" target="_blank" class="bg-green-600 hover:bg-green-800 text-white font-semibold py-3 px-6 rounded-full shadow-lg inline-block mb-2">
                                Listen on Spotify
                            </a>
                        @endif
                    </div>

                    <!-- Album Reviews Section -->
                    <h4 class="font-semibold text-md mt-8">Reviews</h4>
                    @if($album->reviews->isEmpty())
                        <p class="text-gray-600">No reviews yet.</p>
                    @else
                        <ul class="mt-4 space-y-4">
                            @foreach($album->reviews as $review)
                                <li class="bg-gray-100 p-4 rounded-lg">
                                    <p class="font-semibold">{{ $review->user->name }} ({{ $review->created_at->format('M d, Y') }})</p>
                                    <p>Rating: {{ $review->rating }} / 5</p>
                                    <p>{{ $review->comment }}</p>

                                    {{-- Only show edit and delete options if the user is the reviewer or an admin --}}
                                    @if ($review->user->is(auth()->user()) || auth()->user()->role === "admin")
                                        <!-- Edit Review Link -->
                                        <a href="{{ route('reviews.edit', $review) }}" class="bg-yellow-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                                            Edit Review
                                        </a>

                                        <!-- Delete Review Form -->
                                        <form method="POST" action="{{ route('reviews.destroy', $review) }}" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                                                Delete Review
                                            </button>
                                        </form>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <!-- Add a New Review -->
                    <h4 class="font-semibold text-md mt-8">Add a Review</h4>
                    <form action="{{ route('reviews.store', $album) }}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-4">
                            <label for="rating" class="block font-medium text-sm text-gray-700">Rating</label>
                            <select name="rating" id="rating" class="mt-1 block w-full" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="comment" class="block font-medium text-sm text-gray-700">Comment</label>
                            <textarea name="comment" id="comment" rows="3" class="mt-1 block w-full" placeholder="Write your review here..."></textarea>
                        </div>
                        <!-- Hidden input to pass album_id -->
                        <input type="hidden" name="album_id" value="{{ $album->id }}">

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Submit Review
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
