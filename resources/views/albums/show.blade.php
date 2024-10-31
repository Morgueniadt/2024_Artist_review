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
                        :name="$albums->name"            {{-- Album name attribute --}}
<<<<<<< HEAD
                        :cover-image="$albums->image"      {{-- Adjusted to the correct attribute for the cover image --}}
                        :year="$albums->year"              {{-- Year of the album --}}
                        :duration="$albums->duration"      {{-- Duration of the album --}}
=======
                        :cover-image="$albums->image"    {{-- Adjusted to the correct attribute for the cover image --}}
                        :year="$albums->year"            {{-- Year of the album --}}
                        :duration="$albums->duration"    {{-- Duration of the album --}}
>>>>>>> a71220dd7e4c92547d714fd381bab85e00711cac
                        :number-of-songs="$albums->number_of_songs" {{-- Number of songs in the album --}}
                    />

                    {{-- Edit Button --}}
                    <div class="mt-6">
                        <a href="{{ route('albums.edit', $albums->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">
                            {{ __('Edit Album') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
