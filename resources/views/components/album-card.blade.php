@props(['name', 'duration', 'release_year', 'number_of_songs', 'image'])

<div>
    <div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300"> 
        <h4 class="font-bold text-lg">{{ $name }}</h4>
    </div>
    <img src="{{ url($image) }}" class="w-24 h-24 object-cover"/>    
    <p class="text-gray-600">({{ $duration }})</p>
    <p class="text-gray-800 mt-4">{{ $release_year }}</p>
    <p class="text-gray-800 mt-4">{{ $number_of_songs }}</p>
</div>


