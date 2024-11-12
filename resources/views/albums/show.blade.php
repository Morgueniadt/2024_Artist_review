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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>