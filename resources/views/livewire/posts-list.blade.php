{{-- Display all posts from DB --}}
{{-- posts-list.blade.php --}}

<div class="container mx-auto">
    <div class="w-30 mx-40 mb-10">
        <h1 class="text-xl font-semibold mb-5">Recommended recipes</h1>
        <div class="grid grid-cols-4 md:grid-cols-5 gap-2">
            @foreach ($posts as $post)
                <div class="bg-white shadow-xl sm:rounded-lg px-5 py-5 mb-5">
                    <div>
                        <a class="text-xl font-semibold" href="./post/view/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
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
    <div class="w-30 mx-40 my-10">
        <div class="flex mb-5">
            <div>
                <h1 class="flex-auto text-xl font-semibold">Recent recipes</h1>
            </div>
            <div class="flex-auto text-right">
                <a href="{{ url('/recent') }}">Show more</a>
            </div>
        </div>
        <div class="grid grid-cols-4 md:grid-cols-5 gap-2">
            @foreach ($posts as $post)
                <div class="bg-white shadow-xl sm:rounded-lg px-5 py-5 mb-5">
                    <div>
                        <a class="text-xl font-semibold" href="./post/view/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
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
