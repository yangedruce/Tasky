<x-guest-layout>
    <x-auth-card>
        <x-slot name="header">
            <a href="/">
                <x-application-header></x-application-header>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-justifypx-6 md:px-24" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 px-6 md:px-24" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" class="px-6 md:px-24 pb-28 xl:pb-0">
            @csrf

            <!-- Name -->
            <div class="relative group z-0 w-full mt-12 mb-3">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="relative group z-0 w-full mb-3">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="relative group z-0 w-full mb-3">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Confirm Password -->
            <div class="relative group z-0 w-full mb-3">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-[13px] text-gray-600" href="{{ route('login') }}">
                    {{ __('Already have an account?') }}
                </a>
            </div>

            <div class="flex justify-center">
                <x-button class="mt-8">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
