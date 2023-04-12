@extends('layouts_admin.app')
@section('title', 'Dashboard')
@section('content')
    <div class="card-boxes">
        <div class="box">
            <div class="right_side">
                <div class="numbers">{{ $category }}</div>
                <div class="box_topic">Total Kategori</div>
            </div>
            <i class='bx bx-category'></i>
        </div>
        <div class="box">
            <div class="right_side">
                <div class="numbers">{{ $product }}</div>
                <div class="box_topic">Total Produk</div>
            </div>
            <i class='bx bx-cart-alt'></i>
        </div>
        {{-- <div class="box">
            <div class="right_side">
                <div class="numbers">0</div>
                <div class="box_topic">Total Pembeli</div>
            </div>
            <i class='bx bx-user'></i>
        </div> --}}
        <div class="box">
            <div class="right_side">
                <div class="numbers">{{ $transaction }}</div>
                <div class="box_topic">Total Transaksi</div>
            </div>
            <i class='bx bx-book-open'></i>
        </div>
    </div>
    <div class="details">
        <div class="recent_project">
            <div class="card_header">
                Grafik Pendapatan Perbulan
            </div>
            <div id="grafik"></div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        var pendapatan = <?php echo json_encode($total_harga); ?>;
        var bulan = <?php echo json_encode($bulan); ?>;
        Highcharts.chart('grafik', {
            title: {
                text: 'Grafik pendapatan Bulanan'
            },
            xAxis: {
                categories: bulan
            },
            yAxis: {
                title: {
                    text: 'Nominal Pendapatan Bulanan'
                }
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Nominal Pendapatan',
                data: pendapatan
            }]
        })
    </script>
@endsection
