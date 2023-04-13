<header id="header">
    <!--header-->
    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{ route('page.home') }}"><img src="{{ asset('assets/user/images/home/logo.png') }}"
                                alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @auth
                                <li><a class="{{ set_active('user.index') }}" href="{{ route('user.index') }}"><i
                                            class="fa fa-user"></i> Account</a></li>
                                <li><a class="{{ set_active('user.cart') }}" href="{{ route('user.cart') }}"><i
                                            class="fa fa-shopping-cart"></i> Cart</a></li>
                                @if (Auth::user()->role == 'penjual')
                                    <li><a href="{{ route('dashboard.admin') }}"><i class="fa fa-wrench"></i> Admin CMS</a>
                                    </li>
                                @endif
                                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
                            @endauth
                            @guest
                                <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
                                <li><a href="{{ route('register') }}"><i class="fa fa-users"></i> Register</a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{ route('page.home') }}" class="{{ set_active('page.home') }}">Home</a></li>
                            <li><a href="{{ route('page.product_all') }}"
                                    class="{{ set_active(['page.product_all', 'page.product_category']) }}">Produk</a></li>
                            <li class="dropdown"><a href="#">Kategori<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    @foreach ($category as $c)
                                        <li><a href="{{ route('page.product_category', $c->id) }}">{{ $c->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
