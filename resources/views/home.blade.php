{{-- Main page of upmeal --}}
{{-- home.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-auto font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Home') }}
            </h2>
            <div class="flex-auto text-right">
                <a href="/post" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create new meal
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        @livewire('posts-list')
    </div>
</x-app-layout>
