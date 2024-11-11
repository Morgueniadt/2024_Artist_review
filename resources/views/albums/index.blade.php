<x-app-layout>
    <!-- Main content container with vertical padding -->
    <div class="py-12">
        <!-- Container to center the content with specific max width and responsive padding -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- White background container with rounded corners and shadow for styling -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Inner content area with padding and text color styling -->
                <div class="p-6 text-gray-900">
                    <!-- Outer container for each album, with a border, padding, rounded corners, and shadow -->
                    <div class="border p-4 rounded-lg shadow-md">
                        <!-- Loop through each album from the $albums collection -->
                        @foreach ($albums as $album)
                            <!-- Album link, pointing to the show page of the album -->
                            <a href="{{ route('albums.show', $album) }}">
                                <!-- Display the album card component with title and image -->
                                <x-album-card :title="$album->title" :image="$album->image" />
                            </a>

                            <!-- Edit and Delete Buttons container -->
                            <div class="mt-4 flex space-x-2">
                                <!-- Edit Button: Links to the edit page for the specific album -->
                                <a href="{{ route('albums.edit', $album) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                                    Edit
                                </a>

                                <!-- Delete Button: A form to handle the deletion of the album -->
                                <form action="{{ route('albums.destroy', $album) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this album?');">
                                    @csrf <!-- CSRF protection for the form -->
                                    @method('DELETE') <!-- Specify that this is a DELETE request -->
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-gray-100 font-bold py-2 px-4 rounded">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
