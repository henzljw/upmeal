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
            {{-- <div class="flex-auto text-right">
                <a href="/post" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create recipe
                </a>
            </div> --}}
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
    <div class="w-30 mx-40 my-10">
        <h1 class="text-xl mb-5">My recipes</h1>
        <div class="grid grid-cols-4 md:grid-cols-5 gap-2">
            @foreach (auth()->user()->posts as $posts)
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-5 py-5 mb-5">
                    <a class="text-xl font-semibold" href="./post/view/{{ $posts->slug }}">
                        {{ $posts->title }}
                    </a>
                    <p class="truncate text-justify">
                        {{ $posts->description }}
                    </p>
                    <div class="pt-5">
                        <img src="{{ Storage::url($posts->image) }}" alt="" height="400" width="570" alt="" />
                    </div>
                    <p class="mt-5">
                        {{ $posts->created_at->format('M d, Y, H:i') }}
                    </p>
                    <div class="flex mt-5">
                        <div class="mr-2">
                            <a type="button" href="post/{{ $posts->id }}"
                                class="text-sm bg-blue-500 hover:bg-blue-700 text-white py-2 px-3 rounded focus:outline-none focus:shadow-outline">
                                Edit
                            </a>
                        </div>
                        <form action="{{ route('posts.destroy', $posts->id) }}" class="inline-block">
                            @method('DELETE')
                            <button type="submit" name="delete" formmethod="POST"
                                onclick="return confirm('Are you sure to delete the selected items?')"
                                class="text-sm bg-red-500 hover:bg-red-700 text-white py-2 px-3 rounded focus:outline-none focus:shadow-outline">Delete</button>
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
