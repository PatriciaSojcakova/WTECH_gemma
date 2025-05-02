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
    <title>Admin</title>
</head>
<body>
<header>
    @include('components.header')
</header>


<main class="container" style="padding-top: 86px;padding-bottom: 100px;">
    <h2 class="text-center mb-5 mt-5">Administrátorský Panel</h2>

    <div class="row mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header custom-card-header-bg text-black">
                    <h5 class="mb-0">Zoznam produktov</h5>
                </div>
                <div class="card-body" style="max-height: 300px; overflow-y: auto;">
                    <table class="table table-striped table-bordered mb-0">
                        <thead class="table-dark text-center">
                        <tr>
                            <th>ID</th>
                            <th>Názov</th>
                            <th>Popis</th>
                            <th>Materiál</th>
                            <th>Farba kameňa</th>
                            <th>Určenie</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td class="text-center">{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->material }}</td>
                                <td>{{ $product->stone_color }}</td>
                                <td>{{ $product->purpose }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Žiadne produkty neboli nájdené.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card mt-4">
                <div class="card-header custom-card-header-bg text-black">
                    <h5>Pridať nový produkt</h5>
                </div>
                <div class="card-body">

                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="productName" class="form-label">Názov produktu</label>
                            <input type="text" class="form-control" id="productName" name="name" placeholder="Zadajte názov produktu" required>
                        </div>

                        <div class="mb-3">
                            <label for="productDescription" class="form-label">Popis produktu</label>
                            <textarea class="form-control" id="productDescription" name="description" placeholder="Zadajte popis produktu" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="material" class="form-label">Materiál</label>
                            <select name="material" id="material" class="form-select">
                                <option value="">-- Vyber materiál --</option>
                                <option value="zlato" {{ old('material') == 'zlato' ? 'selected' : '' }}>Zlato</option>
                                <option value="striebro" {{ old('material') == 'striebro' ? 'selected' : '' }}>Striebro</option>
                                <option value="titanium" {{ old('material') == 'titanium' ? 'selected' : '' }}>Titanium</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="stone_color" class="form-label">Farba kameňa</label>
                            <select name="stone_color" id="stone_color" class="form-select">
                                <option value="">-- Vyber farbu kameňa --</option>
                                <option value="diamant" {{ old('stone_color') == 'diamant' ? 'selected' : '' }}>Diamant</option>
                                <option value="rubín" {{ old('stone_color') == 'rubin' ? 'selected' : '' }}>Rubín</option>
                                <option value="zafír" {{ old('stone_color') == 'zafir' ? 'selected' : '' }}>Zafír</option>
                                <option value="perla" {{ old('stone_color') == 'perla' ? 'selected' : '' }}>Perla</option>
                                <option value=" " {{ old('stone_color') == 'bez_kamena' ? 'selected' : '' }}>Bez kameňa</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="purpose" class="form-label">Určenie</label>
                            <select name="purpose" id="purpose" class="form-select">
                                <option value="">-- Vyber určenie --</option>
                                <option value="muži" {{ old('purpose') == 'muži' ? 'selected' : '' }}>Muži</option>
                                <option value="ženy" {{ old('purpose') == 'ženy' ? 'selected' : '' }}>Ženy</option>
                                <option value="unisex" {{ old('purpose') == 'unisex' ? 'selected' : '' }}>Unisex</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">Množstvo</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" min="0" value="{{ old('quantity') }}">
                        </div>

                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Cena</label>
                            <input type="number" step="0.01" class="form-control" id="productPrice" name="price" placeholder="Zadajte cenu" required>
                        </div>

                        <div class="mb-3">
                            <label for="productImage" class="form-label">Obrázok produktu</label>
                            <input type="file" class="form-control" id="productImage" name="image" required>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Kategória</label>
                            <select class="form-select" id="category" name="category_id" required>
                                <option value="">Vyber kategóriu</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="subcategory" class="form-label">Podkategória</label>
                            <select class="form-select" id="subcategory" name="subcategory_id" required>
                                <option value="">Vyber podkategóriu</option>
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}" data-category="{{ $subcategory->category_id }}">
                                        {{ $subcategory->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-dark w-100">Pridať produkt</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-4">
                <div class="card-header custom-card-header-bg text-black">
                    <h5>Upraviť produkt</h5>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form method="POST" action="{{ route('admin.product.show') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Zadajte ID produktu</label>
                            <input type="text" id="productId" class="form-control" name="id" value="{{ old('id') }}" required>
                        </div>

                        <button type="submit" class="btn btn-dark w-100">Zobraziť produkt</button>
                    </form>

                    @isset($info_product)
                        <form method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Kód produktu</label>
                                <input type="text" class="form-control" name="product_code" value="{{ old('product_code', $info_product->id) }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Názov produktu</label>
                                <input type="text" class="form-control" name="product_name" value="{{ old('product_name', $info_product->name) }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Popis produktu</label>
                                <textarea class="form-control" name="product_description">{{ old('product_description', $info_product->description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Cena</label>
                                <input type="number" step="0.01" class="form-control" name="product_price" value="{{ old('product_price', $info_product->price) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Obrázky produktu</label>
                                <div class="d-flex flex-wrap gap-2">
                                    @if($info_product->image && $info_product->image->count())
                                        @foreach($info_product->image as $image)
                                            <div class="text-center">
                                                <img src="{{ asset('image/' . $image->path) }}" style="width: 80px; height: 80px;" class="img-thumbnail mb-2">
                                                <br>
                                                <input type="checkbox" name="delete_images[]" value="{{ $image->id }}"> Vymazať
                                            </div>
                                        @endforeach
                                    @else
                                        <p>Žiadne obrázky</p>
                                    @endif
                                </div>
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Pridať nové obrázky</label>
                                <input type="file" class="form-control" name="new_images[]" multiple accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-dark w-100">Upraviť produkt</button>
                        </form>
                    @else
                        <p>Produkt s týmto ID neexistuje.</p>
                    @endisset
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card mt-4">
                <div class="card-header custom-card-header-bg text-black">
                    <h5>Odstrániť produkt</h5>
                </div>
                <div class="card-body">
                    @if(session('delete_success'))
                        <div class="alert alert-success">{{ session('delete_success') }}</div>
                    @elseif(session('delete_error'))
                        <div class="alert alert-danger">{{ session('delete_error') }}</div>
                    @endif

                    <form method="POST" action="{{ route('admin.deleteProduct') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="deleteProductId" class="form-label">ID produktu na odstránenie</label>
                            <input type="number" name="product_id" class="form-control" id="deleteProductId" placeholder="Zadajte ID produktu" required>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Odstrániť produkt</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>


<footer>
    @include('components.footer')
</footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categorySelect = document.getElementById('category');
        const subcategorySelect = document.getElementById('subcategory');
        const subcategoryOptions = subcategorySelect.querySelectorAll('option');

        function filterSubcategories(categoryId) {
            subcategoryOptions.forEach(option => {
                const optionCategory = option.getAttribute('data-category');

                if (!optionCategory || option.value === "") {
                    option.hidden = false;
                    option.disabled = false;
                } else if (optionCategory === categoryId) {
                    option.hidden = false;
                    option.disabled = false;
                } else {
                    option.hidden = true;
                    option.disabled = true;
                }
            });

            subcategorySelect.value = "";
        }

        categorySelect.addEventListener('change', function () {
            filterSubcategories(this.value);
        });

        if (categorySelect.value) {
            filterSubcategories(categorySelect.value);
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
