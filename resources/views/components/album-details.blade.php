@props(['name', 'duration', 'release_year', 'number_of_songs', 'image'])

// Album Details Component
<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto"> 
    <!-- Limit the overall container width -->
    
    <!-- Album Title -->
    <h1 class="font-bold text-gray-800 mb-2" style="font-size: 2.5rem;">{{ $name }}</h1> 
    <!-- Heading with larger text and color -->
    
    <!-- Album Cover Image -->
    <div class="overflow-hidden rounded-lg mb-4 flex justify-center">
        @if ($image)
            <img src="{{ asset($image) }}" alt="Album Cover" class="max-w-full h-auto rounded-lg" />
        @else
            <p class="text-gray-500">No image available</p>
        @endif
        <!-- Image is restricted to a smaller size -->
    </div>
    
    <!-- Release Date -->
    <h2 class="text-gray-500 text-sm italic mb-4">Released: {{ $release_year }}</h2> 
    <!-- Emphasizing release date -->
    
    <!-- Album Duration -->
    <h3 class="text-gray-800 font-semibold mb-2" style="font-size: 1.5rem;">Duration</h3> 
    <!-- Subheading for duration -->
    <p class="text-gray-700 leading-relaxed mb-4">{{ $duration }}</p> 
    <!-- Text is spaced out for readability -->

    <!-- Number of Songs -->
    <h3 class="text-gray-800 font-semibold mb-2" style="font-size: 1.5rem;">Number of Songs</h3> 
    <!-- Subheading for number of songs -->
    <p class="text-gray-700 leading-relaxed">{{ $number_of_songs }}</p> 
    <!-- Text is spaced out for readability -->
</div>
