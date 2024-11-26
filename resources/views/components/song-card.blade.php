@props([
    'name', 
    'duration',
    'release_year',
    'image'
])

<div class="">
    <!-- Album name inside a bold heading -->
    <h4 class="font-bold text-xl mb-2">{{ $name }}</h4>

    <!-- Display image with fixed size of 250x250 -->
    <img src="{{ url($image) }}" class="w-64 h-64 object-cover mx-auto mb-4" alt="{{ $name }} Album Image"/>    

    <!-- Display song duration -->
    <p class="text-gray-600 text-sm">Duration: {{ $duration }}</p>
    
    <!-- Display song release year -->
    <p class="text-gray-800 text-sm mt-2">Release Year: {{ $release_year }}</p>

    <!-- Display the number of songs -->

</div>
