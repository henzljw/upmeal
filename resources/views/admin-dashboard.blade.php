<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div class="rounded-lg shadow-xl bg-green-200 p-5">
                    <header class="font-bold text-lg text-center">
                        Total registered users
                    </header>
                    <h2 class="my-5 text-xl text-center">{{ $totalUsers }}</h2>
                    <a href="{{ url('admin/users') }}">Show more</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
