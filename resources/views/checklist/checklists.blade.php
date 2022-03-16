<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="flex-auto">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Shopping List') }}
                </h2>
            </div>
            <div class="flex-auto text-right">
                <a href="/checklist" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add grocery items
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <table class="w-full text-md rounded mb-4">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">Grocery items</th>
                            <th class="text-left p-3 px-5">Quantity</th>
                            <th class="text-left p-3 px-5">Created at</th>
                            <th class="text-left p-3 px-5">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (auth()->user()->checklists as $checklist)
                            <tr class="border-b hover:bg-orange-100">
                                <td class="p-3 px-5">
                                    {{ $checklist->item }}
                                </td>
                                <td class="p-3 px-5">
                                    {{ $checklist->quantity }}
                                </td>
                                <td class="p-3 px-5">
                                    {{ $checklist->created_at }}
                                </td>
                                <td class="p-3 px-5">
                                    <a href="/checklist/{{ $checklist->id }}" name="edit"
                                        class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                    <form action="{{ route('checklist.destroy', $checklist->id) }}"
                                        class="inline-block">
                                        @method('DELETE')
                                        <button type="submit" name="delete" formmethod="POST"
                                            onclick="return confirm('Are you sure to delete the selected items?')"
                                            class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
