<div class="container text-center mt-5 mb-5">
    <h2 class="mb-5">POPULÁRNE</h2>

    <div class="carousel-container">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($carouselProducts->chunk(3) as $chunkIndex => $productsChunk)
                    <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                        <div class="d-flex justify-content-center gap-4">
                            @foreach($productsChunk as $product)
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
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="carousel-indicators">
                @foreach($randomProducts->chunk(3) as $chunkIndex => $productsChunk)
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="{{ $chunkIndex }}" class="{{ $chunkIndex == 0 ? 'active' : '' }}"></button>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" style="left: -60px;">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next" style="right: -60px;">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>
