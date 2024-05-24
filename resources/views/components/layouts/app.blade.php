<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Font awesome --}}
    <script src="https://kit.fontawesome.com/c5ef5dbab6.js" crossorigin="anonymous"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>ASMS</title>
</head>
<body>
    {{ $slot }}
</body>
</html>
