<x-app-layout>
    <x-slot name="header">
        <h2 class="text-4xl font-extrabold text-white leading-tight tracking-wide">
            {{ __('Welcome to Your Music Review Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-purple-600 via-pink-500 to-indigo-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-lg border-t-4 border-pink-500">
                <div class="p-8 text-center">
                    <h3 class="text-3xl font-bold text-pink-600 mb-4">
                        {{ __("You're logged in! Start reviewing now!") }}
                    </h3>
                    <p class="text-lg text-gray-700 mb-6">
                        Discover and review the latest albums and tracks. Share your thoughts with the music community! 🎶
                    </p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
