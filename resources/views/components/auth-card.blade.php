<div class="min-h-screen xl:flex">
    <div class="w-full xl:w-3/5 relative">
        <div class="absolute w-full h-full bg-[#FDF360] xl:rounded-tr-3xl xl:rounded-br-3xl"></div>
        <div class="relative mx-5 xl:mt-5 z-10 px-4">
            <h1 class="ff-baloo text-6xl md:text-7xl lg:text-8xl pt-6 md:pt-8 lg:pt-12 xl:pt-0">
                @if (Route::is('password.request'))
                    Forgot password
                @else
                    Task manager for<br class="hidden md:block"> small teams
                @endif
            </h1>
            <p class="my-3">
                @if (Route::is('password.request'))
                    Forgot your password? No problem. Just let us know your email address and<br class="hidden md:block"> we will email you a password reset link that will allow you to choose a new one.
                @else
                    Tasky is a simple to-do list for small companies or teams<br class="hidden md:block"> who work on daily scrums and have regular stand-ups! :)
                @endif
            </p>
            {{ $header }}
        </div>
    </div>

    <div class="w-full xl:w-2/5 py-5 xl:py-0 justify-content items-center">
        <div class="mt-32">
            <h2 class="text-center ff-baloo text-4xl mb-5">
                @if (Route::is('login'))
                    Login
                @elseif(Route::is('register'))
                    Register
                @elseif(Route::is('password.request'))
                    <div class=" md:pt-0 lg:pt-12 xl:pt-20">Forgot password</div>
                @endif
            </h2>
            {{ $slot }}
        </div>
    </div>
</div>
