<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติการสั่งอาหาร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/food_page/history.css'); }}">
</head>

<body>
    <div class="nav-bar">
        <div class="logo">
            <span>
                <a href="#">
                    <svg width="100" height="35" viewBox="0 0 188 145" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="94" cy="42" rx="94" ry="25" fill="#C97026" />
                        <rect y="42" width="188" height="78" fill="#C97026" />
                        <ellipse cx="94" cy="67" rx="91" ry="60" fill="white" />
                        <path d="M187.999 41C183.499 67.6667 6.99996 67.6667 -3.53854e-05 41V121C-2.91718e-05 151.5 187.999 154 187.999 121V41Z" fill="#870000" />
                        <ellipse cx="94.5" cy="12" rx="5.5" ry="9" fill="white" />
                        <ellipse cx="67.1142" cy="17.3147" rx="4.5" ry="28.3343" transform="rotate(61.9015 67.1142 17.3147)" fill="white" />
                        <ellipse cx="121.114" cy="17.3154" rx="4.5" ry="28.3343" transform="rotate(-61.9 121.114 17.3154)" fill="white" />
                    </svg>
                </a>
            </span>
        </div>
    </div>

    <div class="header">
        <button type="button" class="btn btn-warning">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
            </svg>
        </button>
        <h1>ประวัติการสั่งอาหาร</h1>
    </div>

    <div class="history-container">
        <div class="order-card">
            <h2>ออเดอร์ #001</h2>
            <div class="flex-between">
                <h6>ชื่ออาหาร</>
                    <h6>จำนวน</h6>
            </div>
            <div class="flex-between">
                <p>x2 hum</p>
                <p>200</p>
            </div>
            <div class="flex-between">
                <p>kuy</p>
                <p>1500</p>
            </div>
            <div class="flex-between">
                <p>x10 PorkSlice</p>
                <p>20000</p>
            </div>
        </div>
        <div>
            2
        </div>
        <div>
            3
        </div>
        <div>
            4
        </div>
        <div>
            5
        </div>
        <div>
            6
        </div>
    </div>
</body>

</html>