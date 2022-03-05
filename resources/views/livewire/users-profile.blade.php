{{-- User profile page --}}
{{-- users-profile.blade.php --}}

<x-slot name="header">
    @if (Auth::user()->user_type === 'ADM')
        <h2 class="flex-auto font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    @elseif (Auth::user()->user_type === 'USR')
        <div class="flex">
            <h2 class="flex-auto font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
            <div class="flex-auto text-right">
                <a href="/post" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    New post
                </a>
            </div>
        </div>
    @endif
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <img class="h-32 w-32 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                alt="{{ Auth::user()->name }}" />
            <div class="font-bold px-2 pt-3 text-xl">
                {{ Auth::user()->name }}
            </div>
            <div class="flex justify-between">
                <div class="pl-2">
                    Joined at {{ Auth::user()->created_at->format('M d, Y') }}
                </div>
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold my-1 mx-2 py-2 px-4 rounded"
                    href="{{ url('profile/edit') }}" role="button">Edit profile</a>
            </div>
        </div>
    </div>
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 items-center justify-center py-10">
        @foreach (auth()->user()->posts as $post)
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-5 py-5 mb-5">
                {{-- <div class="flex pb-5">
                        <img class="h-10 w-10 rounded-full object-cover flex"
                            src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        <span class="pt-2 ml-3">
                            {{ Auth::user()->name }}
                        </span>
                    </div> --}}
                <a class="text-xl font-semibold" href="./post/view/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
                <p class="text-justify">
                    {{ $post->description }}
                </p>
                <div class="pt-5">
                    <img src="{{ Storage::url($post->image) }}" alt="" height="400" width="570" alt="" />
                </div>
                <p class="mt-5">
                    {{ $post->created_at->format('M d, Y, H:i') }}
                </p>
                <div class="flex mt-5">
                    <div class="mr-2">
                        <a type="button" href="post/{{ $post->id }}"
                            class="h-10 w-52 inline-block px-6 py-3 border-2 border-gray-800 text-gray-800 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                            Edit
                        </a>
                    </div>
                    <form action="{{ route('posts.destroy', $post->id) }}" class="inline-block">
                        @method('DELETE')
                        <button type="submit" name="delete" formmethod="POST"
                            onclick="return confirm('Are you sure to delete the selected items?')"
                            class="h-10 w-52 inline-block px-6 py-3 border-2 border-gray-800 text-gray-800 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Delete</button>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
