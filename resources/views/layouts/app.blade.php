<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Tasky') }}</title>
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <div class="min-h-screen bg-white">
            @include('layouts.navigation')

            <div class="mx-0 px-0">
                <div class="flex w-full">
                    <div class="sidebar text-white fixed" id="sidebar">
                        <div class="sidebar-bg w-full h-full absolute"></div>
                        <div class="sidebar-content p-3 relative h-full">
                            @include('layouts.sidebar')
                        </div>
                    </div>
                    
                    <div class="w-full h-screen xl:w-4/5 xl:ml-[20%] py-3 px-4 md:px-0">
                        <!-- Page Heading -->
                        <header class="bg-white">
                            <div class="flex items-center justify-between max-w-7xl mx-auto py-6 md:px-6 lg:px-8">
                                {{ $header ?? '' }}
                            </div>
                        </header>

                        <!-- Page Content -->
                        <main>
                            {{ $slot ?? '' }}
                        </main>
                    </div>
                </div>    
            </div>
        </div>
    </body>
</html>
