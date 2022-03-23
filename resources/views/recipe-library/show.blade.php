{{-- Display all recipes based on the cuisine from DB --}}
{{-- recipe-library.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-auto font-semibold text-xl text-gray-800 leading-tight">
                {{ $cuisines->name }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto">
            <div class="w-30 mx-40">
                <div class="grid grid-cols-4 md:grid-cols-5 gap-2">
                    @forelse ($posts as $post)
                        <div class="bg-white shadow-xl sm:rounded-lg px-5 py-5 mb-5">
                            <div class="flex flex-row justify-between">
                                <div>
                                    <a class="text-xl font-semibold"
                                        href="{{ url('library/' . $cuisines->slug . '/' . $post->slug) }}">
                                        {{ $post->title }}
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                            <path
                                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-5">
                                <img src="{{ Storage::url($post->image) }}" alt="" height="400" width="570" alt="" />
                            </div>
                            <p class="truncate text-justify mt-5">
                                {{ $post->description }}
                            </p>
                            <div>
                                <p class="mt-5">
                                    {{ $post->created_at->format('M d, Y, H:i') }}
                                </p>
                            </div>
                            <a class="inline-block my-5 px-6 py-2.5 bg-gray-800 text-white font-medium text-xs
                            leading-tight uppercase rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg
                            focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900
                            active:shadow-lg transition duration-150 ease-in-out"
                                href="/post/view/{{ $post->slug }}">
                                Learn more
                            </a>
                            <div class="flex">
                                <img class="flex h-10 w-10 mr-2 rounded-full object-cover"
                                    src="{{ $post->user->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                <div class="flex mt-2">
                                    {{ $post->user->name }}
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1 class="text-center">No post available yet for {{ $cuisines->name }} cuisines</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
