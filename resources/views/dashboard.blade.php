<x-app-layout>
    <x-slot name="header">
        <h2 class="text-[13px] text-gray-900 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <!-- Settings Dropdown -->
        <div class="flex items-center ml-6">
            <x-profile-image></x-profile-image>
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-gray-900 focus:outline-none transition duration-150 ease-in-out">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">

                    <x-dropdown-link :href="route('profile.index')">
                        {{ __('View profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    {{-- <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form> --}}
                </x-slot>
            </x-dropdown>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                {{-- <div class="absolute origin-top-right mr-8 bottom-0 right-0 top-4 z-10">
                    <x-avatar></x-avatar>
                </div> --}}
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-3">   
                    @include('partials.cards')
                </div>

                <div class="grid grid-cols-1 mt-12">
                    <div class="my-8">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('img/add-team-member.png') }}" alt="add-team-member" class="h-48">
                        </div>
                        <p class="text-center text-lg ff-baloo">Tasky isn't a tool, it's a Habit.</p>
                        <p class="text-center text-xs">Start adding members to your team</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <x-modal></x-modal>
                    </div>
                </div>

                <div class="flex fixed items-center right-0 bottom-0 mb-3 md:mb-8 mr-3 md:mr-8">
                    <div class="block mr-3">
                        <p class="text-base text-gray-900">Add task</p>
                    </div>
                    <a href="{{ route('tasks.index') }}" class="block text-gray-900 border-2 border-gray-900 bg-white rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg"  fill="#0C0B0B" viewBox="0 0 24 24" style="height: 20px; width: 20px;">
                            <path d="M 11 3 L 11 11 L 3 11 L 3 13 L 11 13 L 11 21 L 13 21 L 13 13 L 21 13 L 21 11 L 13 11 L 13 3 L 11 3 z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
