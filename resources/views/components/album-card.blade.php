@props(['name', 'duration', 'release_date', 'number_of_songs', 'image'])

<div>
    <div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300"> 
        <h4 class="font-bold text-lg">{{ $title }}</h4>
    </div>
    <img src="{{ asset('images/books/' . $image) }}" alt="{{ $title }}">
    <p class="text-gray-600">({{ $duration }})</p>
    <p class="text-gray-800 mt-4">{{ $release_date }}</p>
    <p class="text-gray-800 mt-4">{{ $number_of_songs }}</p>
</div>
