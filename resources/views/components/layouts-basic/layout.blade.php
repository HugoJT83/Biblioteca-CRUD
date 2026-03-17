<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca Azulona</title>
    <link rel="stylesheet" href="{{ asset('imgs/book_icon.ico') }}">

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-layouts-basic.header/>
    <main>
        {{ $slot }}
    </main>
    <x-layouts-basic.footer/>
</body>
</html>