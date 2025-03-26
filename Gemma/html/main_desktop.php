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

    <main class="container-fluid" style="padding-top: 86px;">
        <div class="container d-flex justify-content-center align-items-center custom-container">
            <h1 class="custom_italiana_max">GEMMA</h1>
        </div>
    </main>

    <?php include "../html/nav_bar.php"; ?>

    <div class="container-fluid d-flex justify-content-center align-items-center custom-container" style="background: linear-gradient(to bottom, #E2CBCB, #F6F7F9);">
        <?php include "../html/carousel.php"; ?>
    </div>

    <div class="container-fluid d-flex justify-content-center align-items-center custom-container" style="background: #D9D9D9">
        <h1 class="custom_italiana">REKLAMA</h1>
    </div>

    <div class="custom-container mt-5 mb-5">

        <h2 class="text-center mb-5 mt-5">ZĽAVNENÉ</h2>

        <div class="row d-flex flex-wrap justify-content-center">

            <!-- Prvý obrázok -->
            <div class="col-md-3 col-sm-6 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Elegant</p>
                </div>
            </div>

            <!-- Druhý obrázok -->
            <div class="col-md-3 col-sm-6 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Luxus</p>
                </div>
            </div>

            <!-- Tretí obrázok -->
            <div class="col-md-3 col-sm-6 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Moderný</p>
                </div>
            </div>

            <!-- Štvrtý obrázok -->
            <div class="col-md-3 col-sm-6 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Klasik</p>
                </div>
            </div>

            <!-- Piaty obrázok -->
            <div class="col-md-3 col-sm-6 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Romantický</p>
                </div>
            </div>

            <!-- Šiesty obrázok -->
            <div class="col-md-3 col-sm-6 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Vintage</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Diamant</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Zlato</p>
                </div>
            </div>

        </div>


    </div>

    <footer>
        <?php include "../html/footer.php"; ?>
    </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>