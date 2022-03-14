{{-- Edit existing post --}}
{{-- edit.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit post') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form method="POST" action="/post/{{ $post->id }}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $post->title }}"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group py-4">
                        <label for="description">Description</label>
                        <input type="text" name="description" value="{{ $post->description }}"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="form-group py-4">
                        <label for="image">Image upload</label>
                        <input type="file" name="image" id="image"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Image upload' />
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                    <div class="form-group py-4">
                        New image:
                        <img id="preview-image" src="https://cdn-icons-png.flaticon.com/512/126/126477.png"
                            alt="image preview" width="150" height="150">
                    </div>
                    <div class="form-group py-4">
                        Current image:
                        <img src="{{ Storage::url($post->image) }}" height="200" width="200" alt="image preview"
                            class="object-scale-down h-50">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="update"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update
                        </button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<script type="text/javascript">
    $('#image').change(function() {

        let reader = new FileReader();
        reader.onload = (e) => {
            $('#preview-image').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);

    });
</script>
