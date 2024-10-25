<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Create New Album') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> <!-- Corrected max width class -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Add a New Album:</h3>
                    {{-- Using the AlbumForm component for album creation --}}
                    <x-album-form 
                        :action="route('albums.store')" 
                        method="POST" <!-- Correctly set method -->
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
