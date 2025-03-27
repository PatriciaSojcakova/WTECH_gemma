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
<body class="product-page">
    <header>
        <?php include "../html/header.php" ?>
    </header>

    <?php include "../html/nav_bar.php"?>

    <main class="container" style="padding-top: 86px;">

        <div class="container">
            <!-- Tlačidlo na otvorenie/zatvorenie filtrov -->
            <button class="filter-btn" data-bs-toggle="collapse" data-bs-target="#filterCollapse" aria-expanded="false">
                Filtre
            </button>

            <!-- Filter sekcia -->
            <div id="filterCollapse" class="collapse mt-2">
                <div class="filter-container">
                    <div class="row text-center">
                        <!-- Materiál -->
                        <div class="col-md-3">
                            <h5>Materiál</h5>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="material"> niečo</div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="material"> niečo</div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="material"> niečo</div>
                        </div>

                        <!-- Farba -->
                        <div class="col-md-3">
                            <h5>Farba</h5>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="farba"> niečo</div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="farba"> niečo</div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="farba"> niečo</div>
                        </div>

                        <!-- Určenie -->
                        <div class="col-md-3">
                            <h5>Určenie</h5>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="urcenie"> Ženy</div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="urcenie"> Muži</div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="urcenie"> Deti</div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="urcenie"> Unisex</div>
                        </div>

                        <!-- Cena -->
                        <div class="col-md-3">
                            <h5>Cena</h5>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="cena"> niečo</div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="cena"> niečo</div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="cena"> niečo</div>
                        </div>

                    </div>

                    <!-- Tlačidlo na filtrovanie -->
                    <div class="text-center mt-4">
                        <button class="btn btn-secondary">Filtruj</button>
                    </div>
                </div>
            </div>
        </div>




        <div class="custom-container mt-5 mb-5">

            <div class="row d-flex flex-wrap justify-content-center g-0">

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Elegant</p>
                    </div>
                    <input type="checkbox" id="favorite-prod1" class="favorite-checkbox">
                    <label for="favorite-prod1" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Luxus</p>
                    </div>
                    <input type="checkbox" id="favorite-prod2" class="favorite-checkbox">
                    <label for="favorite-prod2" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Moderný</p>
                    </div>
                    <input type="checkbox" id="favorite-prod3" class="favorite-checkbox">
                    <label for="favorite-prod3" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Klasik</p>
                    </div>
                    <input type="checkbox" id="favorite-prod4" class="favorite-checkbox">
                    <label for="favorite-main4" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Romantický</p>
                    </div>
                    <input type="checkbox" id="favorite-prod5" class="favorite-checkbox">
                    <label for="favorite-prod5" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Vintage</p>
                    </div>
                    <input type="checkbox" id="favorite-prod6" class="favorite-checkbox">
                    <label for="favorite-prod6" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Diamant</p>
                    </div>
                    <input type="checkbox" id="favorite-prod7" class="favorite-checkbox">
                    <label for="favorite-prod7" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Zlato</p>
                    </div>
                    <input type="checkbox" id="favorite-prod8" class="favorite-checkbox">
                    <label for="favorite-prod8" class="favorite-icon material-icons">favorite</label>
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