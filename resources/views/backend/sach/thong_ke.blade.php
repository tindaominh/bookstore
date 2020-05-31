@extends('layouts.main')


@section('content')
@include('layouts.header1')
<br>
    <div class="container">
        <div class="card mb-3">
            <div class="card-header" style="font-size: 20px">

                <i class="fa fa-area-chart"></i> Thống kê sách bán được theo tháng
                <div style="display: include; float: right;">
                    <select name="chart_year" id="chart_year">
                        @foreach($years as $year)
                            <option value="{{$year->year}}">{{$year->year}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="card-body">
                <canvas id="myChart" width="100%" height="30"></canvas>  
            </div>
            <!-- <div class="card-footer small text-muted">Updated at ...</div> -->
        </div>

    </div>

    <div class="container">
        <div class="card mb-3">
            <div class="card-header" style="font-size: 20px">
                <i class="fa fa-area-chart"></i> Thống kê sách bán được theo năm
            </div>
            <div class="card-body">
                <canvas id="myChart1" width="50%" height="20"></canvas>  
            </div>
            <!-- <div class="card-footer small text-muted">Updated at ...</div> -->
        </div>
    </div>

@endsection

@section('scripts')
<script src="{{asset('public/js/Chart.min.js')}}"></script>

<script>
    new Chart(document.getElementById("myChart"), {
        type: 'bar',
        data: {
            labels: [
                @foreach($thongkesachtheothang as $item)
                
                    '{{$item->ngay}}',
                
                @endforeach
            ],
            datasets: [
                {
                    label: "Tổng tiền bán được: ",
                    backgroundColor: [
                        @foreach($mang_mau as $item)
                            '#{{$item}}',
                        @endforeach
                    ],
                    data: [
                        @foreach($thongkesachtheothang as $item)
                            '{{$item->TT}}' ,
                        @endforeach
                    ]
                }
            ]
        },
        options: {
           scales: {
            //    xAxes:[{
            //        time: {
            //            unit: 'date'
            //        },
            //        gridlines: {
            //            display: false
            //        },
            //        ticks: {
            //            maxTicksLimit: 7
            //        }
            //    }],
               yAxes:[{
                   ticks: {
                       min: 0,
                       max: 10000000,
                       maxTicksLimit: 500000
                   },
                   gridlines: {
                       color: "rgba(0,0,0, .125)"
                   }
               }],
           },
           legend: {
               display: false
           }
        }
    });

</script>

<script>
    new Chart(document.getElementById("myChart1"), {
        type: 'pie',
        data: {
        labels: [
            @foreach($thongkesachtheonam as $item)
                '{{$item->year}}',
            @endforeach
        ],
        datasets: [{
            label: "Tổng tiền bán được: ",
                backgroundColor: [
                    @foreach($mang_mau as $item)
                        '#{{$item}}',
                    @endforeach
                ],
                data: [
                    @foreach($thongkesachtheonam as $item)
                        '{{$item->TT}}' ,
                    @endforeach
                ]
        }]
        },
        options: {
            title: {
                display: false,
                text: 'Thống kê sách bán được theo năm'
            }
        }
    });
</script>


@endsection