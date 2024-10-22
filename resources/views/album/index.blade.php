
<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-x1 text-gray-800 leading-tight"> {{ ____('All Books') }}
</h2> </x-slot>
<div class="py-12">
<div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-sm sm: rounded-lg"> <div class="p-6 text-gray-900">
<h3 class="font-semibold text-lg mb-4">List of Books: </h3>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"> @foreach ($books as $book)
<x-book-card
:title="$book->title"
:image="$book->image"
/>
:author="$book->author"
:year="$book->year"
:description="$book->description"
@endforeach
</div>
</div>
</div>
</div>
</div>
</x-app-layout>