<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />

    <title>Kontakt</title>
</head>
<body>

<header>
    <?php include "../html/header.php" ?>  <!-- Import hlavičky -->
</header>

<main class="container mt-5">
    <h2 class="text-center mb-4">Kontakt</h2>


    <div class="row">

        <div class = "col-md-6">
            <!-- Sekcia Adresa -->
            <div class="card mb-4 border-0">
                <div class="card-body">
                    <h4 class="card-title">Adresa</h4>
                    <p>Názov firmy<br>Ulica 123, Mesto, PSČ<br>Slovensko</p>
                </div>
            </div>

            <!-- Sekcia Telefón -->
            <div class="card mb-4 border-0">
                <div class="card-body">
                    <h4 class="card-title">Telefón</h4>
                    <p>+421 123 456 789</p>
                </div>
            </div>

            <!-- Sekcia E-mail -->
            <div class="card mb-4 border-0">
                <div class="card-body">
                    <h4 class="card-title">E-mail</h4>
                    <p><a href="mailto:info@firma.sk">info@firma.sk</a></p>
                </div>
            </div>


        </div>


        <div class="col-md-6">

            <!-- Sekcia Sociálne siete -->
            <div class="card mb-4 border-0">
                <div class="card-body">
                    <h4 class="card-title">Sociálne siete</h4>
                    <p>
                        <a href="#">Facebook</a> |
                        <a href="#">Instagram</a> |
                        <a href="#">Twitter</a>
                    </p>
                </div>
            </div>

        </div>



        <!-- Sekcia Otváracie hodiny na stred -->
        <div class="col-md-12 d-flex justify-content-center">
            <div class="card mb-4 border-0">
                <div class="card-body text-center">
                    <h4 class="card-title">Otváracie hodiny</h4>
                    <p>Pondelok - Piatok: 9:00 - 18:00<br>Sobota: 10:00 - 14:00<br>Nedeľa: Zatvorené</p>
                </div>
            </div>
        </div>
    </div>
</main>


<footer>
    <?php include "footer.php"; ?>  <!-- Import päty -->
</footer>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
