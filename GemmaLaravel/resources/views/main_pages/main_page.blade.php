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
    <title>GEMMA</title>
</head>

<body class="main-page">
    <header>
        @include('components.header')
    </header>

    <div class="container-fluid" style="padding-top: 86px;">
        <div class="container d-flex justify-content-center align-items-center custom-container">
            <h1 class="custom_italiana_max">GEMMA</h1>
        </div>
    </div>

    @include('components.navbar')


    <main>
        <div class="container-fluid d-flex justify-content-center align-items-center custom-container" style="background: linear-gradient(to bottom, #E2CBCB, #F6F7F9);">
            @include('components.carousel')
        </div>

        <div class="container-fluid d-flex justify-content-center align-items-center custom-container" style="background: #D9D9D9">
            <h1 class="custom_italiana">REKLAMA NA TICHO</h1>
        </div>

        <div class="custom-container mt-5 mb-5">
            <h2 class="text-center mb-5 mt-5">NAŠE TIPY</h2>

            <div class="row d-flex flex-wrap justify-content-center g-0">
                @foreach($randomProducts as $product)
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
                            <h5>{{ $product->price }}€</h5>
                        </div>
                        <!--
                        <input type="checkbox" id="favorite-main{{ $product->id }}" class="favorite-checkbox">
                        <label for="favorite-main{{ $product->id }}" class="favorite-icon material-icons">favorite</label>
                        -->
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container-fluid d-flex justify-content-center align-items-center mt-5 mb-5">
            <a href="{{ url('/all_products_page') }}">
                <button class="btn btn-dark">Pokračovať ďalej ...</button>
            </a>
        </div>
    </main>


    <footer>
        @include('components.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
