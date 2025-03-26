<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search"/>
    <title>Bootstrap demo</title>
</head>
<body>
<header>
    <?php include "../html/header.php" ?>
</header>

    <?php include "../html/nav_bar.php"; ?>

<main class="container" style="padding-top: 100px;padding-bottom: 100px;">
     <div class="row justify-content-center">
            <!-- Prihlásenie -->
            <div class="col-md-5">
                <h2 class="text-center mb-4 mt-4">Prihlásiť sa</h2>
                <form>
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="loginEmail" placeholder="Zadajte e-mail" required>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Heslo</label>
                        <input type="password" class="form-control" id="loginPassword" placeholder="Zadajte heslo" required>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Zapamätať si ma</label>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mb-4">Prihlásiť sa</button>
                </form>
            </div>

            <!-- Registrácia -->
            <div class="col-md-5">
                <h2 class="text-center mb-4 mt-4">Vytvoriť konto</h2>
                <form>
                    <div class="mb-3">
                        <label for="registerFirstName" class="form-label">Meno</label>
                        <input type="text" class="form-control" id="registerFirstName" placeholder="Vaše meno" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerLastName" class="form-label">Priezvisko</label>
                        <input type="text" class="form-control" id="registerLastName" placeholder="Vaše priezvisko" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="registerEmail" placeholder="Zadajte e-mail" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Heslo</label>
                        <input type="password" class="form-control" id="registerPassword" placeholder="Zadajte heslo" required>
                    </div>
                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" id="terms">
                        <label class="form-check-label" for="terms">Prečítal/a som si a súhlasím so Všeobecnými obchodnými podmienkami webovet stránky.</label>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="newsletter">
                        <label class="form-check-label" for="newsletter">Chcem dostávať e-mailom  informácie o produktoch a exkluzívnych ponukách spoločnosti Gemma.</label>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Registrovať</button>
                </form>
            </div>
        </div>

</main>


<footer>
    <?php include "../html/footer.php" ?>
</footer>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>