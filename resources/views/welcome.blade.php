<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ASMS</title>

        {{-- Favicon --}}
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        {{-- Font awesome --}}
        <script src="https://kit.fontawesome.com/c5ef5dbab6.js" crossorigin="anonymous"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased bg-off-white text-pine">
        <x-navigation />

        <main>
            <div class="p-5 m-5 flex items-center justify-center text-center h-[80vh]">
                <div>
                    <h1 class="font-bold my-2 text-4xl">Academic Score Management System</h1>
                </div>
            </div>
        </main>
    </body>
</html>
