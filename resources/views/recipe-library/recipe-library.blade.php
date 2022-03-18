{{-- Display all recipes based on the cuisine from DB --}}
{{-- recipe-library.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-auto font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Library') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto">
            <div class="w-30 mx-40">
                <div class="grid grid-cols-4 md:grid-cols-5 gap-2">
                    @foreach ($cuisines as $cuisine)
                        <div class="bg-white shadow-xl sm:rounded-lg px-5 py-5 mb-5">
                            <a href="{{ url('library/' . $cuisine->slug) }}">{{ $cuisine->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
