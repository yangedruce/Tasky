<x-app-layout>
    <x-slot name="header">
        <h2 class="text-[13px] text-gray-900 leading-tight">
            {{ __('Dashboard / Manage team') }}
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
                @include('team.partials.team-name-title')  

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                    @include('team.partials.card')
                </div>

                <x-add-modal></x-add-modal>
            </div>
        </div>
    </div>
</x-app-layout>
