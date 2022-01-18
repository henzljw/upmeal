<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div class="rounded-lg shadow-xl bg-green-200 p-5">
                    <header class="font-bold text-lg text-center">
                        Total registered users
                    </header>
                    <h2 class="my-5 text-xl text-center">{{ $totalUsers }}</h2>
                    <a href="#">Show more</a>
                </div>
            </div>
            {{-- <div class="rounded-lg shadow-xl bg-white p-5 my-10">
                <h1 class="text-lg font-bold">User lists</h1>
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>User name</th>
                            <th>Email address</th>
                            <th>Roles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userLists as $userList)
                            <tr>
                                <td>{{ $userList->name }}</td>
                                <td>{{ $userList->email }}</td>
                                <td>{{ $userList->user_type }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> --}}
        </div>
    </div>
</x-app-layout>
