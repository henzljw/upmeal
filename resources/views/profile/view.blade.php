<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <img class="h-32 w-32 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                <div class="font-bold px-2 pt-3 text-xl">
                    {{ Auth::user()->name }}
                </div>
                <div class="flex justify-between">
                    <div class="pl-2">
                        Joined at {{ Auth::user()->created_at->format('M d, Y') }}
                    </div>
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold my-1 mx-2 py-2 px-4 rounded" href="{{ url('profile/edit') }}" role="button">Edit profile</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
