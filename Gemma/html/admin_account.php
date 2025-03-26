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


<main class="container" style="padding-top: 86px;padding-bottom: 100px;">
    <!-- Admin dashboard -->
    <h2 class="text-center mb-5 mt-5">Administrátorský Panel</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header custom-card-header-bg text-black">
                    <h5>Pridať nový produkt</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="productName" class="form-label">Názov produktu</label>
                            <input type="text" class="form-control" id="productName" placeholder="Zadajte názov produktu" required>
                        </div>
                        <div class="mb-3">
                            <label for="productDescription" class="form-label">Popis produktu</label>
                            <textarea class="form-control" id="productDescription" placeholder="Zadajte popis produktu" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Cena</label>
                            <input type="number" class="form-control" id="productPrice" placeholder="Zadajte cenu" required>
                        </div>
                        <div class="mb-3">
                            <label for="productImage" class="form-label">Obrázok produktu</label>
                            <input type="file" class="form-control" id="productImage" required>
                        </div>
                        <div class="mb-3">
                            <label for="productCode" class="form-label">Kód produktu</label>
                            <input type="text" class="form-control" id="productCode" placeholder="Zadajte kód produktu" required>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Pridať produkt</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header custom-card-header-bg text-black">
                    <h5>Upraviť produkt</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="editProductCode" class="form-label">Kód produktu</label>
                            <input type="text" class="form-control" id="editProductCode" placeholder="Zadajte kód produktu na úpravu" required>
                        </div>
                        <div class="mb-3">
                            <label for="editProductDescription" class="form-label">Popis produktu</label>
                            <textarea class="form-control" id="editProductDescription" placeholder="Upravte popis produktu"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editProductPrice" class="form-label">Cena</label>
                            <input type="number" class="form-control" id="editProductPrice" placeholder="Upravte cenu produktu">
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Upraviť produkt</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header custom-card-header-bg text-black">
                    <h5>Odstrániť produkt</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="deleteProductCode" class="form-label">Kód produktu na odstránenie</label>
                            <input type="text" class="form-control" id="deleteProductCode" placeholder="Zadajte kód produktu na odstránenie" required>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Odstrániť produkt</button>
                    </form>
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