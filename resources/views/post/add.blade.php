{{-- Upload post --}}
{{-- add.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New post') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form method="POST" action="/post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title" class="font-semibold">Title</label>
                        <input type="text" name="title"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Recipe title' />
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
                    <div class="form-group pt-4">
                        <label for="description" class="font-semibold">Description</label>
                        <input type="text" name="description"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Recipe description' />
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
                    <div class="form-group pt-4">
                        <label for="image" class="font-semibold">Image upload</label>
                        <input type="file" name="image" id="image"
                            class="leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Image upload' />
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
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</button>
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
