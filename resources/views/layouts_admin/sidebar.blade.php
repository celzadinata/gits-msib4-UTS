<div class="sidebar">
    <div class="logo_details">
        <i class='bx bx-code-alt'></i>
        <div class="logo_name">
            Admin
        </div>
    </div>
    <ul>
        <li>
            <a href="{{ route('dashboard.admin') }}" class="nav-link {{ set_active('dashboard.admin') }}">
                <i class='bx bxs-dashboard'></i>
                <span class="links_name">
                    Dashboard
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('category') }}" class="nav-link {{ set_active(['category','category.add','category.edit']) }}" id="category">
                <i class='bx bx-category'></i>
                <span class="links_name">
                    Kategori
                </span>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link" id="product">
                <i class='bx bx-cart-alt'></i>
                <span class="links_name">
                    Produk
                </span>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link" id="transaction">
                <i class='bx bx-book-open'></i>
                <span class="links_name">
                    Transaksi
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard.edit') }}" class="nav-link {{ set_active('dashboard.edit') }}" id="profile">
                <i class='bx bx-user'></i>
                <span class="links_name">
                    Profile
                </span>
            </a>
        </li>
        <li class="login">
            <a href="{{ route('logout') }}">
                <span class="links_name login_out">
                    Logout
                </span>
                <i class='bx bx-log-out' id="log_out"></i>
            </a>
        </li>
    </ul>
</div>
