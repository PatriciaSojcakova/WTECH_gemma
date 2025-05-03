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
    <title>Detail produktu</title>
</head>

<body class="one_product">
    <header>
        @include('components.header')
    </header>

    @include('components.navbar')

    <main class="container" style="padding-top: 86px;">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-5">
                    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($images as $index => $image)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <div class="product-container-single">
                                        <a href="one_product.php" class="text-decoration-none text-reset d-block">
                                            <img src="{{ asset('image/' . $image->path) }}" class="product-image-single" alt="Obrázok produktu">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Predchádzajúci</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Ďalší</span>
                        </button>
                    </div>
                </div>

                <div class="col-md-7 mb-5">
                    <h2 class="fw-bold mb-3">{{ $product->name }}</h2>
                    <p class="text-muted">{{ $product->description }}</p>

                    <h5 class="fw-bold mt-3">Špecifikácie</h5>
                    <p class="mb-1">
                        <strong>Materiál:</strong> {{ $product->material }}<br>
                        <strong>Farba kameňa:</strong> {{ $product->stone_color }} <br>
                        <strong>Určenie:</strong> {{ $product->purpose }}
                    </p>

                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="mb-0"><strong>Skladom:</strong>
                            <span>
                                <i class="material-icons text-black">check</i>
                            </span>
                        </p>
                        <h4 class="fw-bold mb-0">Cena: <span class="text-dark">{{ $product->price }} €</span></h4>
                    </div>

                    <div class="d-flex justify-content-end align-items-center mt-3">
                        <form action="{{ route('cart.add') }}" method="POST" class="d-flex align-items-center">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="number" class="form-control text-center me-2" style="width: 80px;" name="quantity" value="1" min="1">
                            <button type="submit" class="btn btn-dark">Pridať do košíka</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-container mt-5 mb-5">
            <h2 class="fw-bold mb-5">Mohlo by sa Vám páčiť ...</h2>

            <div class="row d-flex flex-wrap justify-content-center g-0">
                @foreach($moreProducts as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mt-2 mb-5 text-center">
                        <div class="product-container">
                            <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none text-reset d-block">
                                @php
                                    $firstImage = $product->image->first();
                                @endphp
                                @if ($firstImage)
                                    <img src="{{ asset('image/' . $firstImage->path) }}" class="product-image" alt="{{ $product->name }}">
                                @else
                                    <img src="{{ asset('image/default-image.png') }}" class="product-image" alt="{{ $product->name }}">
                                @endif
                                <p class="product-name">{{ $product->name }}</p>
                            </a>
                            <h5>{{ $product->price }}€</h5>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="container-fluid d-flex justify-content-center align-items-center mt-5 mb-5">
                <a href="{{ url('/all_products_page') }}">
                    <button class="btn btn-dark">Pokračovať ďalej ...</button>
                </a>
            </div>
        </div>
    </main>

    <footer>
        @include('components.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
