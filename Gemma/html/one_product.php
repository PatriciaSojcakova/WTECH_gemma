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
<body class="one_product">
<header>
    <?php include "../html/header.php" ?>
</header>

<?php include "../html/nav_bar.php"; ?>


<main class="container" style="padding-top: 86px;">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="product-container-single">
                                <a href="one_product.php" class="text-decoration-none text-reset d-block">
                                    <img src="../custom_files/Obrazky/ring.webp" class="product-image-single" alt="Obrázok produktu">
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="product-container-single">
                                <a href="one_product.php" class="text-decoration-none text-reset d-block">
                                    <img src="../custom_files/Obrazky/ring.webp" class="product-image-single" alt="Obrázok produktu">
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="product-container-single">
                                <a href="one_product.php" class="text-decoration-none text-reset d-block">
                                    <img src="../custom_files/Obrazky/ring.webp" class="product-image-single" alt="Obrázok produktu">
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
                <div class="favorite-container text-center mt-3">
                    <input type="checkbox" id="single-prod1" class="favorite-checkbox d-none">
                    <label for="single-prod1" class="favorite-icon material-icons">favorite</label>
                </div>
            </div>

            <div class="col-md-7 mb-5">
                <h2 class="fw-bold">Názov</h2>
                <p class="fw-bold">Popis produktu</p>
                <p class="text-muted">------------------------------------</p>
                <p class="text-muted">------------------------------------</p>
                <p class="text-muted">------------------------------------</p>

                <h5 class="fw-bold mt-3">Špecifikácie</h5>
                <p class="mb-1">
                    <strong>Materiál:</strong> ------- <br>
                    <strong>Farba:</strong> ------- <br>
                    <strong>Určenie:</strong> -------
                </p>

                <div class="d-flex justify-content-between align-items-center mt-5">
                    <p class="mb-0"><strong>Skladom:</strong>
                        <span>
                            <i class="material-icons text-black">check</i>
                        </span>
                    </p>
                    <h4 class="fw-bold mb-0">Cena: <span class="text-dark">300,00€</span></h4>
                </div>

                <div class="d-flex justify-content-end align-items-center mt-3">
                    <input type="number" class="form-control text-center me-2" style="width: 80px;" value="1" min="1" max="10">
                    <button class="btn btn-dark">Vložiť do košíka</button>
                </div>
            </div>


        </div>
    </div>




    <div class="custom-container mt-5 mb-5">
        <h2 class="fw-bold mb-5">Mohlo by sa Vám páčiť ...</h2>
        <div class="row d-flex flex-wrap justify-content-center g-0">

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <a href="one_product.php" class="text-decoration-none text-reset d-block">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Elegant</p>
                    </a>
                </div>
                <input type="checkbox" id="one-prod1" class="favorite-checkbox">
                <label for="one-prod1" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <a href="one_product.php" class="text-decoration-none text-reset d-block">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Elegant</p>
                    </a>
                </div>
                <input type="checkbox" id="one-prod2" class="favorite-checkbox">
                <label for="one-prod2" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <a href="one_product.php" class="text-decoration-none text-reset d-block">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Elegant</p>
                    </a>
                </div>
                <input type="checkbox" id="one-prod3" class="favorite-checkbox">
                <label for="one-prod3" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <a href="one_product.php" class="text-decoration-none text-reset d-block">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Elegant</p>
                    </a>
                </div>
                <input type="checkbox" id="one-prod4" class="favorite-checkbox">
                <label for="one-prod4" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <a href="one_product.php" class="text-decoration-none text-reset d-block">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Elegant</p>
                    </a>
                </div>
                <input type="checkbox" id="one-prod5" class="favorite-checkbox">
                <label for="one-prod5" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <a href="one_product.php" class="text-decoration-none text-reset d-block">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Elegant</p>
                    </a>
                </div>
                <input type="checkbox" id="one-prod6" class="favorite-checkbox">
                <label for="fone-prod6" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <a href="one_product.php" class="text-decoration-none text-reset d-block">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Elegant</p>
                    </a>
                </div>
                <input type="checkbox" id="one-prod7" class="favorite-checkbox">
                <label for="one-prod7" class="favorite-icon material-icons">favorite</label>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                <div class="product-container">
                    <a href="one_product.php" class="text-decoration-none text-reset d-block">
                        <img src="../custom_files/Obrazky/ring.webp" class="product-image" alt="Obrázok produktu">
                        <p class="product-name">Prsteň Elegant</p>
                    </a>
                </div>
                <input type="checkbox" id="one-prod8" class="favorite-checkbox">
                <label for="one-prod8" class="favorite-icon material-icons">favorite</label>
            </div>

        </div>

        <div class="container-fluid d-flex justify-content-center align-items-center mt-5 mb-5">
            <a href="products_desktop.php">
                <button class="btn btn-dark">Pokračovať ďalej ...</button>
            </a>
        </div>
    </div>


</main>


<footer>
    <?php include "../html/footer.php" ?>
</footer>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
