{{-- User profile page --}}
{{-- users-profile.blade.php --}}

<x-slot name="header">
    <h2 class="flex-auto font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Profile') }}
    </h2>
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
        <h1 class="text-xl font-semibold mb-10">{{ Auth::user()->name }}'s recipes</h1>
        <div class="grid grid-cols-4 md:grid-cols-5 gap-2">
            @forelse (auth()->user()->posts as $posts)
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-5 py-5 mb-5">
                    <a class="text-xl font-semibold" href="./post/view/{{ $posts->slug }}">
                        {{ $posts->title }}
                    </a>
                    <div class="pt-5">
                        <img src="{{ Storage::url($posts->image) }}" alt="" height="400" width="570" alt="" />
                    </div>
                    <p class="truncate text-justify pt-5">
                        {{ $posts->description }}
                    </p>
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
                    <div class="flex mt-5">
                        <img class="flex h-10 w-10 mr-2 rounded-full object-cover"
                            src="{{ $posts->user->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        <div class="flex mt-2">
                            {{ $posts->user->name }}
                        </div>
                    </div>
                </div>
            @empty
                <h1 class="text-center">There is no recipes yet</h1>
            @endforelse
        </div>
    </div>
</div>
