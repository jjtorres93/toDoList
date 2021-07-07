<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body class="bg-green-200 bg-opacity-25">
    <nav
        class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0 inner">
            <a href="/home" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">To
                Do List</a><br>
            <span class="text-xs text-grey-dark">@yield('navbar-title')</span>
        </div>
        <div class="sm:mb-0 self-center">
            <a href="#" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1">Link1</a>
            <a href="#" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Link2</a>
            <a href="#" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Link3</a>
        </div>
    </nav>
    <main class="p-6">
        @yield('content')
    </main>
</body>

</html>
