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
            <div class="col-md-12">
                <canvas id="myChart" width="100" height="450"></canvas>
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
            label: "Population (millions)",
            backgroundColor: [
                @foreach($mang_mau as $item)
                    '#{{$item}}',
                @endforeach
            ],
            data: [
                @foreach($thongkesachtheothang as $item)
                    '{{$item->TT}}',
                @endforeach
            ]
            }
        ]
        },
        options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'Predicted world population (millions) in 2050'
        }
        }
    });

</script>


</body>
</html>