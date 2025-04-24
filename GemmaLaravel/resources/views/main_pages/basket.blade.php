<!doctype html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search"/>
    <title>Nákupný košík</title>
</head>
<body class="basket-page">
<header>
    @include('components.header')
</header>

@include('components.navbar')

<main class="container" style="padding-top: 86px;">
    <h2 class="text-center mb-5 mt-5">NÁKUPNÝ KOŠÍK</h2>

    @if($cartItems->isEmpty())
        <div class="alert alert-info text-center">Košík je prázdny.</div>
    @else
        <div class="row title-bar fw-bold border-bottom border-black pb-2 d-none d-md-flex justify-content-between custom-basket-fav-font" style="background: #F6F7F9">
            <div class="col-md-3 text-center mt-2">Detail produktu</div>
            <div class="col-md-3 text-center mt-2">Názov & Parametre</div>
            <div class="col-md-3 text-center mt-2">Počet kusov</div>
            <div class="col-md-2 text-center mt-2">Cena</div>
            <div class="col-md-1 text-center mt-2">Odstrániť</div>
        </div>

        @foreach($cartItems as $item)
            <div class="row align-items-center py-3 border-bottom">
                <div class="col-md-3 text-center">
                    <div class="product-container">
                        <a href="#" class="text-decoration-none text-reset d-block">
                            <img src="{{ $item->product->image ?? asset('images/default.png') }}" class="product-image" alt="Obrázok produktu">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 mt-3 d-flex flex-column justify-content-center text-start" style="padding-left: 6rem;">
                    <p>
                        <strong>Názov</strong><br>
                        {{ $item->product->name ?? $item->name }}<br><br>
                        <strong>Parametre:</strong><br>
                        Materiál: {{ $item->product->material ?? 'nezadané' }}<br>
                        Farba kameňa: {{ $item->product->stone_color ?? '-' }}<br>
                        Určenie: {{ $item->product->gender ?? 'unisex' }}
                    </p>
                </div>

                <div class="col-md-3 text-center">
                    <form method="POST" action="{{ route('cart.update', $item->id) }}">
                        @csrf
                        @method('PATCH')
                        <input type="number"
                               name="quantity"
                               class="form-control text-center w-50 mx-auto"
                               value="{{ $item->quantity }}"
                               min="1" max="10"
                               onchange="this.form.submit()">
                    </form>
                </div>

                <div class="col-md-2 text-center">
                    <span class="fw-bold">
                        {{ number_format(($item->product->price ?? $item->price) * $item->quantity, 2, ',', ' ') }} €
                    </span>
                </div>

                <div class="col-md-1 text-center">
                    <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-black btn-sm delete-item" onclick="return confirm('Odstrániť tento produkt?')">
                            <i class="material-icons">delete</i>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach

        <div class="text-center mt-5 mb-5">
            <a href="{{ url('/order_submit') }}">
                <button class="btn btn-dark w-20 mb-4">Dokončiť nákup</button>
            </a>
        </div>
    @endif
</main>

<footer>
    @include('components.footer')
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
