@extends('layouts_user.app')
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
                                <img src="{{ asset('assets/user/images/product-details/1.jpg') }}" alt="" />
                                <h3>ZOOM</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href=""><img
                                                src="{{ asset('assets/user/images/product-details/similar1.jpg') }}"
                                                alt=""></a>
                                        <a href=""><img
                                                src="{{ asset('assets/user/images/product-details/similar2.jpg') }}"
                                                alt=""></a>
                                        <a href=""><img
                                                src="{{ asset('assets/user/images/product-details/similar3.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img
                                                src="{{ asset('assets/user/images/product-details/similar1.jpg') }}"
                                                alt=""></a>
                                        <a href=""><img
                                                src="{{ asset('assets/user/images/product-details/similar2.jpg') }}"
                                                alt=""></a>
                                        <a href=""><img
                                                src="{{ asset('assets/user/images/product-details/similar3.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img
                                                src="{{ asset('') }}assets/user/images/product-details/similar1.jpg"
                                                alt=""></a>
                                        <a href=""><img
                                                src="{{ asset('') }}assets/user/images/product-details/similar2.jpg"
                                                alt=""></a>
                                        <a href=""><img
                                                src="{{ asset('') }}assets/user/images/product-details/similar3.jpg"
                                                alt=""></a>
                                    </div>

                                </div>

                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <!--/product-information-->
                                <img src="{{ asset('assets/user/images/product-details/new.jpg') }}" class="newarrival"
                                    alt="" />
                                <h2>Anne Klein Sleeveless Colorblock Scuba</h2>
                                <p>Web ID: 1089772</p>
                                <img src="{{ asset('assets/user/images/product-details/rating.png') }}" alt="" />
                                <span>
                                    <span>US $59</span>
                                    <label>Quantity:</label>
                                    <input type="text" value="3" />
                                    <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                </span>
                                <p><b>Availability:</b> In Stock</p>
                                <p><b>Condition:</b> New</p>
                                <p><b>Brand:</b> E-SHOPPER</p>
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
                                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure
                                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur.</p>
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