<nav class="navbar navbar-bar navbar-expand-md p-1" style="background-color: #E2CBCB;">
    <div class="container-fluid">

        <button style="max-height: 25px;" class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <ul class="navbar-nav w-75 justify-content-between">

                {{-- PRSTENE --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle custom_playfair_bold m-0 p-0" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        PRSTENE
                    </a>
                    <ul class="dropdown-menu custom-dropdown" style="background-color: #E2CBCB;">
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 1]) }}">Jednoduché</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 2]) }}">Vrstviteľné</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 3]) }}">Obrúčky</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 4]) }}">S kamienkom</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['category_id' => 1]) }}">Všetky</a></li>
                    </ul>
                </li>

                {{-- NÁUŠNICE --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle custom_playfair_bold m-0 p-0" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        NÁUŠNICE
                    </a>
                    <ul class="dropdown-menu custom-dropdown" style="background-color: #E2CBCB;">
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 5]) }}">Puzetkové</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 6]) }}">Kruhové</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 7]) }}">Perlové</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 8]) }}">Visiace</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['category_id' => 2]) }}">Všetky</a></li>
                    </ul>
                </li>

                {{-- NÁHRDELNÍKY --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle custom_playfair_bold m-0 p-0" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        NÁHRDELNÍKY
                    </a>
                    <ul class="dropdown-menu custom-dropdown" style="background-color: #E2CBCB;">
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 9]) }}">Retiazkové</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 10]) }}">S príveskom</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 11]) }}">Perlové</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 12]) }}">Chokers</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['category_id' => 3]) }}">Všetky</a></li>
                    </ul>
                </li>

                {{-- NÁRAMKY --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle custom_playfair_bold m-0 p-0" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        NÁRAMKY
                    </a>
                    <ul class="dropdown-menu custom-dropdown" style="background-color: #E2CBCB;">
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 13]) }}">Pevné</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 14]) }}">Retiazkové</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 15]) }}">Kamienkové</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['category_id' => 4]) }}">Všetky</a></li>
                    </ul>
                </li>

                {{-- KOLEKCIE --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle custom_playfair_bold m-0 p-0" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        KOLEKCIE
                    </a>
                    <ul class="dropdown-menu custom-dropdown" style="background-color: #E2CBCB;">
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 16]) }}">Lady of elegance</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 17]) }}">Tiara</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['subcategory_id' => 18]) }}">Signature of nature</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index', ['category_id' => 5]) }}">Všetky</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
