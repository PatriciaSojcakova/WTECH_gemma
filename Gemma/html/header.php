<nav class="navbar bg-#F6F7F9 custom-navbar fixed-top" >
    <div class="container-fluid">
        <div class="row w-100 d-flex align-items-center">

            <div class="col text-center">
                <a class="navbar-brand custom_italiana fs-1 fs-md-2 fs-lg-3" href="main_desktop.php">Gemma</a>
            </div>

            <div class="col text-center d-none d-md-block">
                <div class="input-group mx-auto position-relative" style="max-width: 400px;">
                    <input type="text" class="form-control custom-form-control rounded-pill ps-4" placeholder="Hľadať..."
                           style="padding-right: 50px; background-color: rgba(226, 203, 203, 0.7);">

                    <button class="btn position-absolute end-0 top-50 translate-middle-y me-3 p-0 border-0 bg-transparent"
                            style="z-index: 10; width: 40px; height: 40px;">
                        <span class="material-symbols-outlined custom-search-icon" style="font-size: 24px; transform: translateY(2px);">search</span>
                    </button>
                </div>
            </div>

            <div class="col text-end d-flex justify-content-center gap-3 gap-sm-4 gap-md-4">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" id="loginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="material-icons" style="color: #000000;">account_circle</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="loginDropdown">
                        <li><a class="dropdown-item" href="login_registr.php">Prihlásiť sa</a></li>
                        <li><a class="dropdown-item" href="osobny_ucet.php">Osobný účet</a></li>
                        <li><a class="dropdown-item" href="admin.php">Admin</a></li>
                    </ul>
                </div>
                <span class="material-icons" style="color: #000000;">favorite</span>
                <span class="material-icons" style="color: #000000;">shopping_cart</span>
            </div>

        </div>
    </div>
</nav>
