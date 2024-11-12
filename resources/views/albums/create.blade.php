<x-app-layout>
    <!-- Setting up the header for the page -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Album') }} <!-- Display header text -->
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
                    <h3 class="font-semibold text-lg mb-4">Add a New Album:</h3> <!-- Section title -->

                    {{-- Using the AlbumForm component to create the album --}}
                    <x-album-form 
                        :action="route('album.store')" 
                        :method="'POST'" 
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>