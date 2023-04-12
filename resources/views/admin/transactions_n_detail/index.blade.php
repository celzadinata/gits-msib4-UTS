@section('title', 'Transaction')

@extends('layouts_admin.app')

@section('content')
    <!-- End Card Boxs -->
    <div class="details">
        <div class="recent_project">
            <div class="card_header">
                <h2>Transaksi</h2>
            </div>
            <div class="container">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id transaksi</th>
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Pembayaran</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @foreach ($transactionsModel as $item)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->date }}</td>
                                <td>Rp {{ number_format($item->payment) }}</td>
                                <td>Rp {{ number_format($item->total) }}</td>
                                <td><a href="transaction/{{ $item->id }}"class="btn btn-warning">Detail
                                        Transaksi</a></td>
                                </td>
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
