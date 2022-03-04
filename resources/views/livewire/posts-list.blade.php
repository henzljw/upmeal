{{-- Display all posts from DB --}}
{{-- posts-list.blade.php --}}

<div class="max-w-2xl mx-auto sm:px-6 lg:px-8 items-center justify-center py-0">
    @foreach ($posts as $post)
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-5 py-5 mb-5">
            {{-- <div class="flex pb-5">
                <img class="h-10 w-10 rounded-full object-cover flex" src="{{ $post->profile_photo_url }}"
                    alt="{{ $post->user_id }}" />
                <span class="pt-2 ml-3">
                    {{ $post->name }}
                </span>
            </div> --}}
            <a class="text-xl font-semibold" href="./post/view/{{ $post->slug }}">
                {{ $post->title }}
            </a>
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
    @endforeach
</div>
