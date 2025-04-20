<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search"/>
    <title>Platba</title>
</head>

<body>
    <header>
        @include('components.header')
    </header>

    <main class="container mt-5 px-md-5 px-lg-6" style="padding-top: 86px;">
        <div class="row">
            <h2 class="text-center mb-4">Platba</h2>

            <div class="col-12">
                <h4 class="mb-3">Možnosti platby</h4>
                <p>Všetky platby na našich stránkach sú bezpečné a pohodlné. Akceptujeme rôzne spôsoby platby, aby sme vyhoveli potrebám našich zákazníkov.</p>

                <h5 class="mb-3">1. Platba kartou</h5>
                <p>Za naše produkty môžete zaplatiť kreditnou alebo debetnou kartou. Akceptujeme karty Visa, MasterCard a Maestro. Proces platby je zabezpečený prostredníctvom našich platobných brán, ktoré šifrujú všetky transakcie, aby bola zaručená ich bezpečnosť.</p>

                <h5 class="mb-3">2. Platba na dobierku</h5>
                <p>Ak si prajete zaplatiť pri doručení, môžete využiť možnosť platby na dobierku. Platba je vykonaná v hotovosti kuriérovi pri prevzatí tovaru. Tento spôsob platby je dostupný len pre objednávky na území Slovenska.</p>

                <h4 class="mb-3">5. Fakturácia</h4>
                <p>Po úspešnej platbe vám bude automaticky zaslaná faktúra na zadaný e-mail. Faktúra obsahuje všetky podrobnosti o vašej objednávke vrátane dátumu platby a položiek, ktoré ste zakúpili.</p>

                <h4 class="mb-3">6. Zabezpečenie platieb</h4>
                <p>Všetky platby sú spracovávané cez zabezpečené platobné brány, ktoré spĺňajú najvyššie bezpečnostné štandardy. Vaše osobné údaje sú šifrované a nebudú nikdy zdieľané s tretími stranami.</p>

                <h4 class="mb-3">7. Zrušenie platby</h4>
                <p>V prípade, že došlo k nesprávnej platbe alebo ste si rozmysleli svoju objednávku, prosím kontaktujte našu zákaznícku podporu čo najskôr. Ak ešte nebolo odoslané, objednávku môžeme zrušiť. V prípade zrušenia platby vám bude vrátená celková suma.</p>
            </div>
        </div>
    </main>

    <footer>
        @include('components.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
