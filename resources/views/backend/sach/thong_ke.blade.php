<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('public/js/Chart.min.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        
        <div class="row">
            <div class="col-md-4">
                <canvas id="myChart"></canvas>     
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <canvas id="myChart1" width="800" height="450"></canvas>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <canvas id="myChart2"></canvas>  
            </div>
        </div>
    </div>

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
            legend: { display: false },
            title: {
                display: true,
                text: 'Thống kê sách bán được theo tháng'
            }
        }
    });

</script>

<script>
    new Chart(document.getElementById("myChart1"), {
    type: 'horizontalBar',
    data: {
      labels: [
            @foreach($thongkesachtheoquy as $item)
                '{{$item->quy}}',
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
                @foreach($thongkesachtheoquy as $item)
                    '{{$item->TT}}' ,
                @endforeach
            ]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Thống kê sách bán được theo quý'
      }
    }
});
</script>

<script>
    new Chart(document.getElementById("myChart2"), {
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
            display: true,
            text: 'Thống kê sách bán được theo năm'
        }
        }
    });
</script>

</body>
</html>