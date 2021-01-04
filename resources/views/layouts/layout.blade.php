<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kufam:ital@0;1&display=swap" rel="stylesheet">
    <style>
        nav{
            font-family: 'Kufam', cursive;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>
<body>
    {{-- Header --}}
    {{-- Nav --}}
    <div class="mx-auto bg-blue-500 p-5">
        <nav class="flex justify-between">
            <div>
                <a href="#" class="text-lg font-semibold italic logo">P4rl3y</a>
            </div>
            <ul class="flex flex-row">
                <li class="pr-5"><a>Home</a></li>
                <li class="pr-5"><a>Registros</a></li>
                <li class="pr-5"><a>Create</a></li>
                <li><a>FAQ</a></li>
            </ul>   
        </nav>
    </div>
    <br>
    {{-- Content --}}
    @yield('content')
    {{-- Footer --}}
    {{-- Scipts --}}
</body>
</html>