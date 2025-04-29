<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />
    <link rel="icon" type="image/png" href="{{ asset('image/logo.png') }}">
    <title>Obchodné podmienky</title>
</head>

<body>
    <header>
        @include('components.header')
    </header>

    <main class="container mt-5 px-md-5 px-lg-6" style="padding-top: 86px;">
        <div class="row">
            <h2 class="text-center mb-4">Obchodné podmienky</h2>
            <div class="col-12">
                <h4 class="mb-3">1. Úvodné ustanovenia</h4>
                <p>Vitajte na našej stránke! Tieto obchodné podmienky sa vzťahujú na používanie našich služieb a nákup produktov na našich stránkach. Pred použitím našich služieb, prosím, prečítajte si tieto podmienky. Ak máte akékoľvek otázky týkajúce sa podmienok alebo potrebujete objasnenie, neváhajte nás kontaktovať.</p>

                <h4 class="mb-3">2. Práva a povinnosti užívateľov</h4>
                <p>Každý používateľ, ktorý sa rozhodne využívať naše služby, je povinný dodržiavať všetky podmienky stanovené v tomto dokumente. Je povinný poskytnúť pravdivé a úplné informácie pri registrácii a nákupe. Používatelia sa zaväzujú nevyužívať služby na nezákonné účely a rešpektovať práva iných používateľov.</p>

                <h4 class="mb-3">3. Platby a fakturácia</h4>
                <p>Platby za produkty sa vykonávajú cez zabezpečené platobné brány. Po prijatí objednávky vám bude zaslaná faktúra na zadaný e-mail. V prípade neúspešnej platby bude objednávka zrušená. Pred dokončením nákupu si, prosím, overte, či sú všetky informácie správne, vrátane fakturačných údajov.</p>

                <h4 class="mb-3">4. Záruka a vrátenie tovaru</h4>
                <p>Na produkty sa vzťahuje zákonná záruka. V prípade nespokojnosti máte právo na vrátenie tovaru do 14 dní od doručenia, ak produkt nebol použitý a je v pôvodnom stave. Náklady na vrátenie tovaru hradí zákazník. Záruka sa nevzťahuje na produkty, ktoré boli poškodené nesprávnym používaním alebo neautorizovanými zásahmi.</p>

                <h4 class="mb-3">5. Zodpovednosť</h4>
                <p>Spoločnosť nezodpovedá za žiadne škody vzniknuté nelegálnym použitím našich produktov alebo služieb. Zodpovedáme len za škody spôsobené našim zavinením alebo hrubou nedbanlivosťou. V prípade, že sa vyskytnú problémy s produktom, kontaktujte nás ihneď, aby sme mohli vyriešiť problém v čo najkratšom čase.</p>

                <h4 class="mb-3">6. Ochrana osobných údajov</h4>
                <p>Vaše osobné údaje spracovávame v súlade s platnou legislatívou o ochrane osobných údajov. Osobné údaje sú použité iba na účely spracovania objednávok a poskytovania našich služieb. Viac informácií o ochrane osobných údajov nájdete v našich zásadách ochrany osobných údajov.</p>

                <h4 class="mb-3">7. Zmeny obchodných podmienok</h4>
                <p>Spoločnosť si vyhradzuje právo na zmenu týchto obchodných podmienok. Ak dôjde k zmenám, budú aktualizované na tejto stránke. Odporúčame, aby ste si pravidelne prehliadali obchodné podmienky, aby ste mali prehľad o akýchkoľvek zmenách.</p>
            </div>
        </div>
    </main>

    <footer>
        @include('components.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
