<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    {{-- Font awesome --}}
    <script src="https://kit.fontawesome.com/c5ef5dbab6.js" crossorigin="anonymous"></script>

    {{-- Code block element --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.1.0/styles/vs.min.css"
    />

    <script
        src="https://cdn.jsdelivr.net/npm/@heppokofrontend/html-code-block-element/lib/html-code-block-element.common.min.js"
        defer
    ></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>ASMS</title>
</head>
<body>
    {{ $slot }}
</body>
</html>
