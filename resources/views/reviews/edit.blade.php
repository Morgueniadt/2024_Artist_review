<x-app-layout>
    <!-- Setting up the header for the page -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Review') }}
        </h2>
    </x-slot>

    <!-- Main content section with padding for vertical spacing -->
    <div class="py-12">
        <!-- Container to center the form with specific max width and padding -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- White background container with rounded corners and shadow for the form -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Form content area with padding and text color styling -->
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Edit Review:</h3>

                    {{-- Use the review-form component for editing reviews --}}
                    <x-review-form
                        :action="route('reviews.update', $review)"  
                        :method="'PUT'"                             
                        :review="$review"                           
                        :album="$album"                            
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
