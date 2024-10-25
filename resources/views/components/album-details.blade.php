<!-- Album Details Component -->
<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto"> <!-- Limit the overall container width -->
    <!-- Album Title -->
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $name }}</h1> <!-- Heading with larger text and color -->
    
    <!-- Album Cover Image -->
    <div class="overflow-hidden rounded-lg mb-4 flex justify-center">
        <!-- Image is further restricted to a smaller size -->
        <img src="{{ asset('images/albums/' . $image) }}" alt="{{ $name }}" class="w-full max-w-xs h-auto object-cover"> <!-- Restrict image size -->
    </div>
    
    <!-- Release Date -->
    <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Released: {{ $release_date }}</h2> <!-- Emphasizing release date -->
    
    <!-- Album Duration -->
    <h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">Duration</h3> <!-- Subheading for duration -->
    <p class="text-gray-700 leading-relaxed">{{ $duration }}</p> <!-- Text is spaced out for readability -->

    <!-- Number of Songs -->
    <h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">Number of Songs</h3> <!-- Subheading for number of songs -->
    <p class="text-gray-700 leading-relaxed">{{ $number_of_songs }}</p> <!-- Text is spaced out for readability -->

    <!-- Description -->
    <h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">Description</h3>
    <p class="text-gray-700 leading-relaxed">{{ $description }}</p> <!-- Text is spaced out for readability -->
</div>