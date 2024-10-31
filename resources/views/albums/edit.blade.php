<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Create New Album') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Add New Album Details</h3>

                    <!-- Form to create a new album -->
                    <form action="{{ route('albums.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Album Title Input -->
                            <div>
                                <label for="title" class="block font-medium text-gray-700">Album Title</label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>

                            <!-- Album Image Input -->
                            <div>
                                <label for="image" class="block font-medium text-gray-700">Album Image</label>
                                <input type="file" id="image" name="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>

                            <!-- Album Duration Input -->
                            <div>
                                <label for="duration" class="block font-medium text-gray-700">Duration</label>
                                <input type="text" id="duration" name="duration" value="{{ old('duration') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>

                            <!-- Release Date Input -->
                            <div>
                                <label for="release_year" class="block font-medium text-gray-700">Release Date</label>
<<<<<<< HEAD
                                <input type="date" id="release_year" name="release_year" value="{{ old('release_year', $album->release_year) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
=======
                                <input type="date" id="release_year" name="release_year" value="{{ old('release_year') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
>>>>>>> a71220dd7e4c92547d714fd381bab85e00711cac
                            </div>

                            <!-- Number of Songs Input -->
                            <div>
                                <label for="number_of_songs" class="block font-medium text-gray-700">Number of Songs</label>
                                <input type="number" id="number_of_songs" name="number_of_songs" value="{{ old('number_of_songs') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>
                        </div>

                        <div class="mt-6">
                            <!-- Submit Button -->
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Create Album
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
