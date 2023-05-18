<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/2aee2ea5d2.js" crossorigin="anonymous"></script>
    <title>Pranto Biswas</title>
</head>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap');

        * {
            font-family: "Ropa Sans";
        }
    </style>

    <x-partials.header class=""></x-partials.header>

    <nav class="bg-white border dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            @yield('content')
        </div>
    </nav>

    <x-partials.footer class=""></x-partials.footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>
