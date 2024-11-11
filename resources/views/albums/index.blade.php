<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="border p-4 rounded-lg shadow-md">
                        <!-- Loop through each album and display it -->
                        @foreach ($albums as $album)
                            <!-- Album Link -->
                            <a href="{{ route('albums.show', $album) }}">
                                <x-album-card :title="$album->title" :image="$album->image" />
                            </a>

                            <!-- Edit and Delete Buttons -->
                            <div class="mt-4 flex space-x-2">
                                <!-- Edit Button (route to albums.edit) -->
                                <a href="{{ route('albums.edit', $album) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                                    Edit
                                </a>
                                <!-- Delete Button (form to send DELETE request) -->
                                <form action="{{ route('albums.destroy', $album) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this album?');">
                                    @csrf
                                    @method('DELETE')
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
