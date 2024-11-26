<x-app-layout>
    <!-- Main content container with vertical padding -->
    <div class="py-12">
        <!-- Container to center the content with specific max width and responsive padding -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- White background container with rounded corners and shadow for styling -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Inner content area with padding and text color styling -->
                <div class="p-6 text-gray-900">

                    <!-- Use a flex container to stack song vertically -->
                    <div class="space-y-6">
                        <!-- Check if song are available -->
                        @if ($songs->isEmpty())
                            <p>No song found.</p>
                        @else
                            @foreach ($songs as $song)
                                <!-- Song container with border, padding, shadow, and rounded corners -->
                                <div class="border p-6 rounded-lg shadow-lg">
                                    <!-- Album song details stacked one on top of the other -->
                                    <a href="{{ route('song.show', $song) }}">
                                        <!-- Display song details -->
                                        <div class="space-y-4">
                                            <!-- Song Title -->
                                            <h2 class="text-xl font-semibold">{{ $song->name }}</h2>

                                            <!-- Song Image (adjusted size) -->
                                            <img src="{{ $song->image }}" alt="{{ $song->name }}" class="w-64 h-64 rounded-md shadow-md">

                                            <!-- Song Duration -->
                                            <p class="text-gray-600">Duration: {{ $song->duration }}</p>

                                            <!-- Release Year -->
                                            <p class="text-gray-600">Released: {{ $song->release_year }}</p>
                                        </div>
                                    </a>

                                    <!-- Admin specific buttons (Edit and Delete) -->
                                    @if(auth()->check() && auth()->user()->role === 'admin')
                                        <div class="mt-4 flex space-x-2">
                                            <!-- Edit Button -->
                                            <a href="{{ route('song.edit', $song) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                                                Edit
                                            </a>

                                            <!-- Delete Button -->
                                            <form action="{{ route('song.destroy', $song) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this song?');">
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
