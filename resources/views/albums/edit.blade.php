<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Edit Album') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Edit Album Details</h3>

                    <!-- Form to edit the existing album -->
                    <form action="{{ route('albums.update', $album->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Use PUT method for updates -->

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Album name Input -->
                            <div>
                                <label for="name" class="block font-medium text-gray-700">Album name</label>
                                <input type="text" id="name" name="name" value="{{ old('name', $album->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>

                            <!-- Album Image Input -->
                            <div>
                                <label for="image" class="block font-medium text-gray-700">Album Image</label>
                                <input type="file" id="image" name="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <p class="mt-2 text-sm text-gray-500">Leave blank to keep the current image.</p>
                            </div>

                            <!-- Album Duration Input -->
                            <div>
                                <label for="duration" class="block font-medium text-gray-700">Duration</label>
                                <input type="text" id="duration" name="duration" value="{{ old('duration', $album->duration) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>

                            <!-- Release Date Input -->
                            <div>
                                <label for="release_year" class="block font-medium text-gray-700">Release Date</label>
                                <input type="date" id="release_year" name="release_year" value="{{ old('release_year', $album->release_year) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>

                            <!-- Number of Songs Input -->
                            <div>
                                <label for="number_of_songs" class="block font-medium text-gray-700">Number of Songs</label>
                                <input type="number" id="number_of_songs" name="number_of_songs" value="{{ old('number_of_songs', $album->number_of_songs) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>
                        </div>

                        <div class="mt-6">
                            <!-- Submit Button -->
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Update Album
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
