<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยอดขาย</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/management/dashboard.css'); }}">
    <link rel="icon" href="{{ URL::asset('image/DimsumLogo.png')}}" type="image/x-icon">

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
                <a href="#">แผนผังร้านอาหาร</a>
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
                    <li><a class="dropdown-item" href="#">Logout</a></a></li>
                </ul>
            </span>
        </div>
    </div>

    <div class="header-title">
        <h1>ยอดขายโดยภาพรวม</h1>
    </div>

    <div class="sale-table">
        <div class="day-table">
            <table class="table table-hover">
                <tr>
                    <th>ว / ด / ป</th>
                    <th>ยอดขาย</th>
                </tr>
                <tr>
                    <td><!-- d / m / y--></td>
                    <td><!-- ยอดขายของวันนั้น--></td>
                </tr>
                <tr>
                    <td>รวม</td>
                    <td><!-- --></td>
                </tr>
            </table>
        </div>
        <div class="month-table">
            <table class="table table-hover">
                <tr>
                    <th>เดือน</th>
                    <th>ยอดขาย</th>
                </tr>
                <tr>
                    <td><!--ชื่อเดือน --></td>
                    <td><!-- ยอดขายของเดิอนนั้น --></td>
                </tr>
                <tr>
                    <td>รวม</td>
                    <td><!-- --></td>
                </tr>
            </table>
        </div>
        <div class="year-table">
            <table class="table table-hover">
                <tr>
                    <th>ปี</th>
                    <th>ยอดขาย</th>
                </tr>
                <tr>
                    <td><!-- ex. 2024--></td>
                    <td><!-- ยอดขายของปีนั้นนั้น--></td>
                </tr>
                <tr>
                    <td>รวม</td>
                    <td><!-- --></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>