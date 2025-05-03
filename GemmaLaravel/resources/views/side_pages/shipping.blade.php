<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search"/>
    <link rel="icon" type="image/png" href="{{ asset('image/logo.png') }}">
    <title>Doprava</title>
</head>

<body>
    <header>
        @include('components.header')
    </header>

    <main class="container mt-5 px-md-5 px-lg-6" style="padding-top: 86px;">
        <div class="row">
            <h2 class="text-center mb-4">Doprava</h2>

            <div class="col-12">
                <h4 class="mb-3">Spôsoby doručenia</h4>
                <p>Ponúkame niekoľko spôsobov doručenia, aby sme zabezpečili, že vaše objednávky budú doručené rýchlo a bezpečne.</p>

                <h5 class="mb-3">1. Doručenie na adresu (Slovensko)</h5>
                <p >V rámci Slovenska poskytujeme doručenie kuriérskymi službami. Po odoslaní objednávky vám bude zaslaný sledovací kód, aby ste si mohli sledovať stav vašej zásielky. Doručenie trvá zvyčajne 2 až 4 pracovné dni.</p>

                <h5 class="mb-3">2. Osobný odber</h5>
                <p>Ak sa nachádzate v blízkosti našej predajne, môžete si objednávku vyzdvihnúť osobne. Tento spôsob doručenia je bezplatný, a to v prípade, že si objednávku vyzdvihnete do 3 dní od jej potvrdenia.</p>

                <h5 class="mb-3">3. Doručenie na výdajné miesto</h5>
                <p>V prípade, že nechcete byť počas doručenia doma, ponúkame možnosť doručenia na výdajné miesto. Zvolte si najbližšie výdajné miesto z našich partnerov a objednávku si vyzdvihnete pohodlne, keď vám to vyhovuje. Doručenie na výdajné miesto trvá 2 až 4 pracovné dni.</p>
            </div>

            <div class="col-12">
                <h4 class="mb-3">Doručenie do zahraničia</h4>
                <p>Sme radi, že môžeme ponúknuť naše produkty aj zákazníkom zo zahraničia. Naši zahraniční zákazníci môžu využiť rôzne možnosti doručenia podľa krajiny, do ktorej je zásielka posielaná.</p>

                <h5 class="mb-3">1. Doručenie do EÚ</h5>
                <p>Pre krajiny EÚ ponúkame doručenie cez spolehlivé kuriérske služby. Čas doručenia sa líši podľa krajiny, ale spravidla sa pohybuje od 4 do 7 pracovných dní. Ceny za doručenie závisia od hmotnosti objednávky a konkrétnej krajiny.</p>

                <h5 class="mb-3">2. Doručenie mimo EÚ</h5>
                <p>V prípade doručenia mimo EÚ sa časy doručenia môžu predĺžiť v závislosti od miestnych colných predpisov a možností doručovania. Zvyčajne to trvá 7 až 14 pracovných dní. Náklady na dopravu do zahraničia sa líšia a sú vypočítané podľa hmotnosti a krajiny doručenia.</p>
            </div>

            <div class="col-12">
                <h4 class="mb-3">Ceny za doručenie</h4>
                <p>Cena za dopravu sa líši v závislosti od vybraného spôsobu doručenia a hmotnosti vašej objednávky. Ceny za doručenie budú zobrazené pri potvrdení objednávky, pred jej zaplatením. Pre zákazníkov na Slovensku je doručenie pri objednávkach nad 50 € zdarma.</p>
            </div>

            <div class="col-12">
                <h4 class="mb-3">Reklamácie a vrátenie tovaru</h4>
                <p>Ak máte akékoľvek problémy s doručením alebo poškodeným tovarom, kontaktujte nás na našom e-maile alebo telefonicky a radi vám pomôžeme s reklamáciou alebo vrátením tovaru.</p>
            </div>
        </div>
    </main>

    <footer>
        @include('components.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
