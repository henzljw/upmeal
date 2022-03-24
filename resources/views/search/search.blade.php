{{-- Search bar --}}
{{-- search.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="flex-auto font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @livewire('search')
    </div>
</x-app-layout>
