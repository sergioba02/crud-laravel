<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? 'Default title' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default description' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navigation/>
    @session('status')
        <div class="bg-green-600 p-4 text-xl text-green-50 dark:bg-green-800">
            {{session('status')}}
        </div>
    @endsession
    {{ $slot }}
    @isset($sidebar)
        <div id='sidebar'>
            <h3>Sidebar</h3>
            <div>{{ $sidebar }}</div>
        </div>    
    @endisset

    </body>
    </html>