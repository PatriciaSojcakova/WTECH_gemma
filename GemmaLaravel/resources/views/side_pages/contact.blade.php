<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />
    <title>Kontakt</title>
</head>

<body>
    <header>
        @include('components.header')
    </header>

    <main class="container mt-5 pb-5 " style="padding-top: 86px;">
        <h2 class="text-center pb-5">Kontakt</h2>

        <div class="row pb-5 d-flex justify-content-center">
            <div class="col-12 col-sm-6 col-md-3 mb-3 d-flex flex-column align-items-center">
                <h4>Telefón</h4>
                <p>+421 123 456 789</p>
            </div>

            <div class="col-12 col-sm-6 col-md-3 mb-3 d-flex flex-column align-items-center">
                <h4>Adresa</h4>
                <p>Názov firmy<br>Ulica 123, Mesto, PSČ<br>Slovensko</p>
            </div>

            <div class="col-12 col-sm-6 col-md-3 mb-3 d-flex flex-column align-items-center">
                <h4>E-mail</h4>
                <p>info@gemma.sk</p>
            </div>

            <div class="col-12 col-sm-6 col-md-3 mb-3 d-flex flex-column align-items-center">
                <h4>Sociálne siete</h4>
                <p>
                    Facebook: GEMMA_jewelry<br>
                    Instagram: GEMMA_jewerly<br>
                    Twitter: GEMMA_jewerly
                </p>
            </div>
        </div>

        <div class="col-md-12 d-flex justify-content-center">
            <div class="mb-4 border-0">
                <div class="text-center">
                    <h4 class="card-title custom_playfair_medium pb-5">Otváracie hodiny</h4>
                    <p>Pondelok - Piatok: 9:00 - 18:00<br>Sobota: 10:00 - 14:00<br>Nedeľa: Zatvorené</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        @include('components.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
