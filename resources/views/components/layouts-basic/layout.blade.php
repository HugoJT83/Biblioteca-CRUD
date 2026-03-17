<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca Azulona</title>
    <link rel="icon" href="{{ asset('imgs/book_icon.ico') }}">
    <script src="https://kit.fontawesome.com/1c2e66feae.js" crossorigin="anonymous"></script>


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