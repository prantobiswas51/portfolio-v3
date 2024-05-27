<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/2aee2ea5d2.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="/images/1k.webp">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @livewireStyles()
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Croppie --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
    {{-- Tiny MCE  --}}
    <script type="text/javascript" src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js'
        referrerpolicy="origin"></script>
    {{-- Dark mode  --}}
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap');
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900">

    <div class=" bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Content -->
        <section class="flex mt-16 flex-col md:flex-row mx-auto">

            <div class="basis-1/4 h-screen bg-gray-50 dark:bg-gray-900 text-white hover:text-black p-4 flex flex-col ">
                @include('admin.sidebar')
            </div>

            <div class="basis-3/4 p-4 text-gray-900 dark:text-gray-50">

                {{ $slot }}

            </div>

        </section>


    </div>
    @include('inc.message')
    @livewireScripts()
</body>

</html>
