<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-auto font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Home') }}
            </h2>
            <div class="flex-auto text-right">
                <a href="/post" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">New post</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        @livewire('posts')
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 items-center justify-center">
            @foreach ($allPosts as $allPost)
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-5 py-5 my-5">
                <h1 class="text-xl font-semibold">
                    {{ $allPost->title }}
                </h1>
                <p class="text-justify">
                    {{ $allPost->description }}
                </p>
            </div>
            @endforeach
        </div> --}}
    </div>
</x-app-layout>
