<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

{{-- Header --}}
@include('components.header')

{{-- Main Content --}}
<main class="flex-1 max-w-7xl mx-auto w-full p-6">
    @yield('content')
</main>

</body>
</html>
