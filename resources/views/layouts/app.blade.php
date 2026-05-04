<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield ('title', 'Default title')</title>

    @vite (['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="wallpaper">
    <div class="flex flex-col min-h-screen min-w-screen relative">
        <livewire:modal.info-modal />
        {{ $slot }}
    </div>

    @livewireScripts
</body>
</html>
