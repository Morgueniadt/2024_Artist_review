<x-app-layout>
    <!-- Main content container with vertical padding -->
    <div class="py-12">
        <!-- Container to center the content with specific max width and responsive padding -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- White background container with rounded corners and shadow for styling -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Inner content area with padding and text color styling -->
                <div class="p-6 text-gray-900">


                    <!-- Use a grid layout to display albums in two columns -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Check if albums are available -->
                        @if ($albums->isEmpty())
                            <p>No albums found.</p>
                        @else
                            @foreach ($albums as $album)
                                <!-- Album container with border, padding, shadow, and rounded corners -->
                                <div class="border p-6 rounded-lg shadow-lg">
                                    <!-- Album link pointing to the show page of the album -->
                                    <a href="{{ route('album.show', $album) }}">
                                        <!-- Display the album card component with title and image -->
                                        <x-album-card 
                                            :name="$album->name" 
                                            :image="$album->image" 
                                            :duration="$album->duration" 
                                            :release_year="$album->release_year" 
                                            :number_of_songs="$album->number_of_songs" />
                                    </a>

                                    <!-- Admin specific buttons (Edit and Delete) -->
                                    @if(auth()->check() && auth()->user()->role === 'admin')
                                        <div class="mt-4 flex space-x-2">
                                            <!-- Edit Button -->
                                            <a href="{{ route('album.edit', $album) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                                                Edit
                                            </a>

                                            <!-- Delete Button -->
                                            <form action="{{ route('album.destroy', $album) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this album?');">
                                                @csrf <!-- CSRF protection for the form -->
                                                @method('DELETE') <!-- Specify that this is a DELETE request -->
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
