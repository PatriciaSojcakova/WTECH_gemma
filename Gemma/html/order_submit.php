<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search"/>
    <title>Dokončenie nákupu</title>
</head>
<body>
<header>
    <?php include "../html/header.php" ?>
</header>


<main class="container py-5" style="padding-top: 86px;">
    <h2 class="text-center fw-bold mb-5">Doručovacie údaje</h2>

    <div class="row justify-content-center gap-5">

        <div class="col-md-5">
            <h2 class="text-center mb-4 mt-4">Doručovacie údaje</h2>
            <form id="checkoutForm" method="post">
                <div class="mb-3">
                    <label class="form-label">Krstné meno</label>
                    <input type="text" class="form-control" name="firstName" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Priezvisko</label>
                    <input type="text" class="form-control" name="lastName" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Adresa</label>
                    <input type="text" class="form-control" name="address" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mesto/Obec</label>
                    <input type="text" class="form-control" name="city" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">PSČ</label>
                    <input type="text" class="form-control" name="postalCode" required pattern="^\d{5}$" title="PSČ musí mať 5 číslic.">
                </div>
                <div class="mb-3">
                    <label class="form-label">Telefónne číslo</label>
                    <input type="tel" class="form-control" name="phone" required pattern="^\+421\d{9}$" title="Telefónne číslo musí začínať s +421 a obsahovať 9 číslic.">
                </div>
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
        </div>

        <div class="col-md-5">
            <h2 class="text-center mb-5 mt-4">Spôsob doručenia</h2>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="doprava" id="kurier" required>
                <label class="form-check-label" for="kurier">Kuriér na adresu (3,50 €)</label>
            </div>
            <div class="form-check mb-4">
                <input class="form-check-input" type="radio" name="doprava" id="posta" required>
                <label class="form-check-label" for="posta">Doručenie na poštu (2,50 €)</label>
            </div>

            <div class="container mt-5">
                <h2 class="text-center mb-4">Spôsob platby</h2>

                <div class="accordion" id="paymentAccordion">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="platba" id="dobierka" required>
                        <label class="form-check-label" for="dobierka">Dobierka pri prevzatí (1,00 €)</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="platba" id="prevod" data-bs-toggle="collapse" data-bs-target="#bankInfo" aria-expanded="false" aria-controls="bankInfo">
                        <label class="form-check-label" for="prevod">Bankový prevod (0,00 €)</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="platba" id="karta" data-bs-toggle="collapse" data-bs-target="#cardForm" aria-expanded="false" aria-controls="cardForm">
                        <label class="form-check-label" for="karta">Kartou online (0,00 €)</label>
                    </div>

                    <div id="bankInfo" class="accordion-collapse collapse mt-3" data-bs-parent="#paymentAccordion">
                        <div class="card card-body">
                            <p><strong>Bankové údaje:</strong></p>
                            <p>Číslo účtu/IBAN: SK12 3456 7890 1234 5678</p>
                            <p>Kód banky: 1234</p>
                            <p>Variabilný symbol: Číslo Vašej objednávky.</p>
                        </div>
                    </div>

                    <div id="cardForm" class="accordion-collapse collapse mt-3" data-bs-parent="#paymentAccordion">
                        <div class="card card-body">
                            <p><strong>Zadajte údaje karty:</strong></p>
                            <div class="mb-2">
                                <label class="form-label">Číslo karty</label>
                                <input type="text" class="form-control" name="cardNumber" placeholder="1234 5678 9012 3456" required pattern="\d{4} \d{4} \d{4} \d{4}" title="Číslo karty musí obsahovať 16 číslic a byť rozdelené medzerami.">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Expirácia</label>
                                <input type="text" class="form-control" name="expiry" placeholder="MM/RR" required pattern="(0[1-9]|1[0-2])\/\d{2}" title="Formát expirácie musí byť MM/RR.">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">CVC</label>
                                <input type="text" class="form-control" name="cvc" placeholder="123" required pattern="\d{3}" title="CVC musí obsahovať 3 číslice.">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-check mb-4 mt-5">
                <input class="form-check-input" type="checkbox" id="suhlas" required>
                <label class="form-check-label" for="suhlas">
                    Prečítal/a som si a súhlasím so Všeobecnými obchodnými podmienkami webovej stránky.
                </label>
            </div>
            <div class="mt-5 mb-5">
                <a href="order_done.php">
                    <button type="submit" class="btn btn-dark w-100 py-2">Odoslať</button>
                </a>
            </div>
        </div>
    </div>
    </form>
</main>


<footer>
    <?php include "../html/footer.php" ?>
</footer>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>