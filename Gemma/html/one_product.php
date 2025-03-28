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
            </div>

            <!-- Informácie o produkte -->
            <div class="col-md-7 mb-5">
                <h2 class="fw-bold">Názov</h2>
                <p class="fw-bold">Popis produktu</p>
                <hr>
                <p class="text-muted">------------------------------------</p>
                <p class="text-muted">------------------------------------</p>
                <p class="text-muted">------------------------------------</p>

                <h5 class="fw-bold mt-3">Špecifikácie</h5>
                <p class="mb-1">
                    <strong>Materiál:</strong> ------- <br>
                    <strong>Farba:</strong> ------- <br>
                    <strong>Určenie:</strong> -------
                </p>

                <!-- Skladom a Cena vedľa seba -->
                <div class="d-flex justify-content-between align-items-center mt-5">
                    <p class="mb-0"><strong>Skladom:</strong>
                        <span>
                            <i class="material-icons text-black">check</i>
                        </span>
                    </p>
                    <h4 class="fw-bold mb-0">Cena: <span class="text-dark">300,00€</span></h4>
                </div>

                <!-- Počet kusov a tlačidlo vycentrované -->
                <div class="d-flex justify-content-end align-items-center mt-3">
                    <input type="number" class="form-control text-center me-2" style="width: 80px;" value="1" min="1" max="10">
                    <button class="btn btn-dark">Vložiť do košíka</button>
                </div>
            </div>

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
