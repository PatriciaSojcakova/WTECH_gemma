<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search"/>
    <title>Dokončenie objednávky</title>
</head>
<body>
<header>
    @include('components.header')
</header>


<main class="container py-5" style="padding-top: 86px;">
    <h2 class="text-center fw-bold mb-5">Doručovacie údaje</h2>

    <form id="checkoutForm" method="post" action="{{ route('order.submit') }}">
        @csrf
        <div class="row justify-content-center gap-5">

            <div class="col-md-5">
                <h2 class="text-center mb-4 mt-4">Doručovacie údaje</h2>
                <div class="mb-3">
                    <label for="firstName" class="form-label">Krstné meno</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Priezvisko</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Adresa</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">Mesto/Obec</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>
                <div class="mb-3">
                    <label for="postalCode" class="form-label">PSČ</label>
                    <input type="text" class="form-control" id="postalCode" name="postalCode" required pattern="^\d{5}$" title="PSČ musí mať 5 číslic.">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telefónne číslo</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required pattern="^\+421\d{9}$" title="Telefónne číslo musí začínať s +421 a obsahovať 9 číslic.">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="col-md-5">
                <h2 class="text-center mb-5 mt-4">Spôsob doručenia</h2>
                <div class="form-check">
                    <input class="form-check-input focus-ring focus-ring-dark" type="radio" name="doprava" id="kurier" value="kurier" required>
                    <label class="form-check-label" for="kurier">Kuriér na adresu (3,50 €)</label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input focus-ring focus-ring-dark" type="radio" name="doprava" id="posta" value="posta" required>
                    <label class="form-check-label" for="posta">Doručenie na poštu (2,50 €)</label>
                </div>

                <h2 class="text-center mb-4 mt-5">Spôsob platby</h2>
                <div class="form-check">
                    <input class="form-check-input focus-ring focus-ring-dark" type="radio" name="platba" id="dobierka" value="dobierka" required>
                    <label class="form-check-label" for="dobierka">Dobierka pri prevzatí (1,00 €)</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input focus-ring focus-ring-dark" type="radio" name="platba" id="prevod" value="prevod" data-bs-toggle="collapse" data-bs-target="#bankInfo">
                    <label class="form-check-label" for="prevod">Bankový prevod (0,00 €)</label>
                </div>
                <!--
                <div class="form-check">
                    <input class="form-check-input focus-ring focus-ring-dark" type="radio" name="platba" id="karta" value="karta" data-bs-toggle="collapse" data-bs-target="#cardForm">
                    <label class="form-check-label" for="karta">Kartou online (0,00 €)</label>
                </div> -->

                <div id="bankInfo" class="collapse mt-3">
                    <div class="card card-body">
                        <p><strong>Bankové údaje:</strong></p>
                        <p>Číslo účtu/IBAN: SK12 3456 7890 1234 5678</p>
                        <p>Kód banky: 1234</p>
                        <p>Variabilný symbol: Číslo Vašej objednávky.</p>
                    </div>
                </div>

                <!--
                <div id="cardForm" class="collapse mt-3">
                    <div class="card card-body">
                        <p><strong>Zadajte údaje karty:</strong></p>
                        <div class="mb-2">
                            <label for="cardNumber" class="form-label">Číslo karty</label>
                            <input type="text" class="form-control" name="cardNumber" id="cardNumber" placeholder="1234 5678 9012 3456">
                        </div>
                        <div class="mb-2">
                            <label for="expiry" class="form-label">Expirácia</label>
                            <input type="text" class="form-control" name="expiry" id="expiry" placeholder="MM/RR">
                        </div>
                        <div class="mb-2">
                            <label for="cvc" class="form-label">CVC</label>
                            <input type="text" class="form-control" name="cvc" id="cvc" placeholder="123">
                        </div>
                    </div>
                </div> -->

                <div class="form-check mb-4 mt-5">
                    <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="suhlas" required>
                    <label class="form-check-label" for="suhlas">
                        Prečítal/a som si a súhlasím so Všeobecnými obchodnými podmienkami webovej stránky.
                    </label>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mt-5 mb-5">
                    <button type="submit" class="btn btn-dark w-100 py-2">Odoslať</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.querySelectorAll('input[name="platba"]').forEach((radio) => {
            radio.addEventListener('change', function () {
                document.querySelectorAll('.collapse.show').forEach(el => {
                    let bsCollapse = new bootstrap.Collapse(el, { toggle: false });
                    bsCollapse.hide();
                });

                let target = this.getAttribute('data-bs-target');
                if (target) {
                    let targetEl = document.querySelector(target);
                    if (targetEl) {
                        let bsCollapse = new bootstrap.Collapse(targetEl);
                        bsCollapse.show();
                    }
                }
            });
        });
    </script>
</main>


<footer>
    @include('components.footer')
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
