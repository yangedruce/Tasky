<x-guest-layout>
    <x-auth-card>
        <x-slot name="header">
            <a href="/">
                <x-application-header></x-application-header>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 px-6 md:px-24" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 px-6 md:px-24" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}" class="px-6 md:px-24 pb-28 xl:pb-0">
            @csrf

            <!-- Email Address -->
            <div class="relative group z-0 w-full mt-12 mb-3">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-[13px] text-gray-600" href="{{ route('login') }}">
                    {{ __('Return to login') }}
                </a>
            </div>

            <div class="flex justify-center">
                <x-button class="mt-8">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
