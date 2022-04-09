{{-- Display all recent meals from DB --}}
{{-- recent-posts.blade.php --}}

<x-slot name="header">
    <div class="flex">
        <h2 class="flex-auto font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recent meals') }}
        </h2>
    </div>
</x-slot>

<div class="py-12">
    <div class="container mx-auto">
        <div class="w-30 mx-40">
            <div class="grid grid-cols-4 md:grid-cols-5 gap-2">
                @foreach ($posts as $post)
                    <div class="bg-white shadow-xl sm:rounded-lg px-5 py-5 mb-5">
                        <a class="text-xl font-semibold" href="./post/view/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
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
                            href="./post/view/{{ $post->slug }}">
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
                @endforeach
            </div>
        </div>
    </div>
</div>
