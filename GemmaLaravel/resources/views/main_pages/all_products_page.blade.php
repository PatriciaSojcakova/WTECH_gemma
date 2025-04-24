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


        <form method="GET" action="{{ route('products.index') }}">
            <div id="filterCollapse" class="collapse mt-2">
                <div class="filter-container">
                    <div class="row justify-content-center">

                        <!-- Materiál -->
                        <div class="col-md-3 d-flex flex-column align-items-start">
                            <p class="custom_playfair_bold mt-3 mb-1">MATERIÁL</p>
                            @foreach(['zlato', 'striebro', 'titanium'] as $material)
                                <div class="filter-form-check">
                                    <input class="form-check-input" type="checkbox" name="material[]" value="{{ $material }}"
                                        {{ in_array($material, request()->input('material', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label custom_playfair_semi">{{ $material }}</label>
                                </div>
                            @endforeach
                        </div>

                        <!-- Farba kameňa -->
                        <div class="col-md-3 d-flex flex-column align-items-start">
                            <p class="custom_playfair_bold mt-3 mb-1">FARBA KAMEŇA</p>
                            @foreach(['diamant', 'rubín', 'zafír', 'perla'] as $color)
                                <div class="filter-form-check">
                                    <input class="form-check-input" type="checkbox" name="stone_color[]" value="{{ $color }}"
                                        {{ in_array($color, request()->input('stone_color', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label custom_playfair_semi">{{ $color }}</label>
                                </div>
                            @endforeach
                        </div>

                        <!-- Určenie -->
                        <div class="col-md-3 d-flex flex-column align-items-start">
                            <p class="custom_playfair_bold mt-3 mb-1">URČENIE</p>
                            @foreach(['ženy', 'muži', 'unisex'] as $purpose)
                                <div class="filter-form-check">
                                    <input class="form-check-input" type="checkbox" name="purpose[]" value="{{ $purpose }}"
                                        {{ in_array($purpose, request()->input('purpose', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label custom_playfair_semi">{{ $purpose }}</label>
                                </div>
                            @endforeach
                        </div>

                        <!-- Cena -->
                        <div class="col-md-3 d-flex flex-column align-items-start">
                            <p class="custom_playfair_bold mt-3 mb-1">CENA</p>
                            <label class="custom_playfair_semi">Vyberte cenový rozsah</label>

                            <input type="range" class="form-range" name="min_price" id="minPrice" min="0" max="5000" step="10" value="{{ request('min_price', 0) }}">
                            <input type="range" class="form-range" name="max_price" id="maxPrice" min="0" max="5000" step="10" value="{{ request('max_price', 5000) }}">

                            <div class="d-flex justify-content-between">
                                <span id="minPriceValue">{{ request('min_price', 0) }}€</span>
                                <span>-</span>
                                <span id="maxPriceValue">{{ request('max_price', 5000) }}€</span>
                            </div>
                        </div>

                    </div>

                    <!-- Tlačidlo na filtrovanie -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-secondary bg-black w-25">Filtruj</button>
                    </div>

                    <!-- Skryté inputy na zachovanie kategórie / subkategórie -->
                    @if(request()->has('category_id'))
                        <input type="hidden" name="category_id" value="{{ request('category_id') }}">
                    @endif

                    @if(request()->has('subcategory_id'))
                        <input type="hidden" name="subcategory_id" value="{{ request('subcategory_id') }}">
                    @endif
                </div>
            </div>
        </form>
    </div>


    <form method="GET" id="sortForm" action="{{ route('products.index') }}">
        <div class="d-flex justify-content-end mb-4 me-3 mt-1">
            <select id="sortPrice" name="sort" class="form-select w-25 focus-ring focus-ring-dark" onchange="document.getElementById('sortForm').submit()">
                <option value="">Zoradiť podľa ceny</option>
                <option value="asc" {{ request('sort') === 'asc' ? 'selected' : '' }}>Cena: vzostupne</option>
                <option value="desc" {{ request('sort') === 'desc' ? 'selected' : '' }}>Cena: zostupne</option>
            </select>
        </div>

        @foreach(request()->except('sort', 'page') as $key => $value)
            @if(is_array($value))
                @foreach($value as $v)
                    <input type="hidden" name="{{ $key }}[]" value="{{ $v }}">
                @endforeach
            @else
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endif
        @endforeach
    </form>


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

    minPrice.addEventListener('input', function() {
        minPriceValue.textContent = minPrice.value + '€';
        if (parseInt(minPrice.value) > parseInt(maxPrice.value)) {
            maxPrice.value = minPrice.value;
            maxPriceValue.textContent = minPrice.value + '€';
        }
    });

    maxPrice.addEventListener('input', function() {
        maxPriceValue.textContent = maxPrice.value + '€';
        if (parseInt(maxPrice.value) < parseInt(minPrice.value)) {
            minPrice.value = maxPrice.value;
            minPriceValue.textContent = maxPrice.value + '€';
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
