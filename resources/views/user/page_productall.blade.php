@extends('layouts_user.app')
@section('title','Produk')
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
                                                href="{{ route('page.product_category', $c->id) }}">{{ $c->name }}</a></h4>
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
                        <h2 class="title text-center">Semua Produk</h2>
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
                </div>
            </div>
        </div>
    </section>
@endsection
