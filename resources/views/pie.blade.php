<!-- Fungsi dari carbon itu untuk mendapatkan waktu dari sejak diposting nya review -->

@extends('layouts.templates')

@section('content')

    <div class="container p-5">
        <h5>Google Pie Chart | LaravelCode</h5>

        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Product Name', 'Sales', 'Quantity'],

                @php
                foreach($products as $product) {
                    echo "['".$product->name."', ".$product->sales.", ".$product->quantity."],";
                }
                @endphp
        ]);

          var options = {
            title: 'Product Details',
            is3D: false,
          };

          var chart = new google.visualization.PieChart(document.getElementById('piechart'));

          chart.draw(data, options);
        }
      </script>

@endsection
