<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search"/>
    <title>Osobný účet</title>
</head>
<body>
<header>
    @include('components.header')
</header>

@include('components.navbar')

<main class="container" style="padding-top: 150px; padding-bottom: 100px;">

    <div class="row">
        <div class="col-md-6 d-flex flex-column align-items-center">
            <span class="material-icons" style="font-size: 130px; color: #000;">account_circle</span>
            <h3 class="mt-2 mb-5">{{ Auth::user()->name }} {{ Auth::user()->surname }}</h3>
        </div>

        <div class="col-md-6">
            <h3>Osobné údaje</h3>
            <p><strong>Email:</strong> {{ Auth::user()->email }} </p>
            <p><strong>Odoberanie katalógu:</strong> {{ Auth::user()->newsletter_subscribed ? 'Odoberá' : 'Neodoberá' }}</p>

            <h3 class="mt-5">Objednávky</h3>
            <p>Posledná objednávka: #2024001 (12.3.2024)</p>
            <p>Stav: Odoslaná</p>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="d-flex justify-content-center mt-5 d-sm-flex justify-content-sm-center d-md-block">
                    <button class="btn btn-dark w-40">Odhlásiť sa</button>
                </div>
            </form>
        </div>

    </div>


</main>


<footer>
    @include('components.footer')
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
