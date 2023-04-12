@extends('layouts_user.app')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Kategori</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            @foreach ($category as $c)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a
                                                href="{{ route('page.product', $c->id) }}">{{ $c->name }}</a></h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--/category-products-->
                    </div>
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Produk</h2>
                        @foreach ($product as $p)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ url('images/' . $p->image) }}" alt="" />
                                            <h2>Rp{{ number_format($p->price, 0, '.', '.') }}</h2>
                                            <p>{{ $p->name }}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Beli</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>Rp{{ number_format($p->price, 0, '.', '.') }}</h2>
                                                <p>{{ $p->name }}</p>
                                                <a href="{{ route('page.product_detail',$p->id_products) }}" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--features_items-->
                    {{-- <div class="recommended_items">
                    <!--recommended_items-->
                    <h2 class="title text-center">Produk Terbaru</h2>
                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($crousel as $c)
                                <div class="item @if ($loop->first) active @endif">
                                    @foreach ($product_news as $p)
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="{{ asset('assets/user/images/home/recommend1.jpg') }}"
                                                            alt="" />
                                                        <h2>Rp{{ number_format($p->price, 0, '.', '.') }}</h2>
                                                        <p>{{ $p->name }}</p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel"
                            data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div> --}}
                    <!--/recommended_items-->
                </div>
            </div>
        </div>
    </section>
@endsection
