<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search"/>
    <title>Prehľad</title>
</head>
<body class="product-page">
<header>
    @include('components.header')
</header>

@include('components.navbar')

<main class="container" style="padding-top: 90px;">

    <div class="container">
        <!-- Tlačidlo na otvorenie/zatvorenie filtrov -->
        <button class="filter-btn custom_playfair_bold" data-bs-toggle="collapse" data-bs-target="#filterCollapse" aria-expanded="false">
            FILTRE
        </button>


        <!-- Filter sekcia -->
        <div id="filterCollapse" class="collapse mt-2">
            <div class="filter-container">
                <div class="row justify-content-center">
                    <!-- Materiál -->
                    <div class="col-md-3 d-flex flex-column align-items-start">
                        <p class="custom_playfair_bold mt-3 mb-1">MATERIÁL</p>
                        <div class="filter-form-check">
                            <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="material1" name="material">
                            <label class="form-check-label custom_playfair_semi" for="material1">zlato</label>
                        </div>
                        <div class="filter-form-check ">
                            <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="material3" name="material">
                            <label class="form-check-label custom_playfair_semi" for="material3">striebro</label>
                        </div>
                        <div class="filter-form-check ">
                            <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="material4" name="material">
                            <label class="form-check-label custom_playfair_semi" for="material4">titanium</label>
                        </div>
                    </div>

                    <!-- Farba -->
                    <div class="col-md-3 d-flex flex-column align-items-start">
                        <p class="custom_playfair_bold mt-3 mb-1">FARBA KAMEŇA</p>
                        <div class="filter-form-check">
                            <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="farba1" name="farba">
                            <label class="form-check-label custom_playfair_semi" for="farba1">diamant</label>
                        </div>
                        <div class="filter-form-check">
                            <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="farba2" name="farba">
                            <label class="form-check-label custom_playfair_semi" for="farba2">rubín</label>
                        </div>
                        <div class="filter-form-check">
                            <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="farba3" name="farba">
                            <label class="form-check-label custom_playfair_semi" for="farba3">zafír</label>
                        </div>
                        <div class="filter-form-check">
                            <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="farba6" name="farba">
                            <label class="form-check-label custom_playfair_semi" for="farba6">perla</label>
                        </div>

                    </div>

                    <!-- Určenie -->
                    <div class="col-md-3 d-flex flex-column align-items-start">
                        <p class="custom_playfair_bold mt-3 mb-1">URČENIE</p>
                        <div class="filter-form-check">
                            <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="urcenie1" name="urcenie">
                            <label class="form-check-label custom_playfair_semi" for="urcenie1">ženy</label>
                        </div>
                        <div class="filter-form-check">
                            <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="urcenie2" name="urcenie">
                            <label class="form-check-label custom_playfair_semi" for="urcenie2">muži</label>
                        </div>
                        <div class="filter-form-check">
                            <input class="form-check-input focus-ring focus-ring-dark" type="checkbox" id="urcenie4" name="urcenie">
                            <label class="form-check-label custom_playfair_semi" for="urcenie4">unisex</label>
                        </div>
                    </div>

                    <!-- Cena -->
                    <div class="col-md-3 d-flex flex-column align-items-start">
                        <p class="custom_playfair_bold mt-3 mb-1">CENA</p>
                        <label for="priceRange" class="custom_playfair_semi">Vyberte cenový rozsah</label>

                        <!-- Slider pre cenu s dvoma posuvníkmi -->
                        <input type="range" class="form-range" id="minPrice" min="0" max="5000" step="10" value="0">
                        <input type="range" class="form-range" id="maxPrice" min="0" max="5000" step="10" value="5000">

                        <!-- Zobrazenie zvoleného rozsahu -->
                        <div class="d-flex justify-content-between">
                            <span id="minPriceValue">0€</span>
                            <span>-</span>
                            <span id="maxPriceValue">5000€</span>
                        </div>
                    </div>
                </div>

                    <!-- Tlačidlo na filtrovanie -->
                <div class="text-center mt-4">
                    <button class="btn btn-secondary bg-black w-25">Filtruj</button>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex justify-content-end mb-4 me-3 mt-1">
        <select id="sortPrice" class="form-select w-25 focus-ring focus-ring-dark">
            <option value="asc">Cena: vzostupne</option>
            <option value="desc">Cena: zostupne</option>
        </select>
    </div>

    <div class="custom-container mt-5 mb-5">

        <div class="row d-flex flex-wrap justify-content-center g-0">

            @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                    <div class="product-container">
                        <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none text-reset d-block">
                            @php
                                $firstImage = $product->image->first();
                            @endphp
                            @if ($firstImage)
                            <img src="{{ asset('image/' . $firstImage->path) }}" class="product-image" alt="{{ $product->name }}">
                            @else
                                <img src="{{ asset('image/default-image.png') }}" class="product-image" alt="{{ $product->name }}">  <!-- Default obrázok -->
                            @endif
                            <p class="product-name">{{ $product->name }}</p>
                        </a>
                        <input type="checkbox" id="favorite-prod1" class="favorite-checkbox">
                        <label for="single-prod{{ $product->id }}" class="favorite-icon material-icons">favorite</label>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>

    <style>
        .d-none.flex-sm-fill.d-sm-flex.align-items-sm-center.justify-content-sm-between p.small.text-muted {
            display: none !important;
        }
    </style>

</main>

<footer>
    @include('components.footer')
</footer>

<script>
    const minPrice = document.getElementById('minPrice');
    const maxPrice = document.getElementById('maxPrice');
    const minPriceValue = document.getElementById('minPriceValue');
    const maxPriceValue = document.getElementById('maxPriceValue');

    // Aktualizovanie hodnôt pri zmene posuvníkov
    minPrice.addEventListener('input', function() {
        // Upravíme hodnotu zobrazenia minimálnej ceny
        minPriceValue.textContent = minPrice.value + '€';
        // Ak je minimálna cena vyššia než maximálna, nastavíme maximálnu cenu na rovnakú hodnotu
        if (parseInt(minPrice.value) > parseInt(maxPrice.value)) {
            maxPrice.value = minPrice.value;
            maxPriceValue.textContent = minPrice.value + '€';
        }
    });

    maxPrice.addEventListener('input', function() {
        // Upravíme hodnotu zobrazenia maximálnej ceny
        maxPriceValue.textContent = maxPrice.value + '€';
        // Ak je maximálna cena menšia než minimálna, nastavíme minimálnu cenu na rovnakú hodnotu
        if (parseInt(maxPrice.value) < parseInt(minPrice.value)) {
            minPrice.value = maxPrice.value;
            minPriceValue.textContent = maxPrice.value + '€';
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
