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
                        :name="$album->name"             {{-- Album name attribute passed to the component --}}
                        :image="$album->image"           {{-- Album cover image path passed to the component --}}
                        :release_year="$album->release_year"  {{-- Album release year passed to the component --}}
                        :duration="$album->duration"      {{-- Album duration passed to the component --}}
                        :number_of_songs="$album->number_of_songs" {{-- Number of songs in the album passed to the component --}}
                    />
                    
                    {{-- Album Reviews --}}
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

                                    <!-- Edit and Delete Buttons -->
                                    @can('update', $review)  <!-- Only show for the review owner -->
                                        <a href="{{ route('reviews.edit', $review) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                    @endcan

                                    @can('delete', $review)  <!-- Only show for the review owner -->
                                        <form action="{{ route('reviews.destroy', $review) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                        </form>
                                    @endcan

                                    @can('delete', $review)  <!-- Admin can also delete -->
                                        @if(auth()->user()->role === 'admin')
                                            <form action="{{ route('reviews.destroy', $review) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                            </form>
                                        @endif
                                    @endcan
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    {{-- Add a New Review --}}
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
