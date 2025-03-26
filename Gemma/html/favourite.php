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


<main class="container" style="padding-top: 86px;">
    <h2 class="text-center mb-5 mt-5">OBĽÚBENÉ</h2>

    <div class="row fw-bold border-bottom border-black pb-2 d-none d-md-flex justify-content-between">
        <div class="col-md-3 text-center">Detail produktu </div>
        <div class="col-md-3 text-center">Názov & Parametre</div>
        <div class="col-md-3 text-center">Dostupnosť</div>
        <div class="col-md-3 text-center">Pridať do košíka</div>
    </div>

    <!-- Produkt 1 -->
    <div class="row align-items-center py-3 border-bottom">
        <!-- Obrázok + Srdiečko -->
        <div class="col-md-3 text-center">
            <div class="product-container">
                <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
            </div>
            <!-- Skrytý checkbox -->
            <input type="checkbox" id="favorite1" class="favorite-checkbox">
            <!-- Label ako srdiečko (nahrádza klikateľný button) -->
            <label for="favorite1" class="favorite-icon material-icons">favorite</label>
        </div>

        <!-- Názov a Parametre -->
        <div class="col-md-3 mt-3">
            <p><strong>Názov</strong></p>
            <hr>
            <p>
                <strong>Parametre:</strong><br>
                Materiál: ___________<br>
                Farba: ___________<br>
                Určenie: ___________
            </p>
        </div>

        <!-- Dostupnosť -->
        <div class="col-md-3 mt-3 text-center">
            <span class="border rounded-circle p-2">
                <i class="material-icons text-success">check</i>
            </span>
        </div>

        <!-- Ikonka košíka -->
        <div class="col-md-3 mt-3 text-center">
            <button class="btn">
                <i class="material-icons" style="color: black;">shopping_cart</i>
            </button>
        </div>
    </div>
    <!-- Produkt 2 -->
    <div class="row align-items-center py-3 border-bottom">
        <div class="col-md-3 text-center">
            <div class="product-container">
                <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
            </div>
            <!-- Skrytý checkbox -->
            <input type="checkbox" id="favorite2" class="favorite-checkbox">
            <!-- Label ako srdiečko (nahrádza klikateľný button) -->
            <label for="favorite2" class="favorite-icon material-icons">favorite</label>
        </div>
        <div class="col-md-3 mt-3">
            <h6>Názov</h6>
            <hr>
            <p>
                <strong>Parametre:</strong><br>
                Materiál: ___________<br>
                Farba: ___________<br>
                Určenie: ___________
            </p>
        </div>
        <div class="col-md-3 mt-3 text-center">
            <span class="border rounded-circle p-2">
                <i class="material-icons text-danger">close</i>
            </span>
        </div>
        <div class="col-md-3 mt-3 text-center">
            <button class="btn">
                <i class="material-icons" style="color: black;">shopping_cart</i>
            </button>
        </div>
    </div>



</main>


<footer>
    <?php include "../html/footer.php" ?>
</footer>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>