<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @include('component.navbar')
    <div class="flex flex-col	text-center pt-20">
    <h1 class="text-xl font-bold underline">Workshop DA et DEV 2024 </h1></div>

    @include('component.card')
    <div><a href="./views/recettes/index.blade.php">Accéder aux recettes</a></div>
    
</body>

</html>