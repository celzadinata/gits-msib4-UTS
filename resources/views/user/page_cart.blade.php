@extends('layouts_user.app')
@section('title', 'Keranjang')
@section('content')
    <form action="{{ route('transaction') }}" method="POST">
        @csrf
        <section id="cart_items">
            <div class="container">
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Produk</td>
                                <td class="description"></td>
                                <td class="price">Harga</td>
                                <td class="quantity">Kuantitas</td>
                                <td class="total" id="tes">Total</td>
                                <td></td>

                            </tr>
                        </thead>
                        <tbody>
                            <div id="count" hidden>{{ count($cart_items) }}</div>
                            @if ($cart_items->toArray() != null)
                                @foreach ($cart_items as $key => $item)
                                    <tr>
                                        <td class="cart_product">
                                            <a href=""><img src="{{ asset('images/' . $item->produk->image) }}"
                                                    alt="{{ $item->produk->image }}"
                                                    style="width: 110px; height: 110px"></a>
                                        </td>
                                        <td class="cart_description">
                                            <h4><a href="">{{ $item->produk->name }}</a></h4>
                                            <p>Web ID: {{ $item->produk->id_products }} <br> Stok:
                                                {{ $item->produk->stock }}</p>
                                        </td>
                                        <td class="cart_price">
                                            <p>Rp {{ number_format($item->produk->price, 2) }}</p>
                                            <p hidden id="{{ 'harga_temp' . $key }}">{{ $item->produk->price }}</p>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                {{-- <b class="cart_quantity_up" onclick="plusQty()" id="{{'plus' . $key}}"> + </b> --}}
                                                <input class="cart_quantity_input" type="text"
                                                    name="{{ 'quantity' . $key }}" value="{{ $item->qty }}"
                                                    autocomplete="off" size="2" id="{{ 'result' . $key }}"
                                                    onblur="onBlur(this.id)">
                                                {{-- <b class="cart_quantity_down" onclick="minQty()" id="{{'minn' . $key}}"> - </b> --}}
                                            </div>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price" id="{{ 'total' . $key }}">Rp
                                                {{ number_format($item->produk->price * $item->qty, 2) }}
                                            </p>
                                        </td>

                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete"
                                                href="{{ url('/cart/remove' . '/' . $item->id) }}"><i
                                                    class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <?php $total = $total + $item->produk->price * $item->qty; ?>
                                    <input type="hidden" class="form-control" name="{{ 'qty' . $key }}"
                                        id="{{ 'qty' . $key }}" value="{{ $item->qty }}">
                                    <input type="hidden" class="form-control" name="{{ 'sub_total' . $key }}"
                                        id="{{ 'sub_total' . $key }}" value="{{ $item->produk->price * $item->qty }}">
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="12">
                                        <div style="text-align: center;">
                                            <i class="fa fa-spinner fa-spin fa-5x fa-fw" aria-hidden="true"></i>
                                            <h2 style="margin-top: 0.25em; color: #CC20B9;">Lah kosong :( </h2>
                                            <p class="text-muted">Ayo belanja produk dulu agar keranjangmu ada isinya</p>

                                        </div>

                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!--/#cart_items-->

        <section id="do_action">
            <div class="container">
                <div class="heading">
                    <h3>Sudah yakin dengan barang belanja mu?</h3>
                    <p>Dengan belanja di Toko-ku, berbelanja jadi makin asyik karena bebas biaya ongkir dan pengiriman yang
                        cepat.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="total_area">
                            <ul>
                                <li>Cart Sub Total <span id="st">Rp {{ number_format($total, 2) }}</span></li>
                                <li>Biaya pengiriman <span>Free</span></li>
                                <li>Total <span id="tt">Rp {{ number_format($total, 2) }}</span></li>
                            </ul>
                            <input type="hidden" class="form-control" name="payment" id="payment"
                                value="{{ $total }}">
                            <input type="hidden" class="form-control" name="total" id="total"
                                value="{{ $total }}">
                            <button type="submit" class="btn btn-default update">Check Out</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <!--/#do_action-->
@endsection
