<x-app-layout>
    <x-slot name="header">
        <h2 class="text-[13px] text-gray-900 leading-tight">
            {{ __('Dashboard / Profile') }}
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
                </x-slot>
            </x-dropdown>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-3">
                    <div class="relative h-full pb-8 md:pb-0">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('img/profile.png') }}" alt="profile" class="h-72 mt-12 mb-4">
                        </div>
                        <p class="ff-baloo text-md text-center">The experience is pretty much like writing<br class="hidden md:block">
                            your daily tasks on a sticky note.<br class="hidden md:block">
                            Organising your daily tasks can improve your<br class="hidden md:block">
                            productivity & lead to enhanced work quality.
                        </p>
                    </div>

                    <div class="relative mt-4 xl:mt-0">
                        <div class="flex items-center w-full pb-4">
                            <img src="{{ asset('img/avatar.png') }}" alt="profile picture" class="h-16 w-16 md:h-24 md:w-24 lg:h-auto lg:w-auto">

                            <div x-data="{ open: false }" class="flex items-center ml-4 w-full justify-between">
                                <div>
                                    <h1 class="ff-baloo text-gray-900 text-4xl">Hello Josh!</h1>
                                    <p class="text-base">You have <span>10</span> tasks to do for today.</p>
                                </div> 
                                <div>
                                    @include('profile.partials.dropdown')
                                </div>
                            </div>
                        </div>
                        
                        @include('profile.partials.cards')

                        @include('profile.partials.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
