<x-app-layout>
    <x-slot name="header">
        <div class="flex-auto">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Saved meals') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($message = Session::get('error'))
                <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700" role="alert">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700" role="alert">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="grid grid-cols-4 md:grid-cols-5 gap-2">
                @forelse ($postWishlist as $wish)
                    <div class="bg-white shadow-xl sm:rounded-lg px-5 py-5 mb-5">
                        <div>
                            <a class="text-xl font-semibold" href="./post/view/{{ $wish->post->slug }}">
                                {{ $wish->post->title }}
                            </a>
                        </div>
                        <div class="pt-5">
                            <img src="{{ Storage::url($wish->post->image) }}" alt="" height="400" width="570"
                                alt="" />
                        </div>
                        <p class="truncate text-justify mt-5">
                            {{ $wish->post->description }}
                        </p>
                        <div>
                            <p class="mt-5">
                                {{ $wish->post->created_at->format('M d, Y, H:i') }}
                            </p>
                        </div>
                        <a class="inline-block my-5 px-6 py-2.5 bg-gray-800 text-white font-medium text-xs
                                leading-tight uppercase rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg
                                focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900
                                active:shadow-lg transition duration-150 ease-in-out"
                            href="./post/view/{{ $wish->post->slug }}">
                            Learn more
                        </a>
                        <form action="{{ route('wishlist.destroy', $wish->id) }}" method="get"
                            style="display:inline;">
                            @csrf
                            {{ method_field('get') }}
                            <button type="submit"
                                onclick="return confirm('Are you sure to delete the selected saved meal?')"
                                class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
                                Delete
                            </button>
                        </form>
                    </div>
                @empty
                    <p class="mt-10">No saved meals yet.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
