@props([
    'song', 
    'duration',
    'release_year',
    'image',
    'album'
])

<!-- Song Details Component -->
<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">

    <!-- Song Image (use song cover or specific song artwork) -->
    <img src="{{ url($image) }}" alt="Song Cover" class="w-full h-64 object-cover rounded-lg mb-4">

    <!-- Song name -->
    <h1 class="font-bold text-gray-800 mb-2 text-2xl md:text-3xl">{{ $song->name }}</h1> <!-- Adjust font size on different screen sizes -->

    <!-- Song Duration -->
    <h3 class="text-gray-800 font-semibold mb-2 text-xl md:text-2xl">Duration</h3> 
    <p class="text-gray-700 leading-relaxed mb-4 text-base md:text-lg">{{ $duration }}</p> <!-- Adjust text size for readability -->

    <!-- Release Year -->
    <h2 class="text-gray-500 text-sm italic mb-4">Released: {{ $release_year }}</h2> 

    
    <div class="mt-4">
        <h5 class="font-semibold text-lg">Album(s):</h5>
        @foreach($song->albums as $album)
            <p class="text-gray-700 text-sm">{{ $album->name }} ({{ $album->release_year }})</p>
        @endforeach
    </div>




</div>
