@extends('layouts.main')

@section('container')
  {{-- <h1>Grafik Surat Masuk dan Keluar Polda DIY</h1> --}}

<div class="S">
  <div id="grafikSurat">
  </div>
</div>
@endsection

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>


<div style="width: 80%; margin: auto;">
        <h2>{{ $title }}</h2>
        <div id="chart-container">
            {!! $chart->container() !!}
        </div>
    </div>

    {!! $chart->script() !!}

    <script>
  Highcharts.chart('chartSurat', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Surat Masuk & Surat Keluar',
        align: 'center'
    },
   
    xAxis: {
        categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        crosshair: true,
        accessibility: {
            description: 'Months'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Surat'
        }
    },
    tooltip: {
        valueSuffix: ' (1000)'
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Surat Masuk',
            data: [4, 20, 10, 15, 27, 14, 5, 26, 11, 6, 2, 1]
        },
        {
            name: 'Surat Keluar',
            data: [10, 15, 30, 15, 29, 11, 5, 26, 8, 6, 10, 4]
        }
    ]
});
</script>
@endsection


