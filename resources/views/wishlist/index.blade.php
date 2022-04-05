<x-app-layout>
    <x-slot name="header">
        <div class="flex-auto">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Wishlists') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                @if ($message = Session::get('error'))
                    <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700 mb-3" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="grid grid-cols-4 md:grid-cols-5 gap-2">
                    @foreach ($postWishlist as $wish)
                        <div class="bg-white shadow-xl sm:rounded-lg px-5 py-5 mb-5">
                            <div class="flex flex-row justify-between">
                                {{-- <div>
                                    <a class="text-xl font-semibold" href="./post/view/{{ $wish->post->slug }}">
                                        {{ $wish->post->title }}
                                    </a>
                                </div> --}}
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
                            {{-- <div class="pt-5">
                                <img src="{{ Storage::url($wish->post->image) }}" alt="" height="400" width="570"
                                    alt="" />
                            </div> --}}
                            {{-- <p class="truncate text-justify mt-5">
                                {{ $wish->post->description }}
                            </p> --}}
                            {{-- <div>
                                <p class="mt-5">
                                    {{ $wish->post->created_at->format('M d, Y, H:i') }}
                                </p>
                            </div> --}}
                            {{-- <a class="inline-block my-5 px-6 py-2.5 bg-gray-800 text-white font-medium text-xs
                                leading-tight uppercase rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg
                                focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900
                                active:shadow-lg transition duration-150 ease-in-out"
                                href="./post/view/{{ $wish->post->slug }}">
                                Learn more
                            </a> --}}
                            <form action="{{ route('wishlist.destroy', $wish->id) }}" method="post"
                                style="display:inline;">
                                @csrf
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-sm btn-danger mb-2">
                                    Delete
                                </button>
                            </form>
                            <div class="flex">
                                <img class="flex h-10 w-10 mr-2 rounded-full object-cover"
                                    src="{{ $wish->user->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                <div class="flex mt-2">
                                    {{ $wish->user->name }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $postWishlist->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
