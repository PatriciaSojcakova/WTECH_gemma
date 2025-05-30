<nav class="navbar bg-#F6F7F9 custom-navbar fixed-top" style="height: 86px;">
    <div class="container-fluid">
        <div class="row w-100 d-flex align-items-center">
            <div class="col text-center">
                <a class="navbar-brand custom_italiana fs-1 fs-md-2 fs-lg-3" href="{{ url('/') }}">Gemma</a>
            </div>

            <div class="col text-center d-none d-md-block">
                <form method="GET" action="{{ route('products.index') }}">
                    <div class="input-group mx-auto position-relative" style="max-width: 400px;">
                        <input type="text" name="search" class="form-control custom-form-control rounded-pill ps-4" placeholder="Hľadať..." value="{{ request('search') }}" style="padding-right: 50px; background-color: rgba(226, 203, 203, 0.7);">
                        <button type="submit" class="btn position-absolute end-0 top-50 translate-middle-y me-3 p-0 border-0 bg-transparent" style="z-index: 10; width: 40px; height: 40px;">
                                <span class="material-symbols-outlined custom-search-icon" style="font-size: 24px; transform: translateY(2px);">search</span>
                        </button>
                    </div>

                    @foreach(request()->except('search', 'page') as $key => $value)
                        @if(is_array($value))
                            @foreach($value as $v)
                                <input type="hidden" name="{{ $key }}[]" value="{{ $v }}">
                            @endforeach
                        @else
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                        @endif
                    @endforeach
                </form>
            </div>

            <div class="col text-end d-flex justify-content-center gap-3 gap-sm-4 gap-md-4">
                @guest
                    <a href="{{ url('/login_registration') }}">
                        <span class="material-icons" style="color: #000000;">account_circle</span>
                    </a>
                @else
                    @if((bool) Auth::user()->admin)
                        <a href="{{ route('admin.dashboard') }}">
                            <span class="material-icons" style="color: #000000;">account_circle</span>
                        </a>
                    @else
                        <a href="{{ url('/personal_account') }}">
                            <span class="material-icons" style="color: #000000;">account_circle</span>
                        </a>
                    @endif
                @endguest
                <a href="#">
                    <span class="material-icons" style="color: #000000;">favorite</span>
                </a>

                <a href="{{ route('cart.show') }}">
                    <span class="material-icons" style="color: #000000;">shopping_cart</span>
                </a>
            </div>
        </div>
    </div>
</nav>
