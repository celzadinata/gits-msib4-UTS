@extends('layouts_user.app')
@section('title','Home')
@section('content')
    <section id="slider">
        {{-- Slider --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($product_news as $p)
                                <li data-target="#slider-carousel" data-slide-to="{{ $loop->iteration }}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($product_news as $p)
                                <div class="item @if ($loop->first) active @endif">
                                    <div class="col-sm-6">
                                        <h1>TOKO-<span>KU</span></h1>
                                        <h2>{{ $p->name }}</h2>
                                        <h3 style="color: #CC20B9">Rp{{ number_format($p->price, 0, '.', '.') }}</h3>
                                        <p>{{ $p->description }}</p>
                                        <button type="button" class="btn btn-default get">Beli Sekarang</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{ url('images/' . $p->image) }}" class="girl img-responsive"
                                            alt="" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Slider --}}
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
                                            <p>{{ $p->categories->name }}</p>
                                            <a href="{{ route('page.product_detail',$p->id_products) }}" class="btn btn-default add-to-cart"><i
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
                </div>
            </div>
        </div>
    </section>
@endsection
