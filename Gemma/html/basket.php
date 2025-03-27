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
<body class="basket-page">
<header>
    <?php include "../html/header.php" ?>
</header>

<?php include "../html/nav_bar.php"; ?>

<main class="container" style="padding-top: 86px;">

    <h2 class="text-center mb-5 mt-5">NÁKUPNÝ KOŠÍK</h2>

    <div class="row title-bar fw-bold border-bottom border-black pb-2 d-none d-md-flex justify-content-between custom-basket-fav-font" style="background: #F6F7F9">
        <div class="col-md-3 text-center mt-2">Detail produktu </div>
        <div class="col-md-3 text-center mt-2">Názov & Parametre</div>
        <div class="col-md-3 text-center mt-2">Počet kusov</div>
        <div class="col-md-3 text-center mt-2">Cena</div>
    </div>

    <div class="row align-items-center py-3 border-bottom">
        <div class="col-md-3 text-center">
            <div class="product-container">
                <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
            </div>
        </div>

        <div class="col-md-3 mt-3 d-flex flex-column align-items-center text-start justify-content-center">

            <p> <strong>Názov</strong><br>
                Prsteň objatie <br><br>
                <strong>Parametre:</strong><br>
                Materiál: zlato<br>
                Farba: rose gold<br>
                Určenie: dámsky
            </p>
        </div>

        <div class="col-md-3 text-center">
            <input type="number" class="form-control text-center w-50 mx-auto" value="1" min="1" max="10">
        </div>

        <div class="col-md-3 text-center">
            <span class="fw-bold">99,90 €</span>
        </div>
    </div>



    <div class="row align-items-center py-3 border-bottom">
        <div class="col-md-3 text-center">
            <div class="product-container">
                <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
            </div>
        </div>
        <div class="col-md-3 mt-3 d-flex flex-column align-items-center text-start justify-content-center">

            <p> <strong>Názov</strong><br>
                Prsteň objatie <br><br>
                <strong>Parametre:</strong><br>
                Materiál: zlato<br>
                Farba: rose gold<br>
                Určenie: dámsky
            </p>
        </div>
        <div class="col-md-3 text-center">
            <input type="number" class="form-control text-center w-50 mx-auto" value="1" min="1" max="10">
        </div>

        <div class="col-md-3 text-center">
            <span class="fw-bold">99,90 €</span>
        </div>
    </div>

    <div class="text-center mt-5 mb-5">
        <a href="order_submit.php">
            <button class="btn btn-dark w-20 mb-4">Dokončiť nákup</button>
        </a>

    </div>



</main>


<footer>
    <?php include "../html/footer.php" ?>
</footer>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>