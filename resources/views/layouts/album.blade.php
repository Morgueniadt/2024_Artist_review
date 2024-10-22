
<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-x1 text-gray-800 leading-tight"> {{ _('All Albums') }}
</h2> </x-slot>
<div class="py-12">
<div class="max-w-7x1 mx-auto sm: px-6 1g:px-8">
<div class="bg-white overflow-hidden shadow-sm sm: rounded-lg"> <div class="p-6 text-gray-900">
<h3 class="font-semibold text-lg mb-4">List of Albums:</h3>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
@foreach ($albums as $album)
<x-album-card
:title="$album->title"
:image="$album->image"
:duration="$album->duration"
:release_date="$album->release date"
:number_of_songs="$album->number of songs"
/>
:title="$album->title"
:image="$album->image"
:duration="$album->duration"
:release_date="$album->release date"
:number_of_songs="$album->number of songs"
@endforeach
</div>
</div>
</div>
</div>
</div>
</x-app-layout>