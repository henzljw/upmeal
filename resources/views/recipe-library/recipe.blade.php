{{-- SHOW A SINGLE RECIPES --}}
{{-- recipe.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {!! $posts->title !!}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-5 py-5 mb-5">
                <div class="flex">
                    <div>
                        <h1 class="flex-auto text-xl font-semibold">
                            {!! $posts->title !!}
                        </h1>
                    </div>
                    <div class="flex-auto text-right">
                        {!! $posts->created_at->format('M d, Y, H:i') !!}
                    </div>
                </div>
                <p class="text-justify my-5">
                    {!! $posts->description !!}
                </p>
                <div class="mt-5">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-alarm mr-2" viewBox="0 0 16 16">
                            <path
                                d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                            <path
                                d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                        </svg>
                        <div class="mr-2">
                            {!! $posts->ct_hrs !!}
                            hrs
                        </div>
                        <div>
                            {!! $posts->ct_min !!}
                            min
                        </div>
                    </div>
                </div>
                <img src="{!! Storage::url($posts->image) !!}" height="400" width="400" alt="image preview"
                    class="pt-5">
                <div class="my-5">
                    <h2 class="font-semibold">Cuisine</h2>
                    <p class="text-justify my-5">
                        {!! $posts->cuisine->name !!}
                    </p>
                </div>
                <div class="my-5">
                    <h2 class="font-semibold">Ingredients</h2>
                    <p class="text-justify my-5">
                        {!! $posts->ingredients !!}
                    </p>
                </div>
                <div class="my-5">
                    <h2 class="font-semibold">Cooking steps</h2>
                    <p class="text-justify my-5">
                        {!! $posts->steps !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
