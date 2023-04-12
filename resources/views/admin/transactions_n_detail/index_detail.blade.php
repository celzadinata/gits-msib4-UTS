@section('title', 'Transaction')

@extends('layouts_admin.app')

@section('content')
    <div class="details">
        <div class="recent_project">
            <div class="card_header">
                <h2>Detail Transaksi</h2>
            </div>
            <div class="container">
                <table>
                    <a href="{{ route('showtr') }}"><button class="btn btn-primary">Kembali ke transaksi</button></a>
                </table>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Produk</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Sub total</th>
                        </tr>
                    </thead>
                    @foreach ($detail_transactionsModel as $item)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->products_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>Rp {{ number_format($item->sub_total) }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            // call function
            changeBtn();
        });

        function changeBtn() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        };
    </script>

@endsection
