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
                <form>
                    <div class="mb-3">
                        <label class="form-label">Krstné meno</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Priezvisko</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Adresa</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mesto/Obec</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PSČ</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefónne číslo</label>
                        <input type="tel" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-control" required>
                    </div>
                </form>
            </div>

            <!-- Pravá časť: Spôsob doručenia a platby -->
            <div class="col-md-5">
                <h2 class="text-center mb-4 mt-4">Spôsob doručenia</h2>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="doprava" id="kurier" required>
                    <label class="form-check-label" for="kurier">Kuriér na adresu (3,50 €)</label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="doprava" id="posta" required>
                    <label class="form-check-label" for="posta">Doručenie na poštu (2,50 €)</label>
                </div>

                <h2 class="text-center mb-4 mt-5">Spôsob platby</h2>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="platba" id="dobierka" required>
                    <label class="form-check-label" for="dobierka">Dobierka pri prevzatí (1,00 €)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="platba" id="prevod" required>
                    <label class="form-check-label" for="prevod">Bankový prevod (0,00 €)</label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="platba" id="karta" required>
                    <label class="form-check-label" for="karta">Kartou online (0,00 €)</label>
                </div>

                <div class="form-check mb-4 mt-5">
                    <input class="form-check-input" type="checkbox" id="suhlas" required>
                    <label class="form-check-label" for="suhlas">
                        Prečítal/a som si a súhlasím so Všeobecnými obchodnými podmienkami webovej stránky.
                    </label>
                </div>
                <div class="mt-5 mb-5">
                    <button type="submit" class="btn btn-dark w-100 py-2">Odoslať</button>
                </div>
            </div>
        </div>


</main>


<footer>
    <?php include "../html/footer.php" ?>
</footer>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>