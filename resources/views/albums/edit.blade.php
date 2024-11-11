<x-app-layout>
    <!-- Header section, setting up the page title -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Album') }} <!-- Display header text for the edit page -->
        </h2>
    </x-slot>

    <!-- Main content section with padding for vertical spacing -->
    <div class="py-12">
        <!-- Container to center the form with specific max width and padding -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- White background container with rounded corners and shadow for the form -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Form content area with padding and text color styling -->
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Edit Album:</h3> <!-- Section title -->

                    {{-- Using the AlbumForm component for album editing --}}
                    <x-album-form
                        :action="route('albums.update', $album)" <!-- Define the route for form submission, passing the specific album to update -->
                        :method="'PUT'" <!-- Specifies HTTP method as PUT for updating an existing album -->
                        :album="$album" <!-- Pass the album object to the form so it can prefill data -->
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
