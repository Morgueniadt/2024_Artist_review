<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('All Albums') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Albums:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($albums as $album)
                            <div class="relative">
                                <a href="{{ route('album.show', $album) }}">
                                    <x-album-card
                                        :name="$album->name"
                                        :image="$album->image"
                                        :duration="$album->duration"
                                        :release_date="$album->release_date"
                                        :number_of_songs="$album->number_of_songs"
                                    />
                                </a>
                                <a href="{{ route('albums.edit', $album) }}" class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-md hover:bg-blue-700">
                                    Edit
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
