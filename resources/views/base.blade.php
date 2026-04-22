<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
</head>
<body>
    <div class="bg-[#e18e96]">
        {{ $slot }} <!-- Livewire components render here -->
    </div>
    @livewireScripts
</body>
</html>