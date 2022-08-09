<!-- Fungsi dari carbon itu untuk mendapatkan waktu dari sejak diposting nya review -->

@extends('layouts.templates')

@section('content')

  <div class="container p-8">
    <div class="col-xl-12">

      <div class="col-xl-12" style="margin-top: 30px;">
        <div class="card">
          <div class="card-body">
            <div class="chart-container">
              <div class="chart has-fixed-height" id="pie_basic">
              </div>
            </div>
          </div>
        </div>
      </div>	
    </div>
  </div>

  <!-- KONTEN DIPINDAH KE PARTIALS->FOOTERCONTENT.BLADE.PHP -->
  <!-- <script type="text/javascript">
    var pie_basic_element = document.getElementById('pie_basic');
    if (pie_basic_element) {
        var pie_basic = echarts.init(pie_basic_element);
        pie_basic.setOption({               
            
            textStyle: {
                fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                fontSize: 13
            },

            title: {
                text: 'Pie Chart Example',
                left: 'center',
                textStyle: {
                    fontSize: 17,
                    fontWeight: 500
                },
                subtextStyle: {
                    fontSize: 12
                }
            },

            tooltip: {
                trigger: 'item',
                backgroundColor: 'rgba(0,0,0,0.75)',
                padding: [10, 15],
                textStyle: {
                    fontSize: 13,
                    fontFamily: 'Roboto, sans-serif'
                },
                formatter: "{a} <br/>{b}: {c} ({d}%)"
            },

            legend: {
                orient: 'horizontal',
                bottom: '0%',
                left: 'center',                   
                data: ['Result of One', 'Result of Two','Result of Three'],
                itemHeight: 8,
                itemWidth: 8
            },

            series: [{
                name: 'Product Type',
                type: 'pie',
                radius: '70%',
                center: ['50%', '50%'],
                itemStyle: {
                    normal: {
                        borderWidth: 1,
                        borderColor: '#fff'
                    }
                },
                data: [
                    {value: {{$one_count}}, name: 'Result of One'},
                    {value: {{$two_count}}, name: 'Result of Two'},
                    {value: {{$three_count}}, name: 'Result of Three'}
                ]
            }]
        });
    }
  </script> -->
  <script type="text/javascript">
    var pie_basic_element = document.getElementById('pie_basic');
    if (pie_basic_element) {
        var pie_basic = echarts.init(pie_basic_element);
        pie_basic.setOption({               
            
            textStyle: {
                fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                fontSize: 13
            },

            title: {
                text: 'Student Quiz Score Result',
                left: 'center',
                textStyle: {
                    fontSize: 17,
                    fontWeight: 500
                },
                subtextStyle: {
                    fontSize: 12
                }
            },

            tooltip: {
                trigger: 'item',
                backgroundColor: 'rgba(0,0,0,0.75)',
                padding: [10, 15],
                textStyle: {
                    fontSize: 13,
                    fontFamily: 'Roboto, sans-serif'
                },
                formatter: "{a} <br/>{b}: {c} ({d}%)"
            },

            legend: {
                orient: 'horizontal',
                bottom: '0%',
                left: 'center',                   
                data: [
                  'Grades One', 
                  'Grades Two',
                  'Grades Three',
                  'Grades Four',
                  'Grades Five',
                  'Grades Six',
                  'Grades Seven',
                  'Grades Eight',
                  'Grades Nine',
                  'Grades Ten'
                ],
                itemHeight: 8,
                itemWidth: 8
            },

            series: [{
                name: 'Student Grades',
                type: 'pie',
                radius: '70%',
                center: ['50%', '50%'],
                itemStyle: {
                    normal: {
                        borderWidth: 1,
                        borderColor: '#fff'
                    }
                },
                data: [
                    {value: {{$one_count}}, name: 'Grades One'},
                    {value: {{$two_count}}, name: 'Grades Two'},
                    {value: {{$three_count}}, name: 'Grades Three'},
                    {value: {{$four_count}}, name: 'Grades Four'},
                    {value: {{$five_count}}, name: 'Grades Five'},
                    {value: {{$six_count}}, name: 'Grades Six'},
                    {value: {{$seven_count}}, name: 'Grades Seven'},
                    {value: {{$eight_count}}, name: 'Grades Eight'},
                    {value: {{$nine_count}}, name: 'Grades Nine'},
                    {value: {{$ten_count}}, name: 'Grades Ten'},
                ]
            }]
        });
    }
  </script>
@endsection
