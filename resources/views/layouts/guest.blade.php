<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <style>
            .css-selector {
                background: linear-gradient(323deg, #24662f, #2bbf51);
                background-size: 400% 400%;

                -webkit-animation: AnimationName 30s ease infinite;
                -moz-animation: AnimationName 30s ease infinite;
                -o-animation: AnimationName 30s ease infinite;
                animation: AnimationName 30s ease infinite;
            }

            @-webkit-keyframes AnimationName {
                0%{background-position:13% 0%}
                50%{background-position:88% 100%}
                100%{background-position:13% 0%}
            }
            @-moz-keyframes AnimationName {
                0%{background-position:13% 0%}
                50%{background-position:88% 100%}
                100%{background-position:13% 0%}
            }
            @-o-keyframes AnimationName {
                0%{background-position:13% 0%}
                50%{background-position:88% 100%}
                100%{background-position:13% 0%}
            }
            @keyframes AnimationName {
                0%{background-position:13% 0%}
                50%{background-position:88% 100%}
                100%{background-position:13% 0%}
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="css-selector min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg" style="background: rgba(0,0,0,0.32)">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
