@props([
    'song', 
    'duration',
    'release_year',
    'image'
    'album'
])

<div class="">
    <!-- Song name inside a bold heading -->
    <h4 class="font-bold text-xl mb-2">{{ $song->name }}</h4>

    <!-- Display image with fixed size of 250x250 -->
    <img src="{{ url($image) }}" class="w-64 h-64 object-cover mx-auto mb-4" alt="{{ $song->name }} Album Image"/>

    <!-- Display song duration -->
    <p class="text-gray-600 text-sm">Duration: {{ $duration }}</p>
    
    <!-- Display song release year -->
    <p class="text-gray-800 text-sm mt-2">Release Year: {{ $release_year }}</p>

    <!-- Display the album(s) that the song is part of -->
    <div class="mt-4">
        <h5 class="font-semibold text-lg">Album(s):</h5>
        @foreach($song->albums as $album)
            <p class="text-gray-700 text-sm">{{ $album->name }} ({{ $album->release_year }})</p>
        @endforeach
    </div>
</div>
