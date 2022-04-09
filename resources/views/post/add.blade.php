{{-- Create new recipe --}}
{{-- add.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new meal') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form method="POST" action="/post" enctype="multipart/form-data">
                    {{-- TITLE --}}
                    <div class="form-group">
                        <label for="title" class="font-semibold">Title</label>
                        <input type="text" name="title"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                        <small class="font-medium">Make sure your title is unique.</small>
                        @if ($errors->has('title'))
                            <div class="flex p-2 mb-4 mt-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                role="alert">
                                <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    {{ $errors->first('title') }}
                                </div>
                            </div>
                        @endif
                    </div>
                    {{-- DESCRIPTION --}}
                    <div class="form-group pt-4">
                        <label for="description" class="font-semibold">Description</label>
                        <input type="text" name="description"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                        <small class="font-medium">A brief description of the food is needed.</small>
                        @if ($errors->has('description'))
                            <div class="flex p-2 mb-4 mt-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                role="alert">
                                <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    {{ $errors->first('description') }}
                                </div>
                            </div>
                        @endif
                    </div>
                    {{-- MEAL TYPE --}}
                    <div class="form-group pt-4">
                        <label for="cuisine_id" class="font-semibold">Meal type</label>
                        <select name="cuisine_id"
                            class="form-select appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                            <option value="">-- Select meal type --</option>
                            @foreach ($cuisine as $cuisineItem)
                                <option value="{{ $cuisineItem->id }}">{{ $cuisineItem->name }}</option>
                            @endforeach
                        </select>
                        <small class="font-medium">What kind of meal type is for your recipe?</small>
                        @if ($errors->has('cuisine_id'))
                            <div class="flex p-2 mb-4 mt-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                role="alert">
                                <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    {{ $errors->first('cuisine_id') }}
                                </div>
                            </div>
                        @endif
                    </div>
                    {{-- INGREDIENTS --}}
                    <div class="form-group pt-4">
                        <label for="ingredients" class="font-semibold">Ingredients</label>
                        <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 border-gray-400 bg-clip-padding border border-solid rounded
                        transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            name="ingredients" rows="10" placeholder="- 2 eggs ..."></textarea>
                        <small class="font-medium">Write your ingredients in point form.</small>
                        @if ($errors->has('ingredients'))
                            <div class="flex p-2 mb-4 mt-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                role="alert">
                                <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    {{ $errors->first('ingredients') }}
                                </div>
                            </div>
                        @endif
                    </div>
                    {{-- COOKING STEPS --}}
                    <div class="form-group pt-4">
                        <label for="steps" class="font-semibold">Cooking steps</label>
                        <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 border-gray-400 bg-clip-padding border border-solid rounded
                        transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            name="steps" rows="10" placeholder="- Cook the rice ..."></textarea>
                        <small class="font-medium">Write your cooking steps in point form.</small>
                        @if ($errors->has('steps'))
                            <div class="flex p-2 mb-4 mt-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                role="alert">
                                <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    {{ $errors->first('steps') }}
                                </div>
                            </div>
                        @endif
                    </div>
                    {{-- COOKING TIME --}}
                    <div class="form-group pt-4">
                        <label for="ct_hrs" class="font-semibold">Cooking time</label>
                        <div class="flex">
                            <div class="mr-2">
                                <input type="number" name="ct_hrs" min="1" max="24"
                                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-15 h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                                hrs
                            </div>
                            <div>
                                <input type="number" name="ct_min" min="1" max="59"
                                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-15 h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                                min
                            </div>
                        </div>
                        <small class="font-medium">Duration to prepare the recipe.</small>
                        @if ($errors->has('ct_hrs'))
                            <div class="flex p-2 mb-4 mt-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                role="alert">
                                <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    {{ $errors->first('ct_hrs') }}
                                </div>
                            </div>
                        @endif
                        @if ($errors->has('ct_min'))
                            <div class="flex p-2 mb-4 mt-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                role="alert">
                                <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    {{ $errors->first('ct_min') }}
                                </div>
                            </div>
                        @endif
                    </div>
                    {{-- IMAGE UPLOAD --}}
                    <div class="form-group pt-4">
                        <label for="image" class="font-semibold">Image upload</label>
                        <input type="file" name="image" id="image"
                            class="leading-normal resize-none w-full h-10 py-2 px-3" placeholder='Image upload' />
                        <small class="font-medium">An image to let the user know what is the recipe about.</small>
                        @if ($errors->has('image'))
                            <div class="flex p-2 mb-4 mt-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                role="alert">
                                <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    {{ $errors->first('image') }}
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="form-group py-4 justify-center">
                        <h1>Preview</h1>
                        <img id="preview-image" src="https://cdn-icons-png.flaticon.com/512/126/126477.png"
                            alt="image preview" class="object-scale-down" width="150" height="150">
                    </div>
                    <div class="form-group">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- JavaScript --}}
{{-- Image preview --}}
<script type="text/javascript">
    $('#image').change(function() {

        let reader = new FileReader();
        reader.onload = (e) => {
            $('#preview-image').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);

    });
</script>
