<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search"/>
    <title>Prehľad</title>
</head>
<body class="product-page">
    <header>
        <?php include "../html/header.php" ?>
    </header>

    <?php include "../html/nav_bar.php"?>

    <main class="container" style="padding-top: 90px;">

        <div class="container">
            <!-- Tlačidlo na otvorenie/zatvorenie filtrov -->
            <button class="filter-btn custom_playfair_bold" data-bs-toggle="collapse" data-bs-target="#filterCollapse" aria-expanded="false">
                FILTRE
            </button>


            <!-- Filter sekcia -->
            <div id="filterCollapse" class="collapse mt-2">
                <div class="filter-container">
                    <div class="row justify-content-center">
                        <!-- Materiál -->
                        <div class="col-md-3 d-flex flex-column align-items-start">
                            <p class="custom_playfair_bold mt-3 mb-1">MATERIÁL</p>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="material1" name="material">
                                <label class="form-check-label custom_playfair_semi" for="material1">zlato</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="material2" name="material">
                                <label class="form-check-label custom_playfair_semi" for="material2">biele/ružové zlato</label>
                            </div>
                            <div class="filter-form-check ">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="material3" name="material">
                                <label class="form-check-label custom_playfair_semi" for="material3">striebro</label>
                            </div>
                            <div class="filter-form-check ">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="material4" name="material">
                                <label class="form-check-label custom_playfair_semi" for="material4">titanium</label>
                            </div>
                            <div class="filter-form-check ">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="material5" name="material">
                                <label class="form-check-label custom_playfair_semi" for="material5">chirurgická oceľ</label>
                            </div>
                            <div class="filter-form-check ">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="material6" name="material">
                                <label class="form-check-label custom_playfair_semi" for="material6">iné</label>
                            </div>
                        </div>

                        <!-- Farba -->
                        <div class="col-md-3 d-flex flex-column align-items-start">
                            <p class="custom_playfair_bold mt-3 mb-1">FARBA KAMEŇA</p>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="farba1" name="farba">
                                <label class="form-check-label custom_playfair_semi" for="farba1">diamant</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="farba2" name="farba">
                                <label class="form-check-label custom_playfair_semi" for="farba2">rubín</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="farba3" name="farba">
                                <label class="form-check-label custom_playfair_semi" for="farba3">zafír</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="farba4" name="farba">
                                <label class="form-check-label custom_playfair_semi" for="farba4">smaragd</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="farba4" name="farba">
                                <label class="form-check-label custom_playfair_semi" for="farba4">ametyst</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="farba5" name="farba">
                                <label class="form-check-label custom_playfair_semi" for="farba5">topás</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="farba6" name="farba">
                                <label class="form-check-label custom_playfair_semi" for="farba6">perla</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="farba7" name="farba">
                                <label class="form-check-label custom_playfair_semi" for="farba7">jantár</label>
                            </div>

                        </div>

                        <!-- Určenie -->
                        <div class="col-md-3 d-flex flex-column align-items-start">
                            <p class="custom_playfair_bold mt-3 mb-1">URČENIE</p>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="urcenie1" name="urcenie">
                                <label class="form-check-label custom_playfair_semi" for="urcenie1">ženy</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="urcenie2" name="urcenie">
                                <label class="form-check-label custom_playfair_semi" for="urcenie2">muži</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="urcenie3" name="urcenie">
                                <label class="form-check-label custom_playfair_semi" for="urcenie3">deti</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="urcenie4" name="urcenie">
                                <label class="form-check-label custom_playfair_semi" for="urcenie4">unisex</label>
                            </div>
                        </div>

                        <!-- Cena -->
                        <div class="col-md-3 d-flex flex-column align-items-start">
                            <p class="custom_playfair_bold mt-3 mb-1">CENA</p>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="cena1" name="cena">
                                <label class="form-check-label custom_playfair_semi" for="cena1">< 50€</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="cena2" name="cena">
                                <label class="form-check-label custom_playfair_semi" for="cena2">50€ - 100€</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="cena3" name="cena">
                                <label class="form-check-label custom_playfair_semi" for="cena3">100€ - 500€</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="cena4" name="cena">
                                <label class="form-check-label custom_playfair_semi" for="cena4">500€ - 1000€</label>
                            </div>
                            <div class="filter-form-check">
                                <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="cena5" name="cena">
                                <label class="form-check-label custom_playfair_semi" for="cena5">1000€ <</label>
                            </div>
                        </div>
                    </div>

                    <!-- Tlačidlo na filtrovanie -->
                    <div class="text-center mt-4">
                        <button class="btn btn-secondary bg-black w-25">Filtruj</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-end mb-4 me-3 mt-1">
            <select id="sortPrice" class="form-select w-25 focus-ring focus-ring-dark">
                <option value="asc">Cena: vzostupne</option>
                <option value="desc">Cena: zostupne</option>
            </select>
        </div>

        <div class="custom-container mt-5 mb-5">

            <div class="row d-flex flex-wrap justify-content-center g-0">

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                            <img src="../custom_files/Obrazky/ring/woman/simple_gold_4-removebg-preview.png" class="product-image" alt="Obrázok produktu">
                            <p class="product-name">Prsteň Elegant</p>
                        </a>
                    </div>
                    <input type="checkbox" id="favorite-prod1" class="favorite-checkbox">
                    <label for="favorite-prod1" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                            <img src="../custom_files/Obrazky/ring/woman/simple_gold_3-removebg-preview.png" class="product-image" alt="Obrázok produktu">
                            <p class="product-name">Prsteň Wildlife</p>
                        </a>
                    </div>
                    <input type="checkbox" id="favorite-prod2" class="favorite-checkbox">
                    <label for="favorite-prod2" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                            <img src="../custom_files/Obrazky/ring/woman/simple_gold_dia_1-removebg-preview.png" class="product-image" alt="Obrázok produktu">
                            <p class="product-name">Prsteň Enchantix </p>
                        </a>
                    </div>
                    <input type="checkbox" id="favorite-prod3" class="favorite-checkbox">
                    <label for="favorite-prod3" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                            <img src="../custom_files/Obrazky/ring/woman/simple_golden_5-removebg-preview.png" class="product-image" alt="Obrázok produktu">
                            <p class="product-name">Prsteň Asperitas </p>
                        </a>
                    </div>
                    <input type="checkbox" id="favorite-prod4" class="favorite-checkbox">
                    <label for="favorite-main4" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                            <img src="../custom_files/Obrazky/ring/woman/stone_gold_dia-removebg-preview.png" class="product-image" alt="Obrázok produktu">
                            <p class="product-name">Prsteň Eterna</p>
                        </a>
                    </div>
                    <input type="checkbox" id="favorite-prod5" class="favorite-checkbox">
                    <label for="favorite-prod5" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                            <img src="../custom_files/Obrazky/ring/woman/stone_gold_dia_-removebg-preview.png" class="product-image" alt="Obrázok produktu">
                            <p class="product-name">Prsteň Harmony</p>
                        </a>
                    </div>
                    <input type="checkbox" id="favorite-prod6" class="favorite-checkbox">
                    <label for="favorite-prod6" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                            <img src="../custom_files/Obrazky/ring/woman/stone_gold_dia_1-removebg-preview.png" class="product-image" alt="Obrázok produktu">
                            <p class="product-name">Prsteň Eccentricitas</p>
                        </a>
                    </div>
                    <input type="checkbox" id="favorite-prod7" class="favorite-checkbox">
                    <label for="favorite-prod7" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                            <img src="../custom_files/Obrazky/ring/woman/stone_gold_dia_3-removebg-preview.png" class="product-image" alt="Obrázok produktu">
                            <p class="product-name">Prsteň Vintage</p>
                        </a>
                    </div>
                    <input type="checkbox" id="favorite-prod8" class="favorite-checkbox">
                    <label for="favorite-prod8" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                            <img src="../custom_files/Obrazky/ring/other/simple_gold_3-removebg-preview.png" class="product-image" alt="Obrázok produktu">
                            <p class="product-name">Prsteň Laurel</p>
                        </a>
                    </div>
                    <input type="checkbox" id="favorite-prod9" class="favorite-checkbox">
                    <label for="favorite-prod9" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                            <img src="../custom_files/Obrazky/ring/other/simple_gold-removebg-preview.png" class="product-image" alt="Obrázok produktu">
                            <p class="product-name">Prsteň Amicitia</p>
                        </a>
                    </div>
                    <input type="checkbox" id="favorite-prod10" class="favorite-checkbox">
                    <label for="favorite-prod10" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                            <img src="../custom_files/Obrazky/ring/other/simple_gold_2-removebg-preview.png" class="product-image" alt="Obrázok produktu">
                            <p class="product-name">Prsteň Sirenix</p>
                        </a>
                    </div>
                    <input type="checkbox" id="favorite-prod11" class="favorite-checkbox">
                    <label for="favorite-prod11" class="favorite-icon material-icons">favorite</label>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                            <img src="../custom_files/Obrazky/ring/man/simple_gold_2-removebg-preview.png" class="product-image" alt="Obrázok produktu">
                            <p class="product-name">Prsteň Virilitas</p>
                        </a>
                    </div>
                    <input type="checkbox" id="favorite-prod12" class="favorite-checkbox">
                    <label for="favorite-prod12" class="favorite-icon material-icons">favorite</label>
                </div>

            </div>

        </div>


        <?php include "../html/page_number.php" ?>



    </main>

    <footer>
        <?php include "../html/footer.php" ?>
    </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>