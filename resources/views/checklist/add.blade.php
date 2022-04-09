{{-- Add items into the shopping list --}}
{{-- add.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add grocery item') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form method="POST" action="/checklist">
                    <div class="form-group">
                        <label for="item">Item Name</label>
                        <input type="text" name="item" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Eg. Eggs and Apple'/>
                        @if ($errors->has('item'))
                            <span class="text-danger">{{ $errors->first('item') }}</span>
                        @endif
                    </div>
                    <div class="form-group py-4">
                        <label for="quantity">Item quantity</label>
                        <input type="text" name="quantity" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-10 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Eg. 2'/>  
                        @if ($errors->has('quantity'))
                            <span class="text-danger">{{ $errors->first('quantity') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>