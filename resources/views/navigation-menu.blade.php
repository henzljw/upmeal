<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                @if (Auth::user()->user_type === 'ADM')
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('admin.dashboard') }}">
                            <x-jet-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>
                @elseif (Auth::user()->user_type === 'USR')
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}">
                            <x-jet-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>
                @endif

                <!-- Navigation Links -->
                @if (Auth::user()->user_type === 'ADM')
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet-nav-link href="{{ route('admin.dashboard') }}"
                            :active="request()->routeIs('admin.dashboard')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-speedometer2 mr-2" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                <path fill-rule="evenodd"
                                    d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                            </svg>
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet-nav-link href="{{ route('users') }}" :active="request()->routeIs('users')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-people-fill mr-2" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd"
                                    d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg>
                            {{ __('Users') }}
                        </x-jet-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet-nav-link href="{{ route('cuisines') }}" :active="request()->routeIs('cuisines')">
                            <img src="{{ asset('img/icons/food.png') }}" class="mr-2" alt="" width="20" height="20">
                            {{ __('Cuisines') }}
                        </x-jet-nav-link>
                    </div>
                @elseif (Auth::user()->user_type === 'USR')
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-house-door-fill mr-2" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                            </svg>
                            {{ __('Home') }}
                        </x-jet-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-center">
                        <x-jet-nav-link href="{{ route('checklists') }}" :active="request()->routeIs('checklists')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-card-checklist mr-2" viewBox="0 0 16 16">
                                <path
                                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                <path
                                    d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                            </svg>
                            {{ __('Lists') }}
                        </x-jet-nav-link>
                    </div>
                @endif
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-center">
                    <x-jet-nav-link href="{{ route('profile') }}" :active="request()->routeIs('profile')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-person-circle mr-2" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        {{ __('Profile') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- User Name -->
                            <div class="font-bold px-4 py-2">
                                {{ Auth::user()->name }}
                            </div>
                            <!-- Account Management -->
                            {{-- <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div> --}}

                            @if (Auth::user()->user_type === 'ADM')
                                <x-jet-dropdown-link href="{{ route('admin.dashboard') }}">
                                    {{ __('Dashboard') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('users') }}">
                                    {{ __('Users') }}
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('cuisines') }}">
                                    {{ __('Cuisines') }}
                                </x-jet-dropdown-link>
                            @elseif (Auth::user()->user_type === 'USR')
                                <x-jet-dropdown-link href="{{ route('home') }}">
                                    <div class="flex">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-house-door-fill mr-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                                            </svg>
                                        </div>
                                        <div>
                                            {{ __('Home') }}
                                        </div>
                                    </div>
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('checklists') }}">
                                    {{ __('Lists') }}
                                </x-jet-dropdown-link>
                            @endif
                            <x-jet-dropdown-link href="{{ route('profile') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        {{-- @if (Auth::user()->user_type === 'ADM')
            <div class="pt-2 pb-3 space-y-1">
                <x-jet-responsive-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-responsive-nav-link>
            </div>
        @elseif (Auth::user()->user_type === 'USR')
            <div class="pt-2 pb-3 space-y-1">
                <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-jet-responsive-nav-link>
            </div>
        @endif --}}

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                @if (Auth::user()->user_type === 'ADM')
                    <x-jet-responsive-nav-link href="{{ route('admin.dashboard') }}"
                        :active="request()->routeIs('admin.dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('users') }}" :active="request()->routeIs('users')">
                        {{ __('Users') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('cuisines') }}"
                        :active="request()->routeIs('cuisines')">
                        {{ __('Cuisines') }}
                    </x-jet-responsive-nav-link>
                @elseif (Auth::user()->user_type === 'USR')
                    <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('checklists') }}"
                        :active="request()->routeIs('checklists')">
                        {{ __('List') }}
                    </x-jet-responsive-nav-link>
                @endif
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile') }}" :active="request()->routeIs('profile')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
                        :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                        :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}"
                            :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-jet-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
