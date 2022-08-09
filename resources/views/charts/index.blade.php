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
          ['Student Name', 'Student Score', 'NIS'],
          // ['Student Score', 'Name', 'Student Name'],

            @php
            foreach($students as $student) {
              // echo "['".$student->stu_score."', ".$student->stu_score.", ".$student->nis."],";
              echo "['".$student->stu_score."', ".$student->stu_score.", ".$student->stu_score."],";

              // echo "['".$student->name."', ".$student->nis.", ".$student->stu_score."],";
            }
            @endphp
        ]);
        
        var options = {
          title: 'Student Score Pie Charts',
          is3D: false,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

@endsection
