{{-- View post --}}
{{-- show.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="flex-auto text-center font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-5 py-5 mb-5">
                <h1 class="text-xl font-semibold">
                    {{ $post->title }}
                </h1>
                <p class="text-justify mt-5">
                    {{ $post->description }}
                </p>
                <p class="mt-5">
                    {{ $post->created_at->format('M d, Y, H:i') }}
                </p>
                {{-- <div class="flex mt-5">
                <div class="flex-auto">
                    <button type="button"
                        class="h-10 w-64 inline-block px-6 py-2 border-2 border-gray-800 text-gray-800 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                        Like
                    </button>
                </div>
                <div class="flex-auto">
                    <button type="button"
                        class="h-10 w-64 inline-block px-6 py-2 border-2 border-gray-800 text-gray-800 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                        Save
                    </button>
                </div>
            </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>
