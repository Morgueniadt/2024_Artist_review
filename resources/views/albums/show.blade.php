<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Album Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Album Details</h3>
                    <x-album-details
                        :name="$album->name"            {{-- Album name attribute --}}
                        :image="$album->image"    {{-- Adjusted to the correct attribute for the cover image --}}
                        :release_year="$album->release_year"            {{-- Year of the album --}}
                        :duration="$album->duration"    {{-- Duration of the album --}}
                        :number_of_songs="$album->number_of_songs" {{-- Number of songs in the album --}}
                    />

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
