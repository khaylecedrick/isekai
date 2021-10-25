<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/breakpoint.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>


    </head>
    <body>
        <nav class="flex justify-between w-full h-full bg-blue-900">
            <div class="flex items-center">
                <img src="img/logo.png" class="w-auto h-12 px-2 md:h-14 md:px-6" alt="Isekai">
            </div>
            <div class="hidden px-6 py-4 space-x-4 pro:hidden xl:block">
                <a href="/" class="font-semibold text-white uppercase text-md hover:text-yellow-400 focus:outline-none">home</a>
                <a href="/aboutus" class="font-semibold text-white uppercase text-md hover:text-yellow-400 focus:outline-none">about us</a>
                <a href="/properties" class="font-semibold text-white uppercase text-md hover:text-yellow-400 focus:outline-none">properties</a>
                <a href="/latest" class="font-semibold text-white uppercase text-md hover:text-yellow-400 focus:outline-none">latest updates</a>
                <a href="/login" class="font-semibold text-white uppercase text-md hover:text-yellow-400 focus:outline-none">login</a>
                <a href="/register" class="font-semibold text-white uppercase text-md hover:text-yellow-400 focus:outline-none">register</a>
            </div>
            <div class="items-center block p-4 pro:block xl:hidden">
                <button type="button" class="text-xl text-white focus:outline-none" onclick="toggleElem('sm_navi')">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </nav>
        <nav id="sm_navi" class="absolute inset-0 z-50 hidden">
            <div class="flex flex-col w-full bg-blue-900 shadow-xl rounded-xl">
                <div class="flex flex-row items-center justify-between w-full">
                    <img src="img/logo.png" class="w-auto h-12 px-2 md:h-16 md:px-6" alt="Isekai">
                    <button class="text-xl text-white focus:text-blue-900 active:text-blue-900" onclick="toggleElem('sm_navi')">
                        <i class="fa fa-times-circle"></i>
                    </button>
                </div>
                <div class="flex flex-col items-center justify-center w-full p-2 space-y-2 border-t-2 border-b-2 border-gray-300 border-solid">
                    <a class="text-sm text-yellow-400 uppercase focus:text-yellow-400 active:text-yellow-400 focus:outline-none">home</a>
                    <a href="/aboutus" class="text-sm text-white uppercase focus:text-yellow-400 active:text-yellow-400 focus:outline-none">about us</a>
                    <a href="/properties" class="text-sm text-white uppercase focus:text-yellow-400 active:text-yellow-400 focus:outline-none">properties</a>
                    <a href="/latest" class="text-sm text-white uppercase focus:text-yellow-400 active:text-yellow-400 focus:outline-none">latest updates</a>
                    <a href="/login" class="text-sm text-white uppercase focus:text-yellow-400 active:text-yellow-400 focus:outline-none">login</a>
                    <a href="/register" class="text-sm text-white uppercase focus:text-yellow-400 active:text-yellow-400 focus:outline-none">register</a>
                </div>
            </div>
        </nav>
        {{ $slot }}
        <!--Script nav-->
    <script>
        function toggleElem(paramID)
            {
                document.getElementById(paramID).classList.toggle('hidden');
                document.getElementById(paramID).classList.toggle('block');
            }
    </script>
    </body>
</html>
