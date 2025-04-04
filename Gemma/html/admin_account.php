<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search"/>
    <title>Admin</title>
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
            <div class="card mt-4">
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
            <div class="card mt-4">
                <div class="card-header custom-card-header-bg text-black">
                    <h5>Upraviť produkt</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="update_product.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="editProductCode" class="form-label">Kód produktu</label>
                            <input type="text" class="form-control" name="product_code" id="editProductCode" required>
                        </div>
                        <div class="mb-3">
                            <label for="editProductName" class="form-label">Názov produktu</label>
                            <input type="text" class="form-control" name="product_name" id="editProductName" required>
                        </div>
                        <div class="mb-3">
                            <label for="editProductDescription" class="form-label">Popis produktu</label>
                            <textarea class="form-control" name="product_description" id="editProductDescription"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editProductPrice" class="form-label">Cena</label>
                            <input type="number" class="form-control" name="product_price" id="editProductPrice">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Obrázky produktu</label>
                            <div class="d-flex flex-wrap gap-2">
                                <div class="text-center">
                                    <div class="img-thumbnail d-flex justify-content-center align-items-center bg-secondary text-white" style="width: 100px; height: 100px;">
                                        Obrázok tu
                                    </div>
                                    <input type="checkbox" name="delete_images[]" value="1"> Vymazať
                                </div>
                                <div class="text-center">
                                    <div class="img-thumbnail d-flex justify-content-center align-items-center bg-secondary text-white" style="width: 100px; height: 100px;">
                                        Obrázok tu
                                    </div>
                                    <input type="checkbox" name="delete_images[]" value="2"> Vymazať
                                </div>
                                <div class="text-center">
                                    <div class="img-thumbnail d-flex justify-content-center align-items-center bg-secondary text-white" style="width: 100px; height: 100px;">
                                        Obrázok tu
                                    </div>
                                    <input type="checkbox" name="delete_images[]" value="3"> Vymazať
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="editProductImages" class="form-label">Pridať nové obrázky</label>
                            <input type="file" class="form-control" name="new_images[]" multiple accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-dark w-100">Upraviť produkt</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-4">
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
        <div class="text-center mt-5 mb-2">
            <button class="btn btn-dark w-50">Odhlásiť sa</button>
        </div>
    </div>
</main>


<footer>
    <?php include "../html/footer.php" ?>
</footer>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>