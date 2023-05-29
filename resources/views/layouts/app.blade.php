<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/images/fevicon.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/2aee2ea5d2.js" crossorigin="anonymous"></script>
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

        * {
            font-family: "Ropa Sans";
        }
    </style>
    <title>Pranto Biswas</title>
</head>

<body class="dark:bg-slate-950 dark:text-gray-50">

    <x-partials.header />

    <div class="max-w-screen-xl  items-center justify-between mx-auto p-4">
        @yield('content')
    </div>

    <x-partials.footer />



</body>

</html>
