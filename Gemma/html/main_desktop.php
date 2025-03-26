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
            <h1 class="custom_italiana_max" >GEMMA</h1>
        </div>
    </main>

    <?php include "../html/nav_bar.php"; ?>
    <div class="container-fluid d-flex justify-content-center align-items-center custom-container" style="background: linear-gradient(to bottom, #E2CBCB, #F6F7F9);">
        <?php include "../html/carousel.php"; ?>
    </div>

    <footer>
        <?php include "../html/footer.php"; ?>
    </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>