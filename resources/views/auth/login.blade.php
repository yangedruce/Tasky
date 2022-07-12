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

        <form method="POST" action="{{ route('login') }}" class="px-6 md:px-24 pb-28 xl:pb-0">
            @csrf

            <!-- Email Address -->
            <div class="relative group z-0 w-full mt-12 mb-3">
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

            

            <div class="flex items-center justify-between mt-4">
                <!-- Remember Me -->
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-gray-900 shadow-sm focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-[13px] text-gray-600">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-[13px] text-gray-600" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="text-center mt-16">
                <a href="{{ route('register') }}" class="text-[13px] text-gray-900 font-bold">{{ __('Do not have an account yet? Register now!') }}</a>
            </div>

            <div class="flex justify-center">
                <x-button class="mt-8">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>