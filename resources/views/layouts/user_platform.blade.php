<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Default title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="wallpaper overflow-hidden relative h-screen w-screen"> 
    <div class="flex w-full h-full items-stretch p-3">
        
        <livewire:activity.modal />
        <div class="flex flex-row w-full h-full space-x-10 items-stretch bg-blue-200 rounded-sm">
            
            <div class="w-[8rem] flex flex-col p-3">
                <livewire:user.navigation-menu/>
            </div>

            <div class="flex-1 h-full overflow-y-auto p-3">
                {{ $slot }}
            </div>

            <div class="w-[25rem] flex flex-col">
                <livewire:user.friends-list/>
            </div>
            
        </div>
    </div>

    @livewireScripts
</body>

</html>
