@extends('layouts_user.app')
@section('title','Produk')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
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
                    <div class="product-details">
                        <!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{ asset('images/' . $product->image) }}" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <!--/product-information-->
                                <img src="{{ asset('assets/user/images/product-details/new.jpg') }}" class="newarrival"
                                    alt="" />
                                <h2>{{$product->name}}</h2>
                                <p>Produk ID: {{$product->id_products}}</p>
                                <img src="{{ asset('assets/user/images/product-details/rating.png') }}" alt="" />
                                <span>
                                    <span>RP {{number_format($product->price, 0, '.', '.')}}</span>
                                    <a href="{{url('/cart-add/' . $product->id_products)}}" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Beli
                                    </a>
                                </span>
                                <p><b>Persediaan:</b> {{$product->stock}} stok</p>
                                <p><b>Kondisi:</b> New</p>
                                <p><b>Kategori:</b> {{$product->categories->name}}</p>
                                <a href=""><img src="{{ asset('assets/user/images/product-details/share.png') }}"
                                        class="share img-responsive" alt="" /></a>
                            </div>
                            <!--/product-information-->
                        </div>
                    </div>
                    <!--/product-details-->

                    <div class="category-tab shop-details-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#reviews" data-toggle="tab">Deskripsi Produk</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i>{{$product->users->first_name}} {{$product->users->last_name}}</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i><i class="fa fa-calendar-o"></i>{{$product->created_at}}</a></li>
                                    </ul>
                                    <p>{{$product->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/category-tab-->
                </div>
            </div>
        </div>
    </section>
@endsection
