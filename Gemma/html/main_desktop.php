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
<body class="main-page">
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
        <h1 class="custom_italiana">REKLAMA NA TICHO</h1>
    </div>


    <div class="custom-container mt-5 mb-5">

        <h2 class="text-center mb-5 mt-5">ZĽAVNENÉ</h2>

        <div class="row d-flex flex-wrap justify-content-center g-0">

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Elegant</p>
                </div>
                <input type="checkbox" id="favorite-main1" class="favorite-checkbox">
                <label for="favorite-main1" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Luxus</p>
                </div>
                <input type="checkbox" id="favorite-main2" class="favorite-checkbox">
                <label for="favorite-main2" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Moderný</p>
                </div>
                <input type="checkbox" id="favorite-main3" class="favorite-checkbox">
                <label for="favorite-main3" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Klasik</p>
                </div>
                <input type="checkbox" id="favorite-main4" class="favorite-checkbox">
                <label for="favorite-main4" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Romantický</p>
                </div>
                <input type="checkbox" id="favorite-main5" class="favorite-checkbox">
                <label for="favorite-main5" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Vintage</p>
                </div>
                <input type="checkbox" id="favorite-main6" class="favorite-checkbox">
                <label for="favorite-main6" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Diamant</p>
                </div>
                <input type="checkbox" id="favorite-main7" class="favorite-checkbox">
                <label for="favorite-main7" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                    <p class="product-name">Prsteň Zlato</p>
                </div>
                <input type="checkbox" id="favorite-main8" class="favorite-checkbox">
                <label for="favorite-main" class="favorite-icon material-icons">favorite</label>
            </div>

        </div>

    </div>

    <div class="container-fluid d-flex justify-content-center align-items-center mt-5 mb-5">
        <button class="btn btn-dark ">Pokračovať ďalej ...</button>
    </div>


    <footer>
        <?php include "../html/footer.php"; ?>
    </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>