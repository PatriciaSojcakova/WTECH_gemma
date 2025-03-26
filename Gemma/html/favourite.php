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
    <h2 class="text-center mb-4">Obľúbené produkty</h2>

    <div class="row">
        <div class="col-md-4">
            <img src="path_to_image.jpg" class="card-img-top" alt="Obrázok produktu">
        </div>

        <div class="col-md-4">
            <h5 class="card-title">Názov produktu</h5>

            <p class="card-text">
                <strong>Parametre:</strong><br>
                Materiál: Bavlna<br>
                Farba: Červená<br>
                Určenie: Do domácnosti<br>
            </p>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-6">
            <span class="text-success">
                <i class="material-icons">check_circle</i> Dostupné
            </span>
                </div>
                <div class="col-6 text-end">
                    <button class="btn btn-success">
                        <i class="material-icons">add_shopping_cart</i> Pridať do košíka
                    </button>
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