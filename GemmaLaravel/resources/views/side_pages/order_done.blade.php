<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search"/>
    <title>Objednávka</title>
</head>
<body>
<header>
    @include('components.header')
</header>

@include('components.navbar')


<main class="container d-flex justify-content-center align-items-center text-center" style="min-height: 88vh; padding-top: 86px;">
    <div class="d-flex flex-column">
        <h1 class="custom_italiana">ĎAKUJEME ZA VAŠU OBJEDNÁVKU</h1>
    </div>
</main>


<footer>
    @include('components.footer')
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
