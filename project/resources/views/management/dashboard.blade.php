<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Sales by Table (Monthly and Yearly)</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/management/dashboard.css') }}">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- CanvasJS -->
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>

<body>
    <div class="nav-bar">
        <div class="logo">
            <span>
                <!-- <a href="/management">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                        </svg>
                    </a> -->
            </span>
        </div>

        <div class="menu-bar">
            <span>
                <a href="/dashboard">ตรวจสอบยอดขาย</a>
            </span>
            <span>
                <a href="/food-available-manager">ปิด-เปิด รายการอาหาร</a>
            </span>
            <span>
                <a href="/management">ข้อมูลอาหาร</a>
            </span>
            <span>
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/login">Logout</a></a></li>
                </ul>
            </span>
        </div>
    </div>

    <div class="header-title">
        <h1>ยอดขายโดยภาพรวม</h1>
    </div>


    <!-- Chart Container -->
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

    <!-- PHP Data -->
    <?php

    use Illuminate\Support\Facades\DB;
    // Fetch data from the database
    $data = DB::table('TotalPrice')
        ->select(
            DB::raw('TableName || " " || strftime("%Y", date) AS label'), // Concatenate table name and year
            DB::raw('strftime("%m", date) AS month'), // Extract month
            DB::raw('strftime("%Y", date) AS year'), // Extract year
            DB::raw('SUM(TotalPrice) AS y')
        )
        ->groupBy('TableName', 'year', 'month')
        ->orderBy('year', 'asc')
        ->orderBy('month', 'asc')
        ->get();
    $dataPoints = $data->toArray();
    ?>

    <!-- JavaScript for Chart -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Data from controller
            var dataPoints = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;
            console.log(dataPoints); // Debugging - Check if data is fetched correctly

            // Group data by table name
            var groupedData = {};
            dataPoints.forEach(function(point) {
                var label = point.label;
                if (!groupedData[label]) {
                    groupedData[label] = {
                        label: label,
                        data: []
                    };
                }
                groupedData[label].data.push({
                    x: point.year + '-' + point.month, // Combine year and month
                    y: point.y
                });
            });

            // Prepare datasets for the chart
            var datasets = [];
            for (var label in groupedData) {
                datasets.push({
                    label: label,
                    data: groupedData[label].data,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Background color for bars
                    borderColor: 'rgba(54, 162, 235, 1)', // Border color for bars
                    borderWidth: 1
                });
            }

            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar', // Choose the chart type (bar, line, pie, etc.)
                data: {
                    datasets: datasets
                },
                options: {
                    scales: {
                        xAxes: [{
                            type: 'time',
                            time: {
                                unit: 'month'
                            },
                            distribution: 'series',
                            ticks: {
                                source: 'data'
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });
    </script>
</body>

</html>