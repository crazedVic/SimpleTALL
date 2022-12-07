<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
	@livewireStyles
    </head>
    <body class="antialiased m-4 p-2 bg-gray-300">
   {{$slot}}
    <footer class="bg-blue-900 text-gray-300 fixed bottom-0 left-0 right-0 px-2 py-1 text-center">
        
        <div x-data>
        <button @click="alert('Alpine Js is working !')">Copyright 2022 Preterra Corp</button>
    </div>
    </footer>
	@livewireScripts
    </body>
</html>
 