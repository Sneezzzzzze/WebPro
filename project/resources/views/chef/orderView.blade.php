<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/chef/styles.css'); }}">
    <meta http-equiv="refresh" content="5">
</head>

<body>
    <?php

    use Illuminate\Support\Facades\DB;

    $order = DB::table('Order')
        ->where('status', 'กำลังทำ')
        ->get();
    session_start();
    ?>
    <div class="nav-bar">
        <div class="logo">
            <span>
                <a href="">
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

    <div class="center-point" style="margin: 30px;">
        <h1>รายการอาหารที่ลูกค้าสั่ง</h1>
    </div>
    <div class="center-card">
        @foreach($order as $orders)
        <div class="container" id="{{$orders->Order_id}}">
            <!-- <div class="orderNum center-point"></div> -->
            <div class="menu-list">
                <div class="toDoList">
                    <span>
                        <h2 id="table">โต๊ะ {{$orders->TableName}}</h2>
                        <h3>เวลาที่สั่ง : {{$orders->time}} น.</h3>
                    </span>
                    <div>
                        <h4 id="foodName">รายการอาหารที่สั่ง : {{$orders->FoodName}} x {{$orders->quantity}}</h4>
                    </div>
                    <div>
                        <img src="{{$orders->FoodImage}}">
                    </div>
                </div>
                <div class="done">
                    <form action="" method="GET">
                        <input type="hidden" name="collectId" value="{{$orders->Order_id}}">
                        <button type="submit" class="btn btn-success btn-lg" onclick="deleteSelf('{{$orders->Order_id}}')" name="checkBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="136" height="462" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <script>
        function deleteSelf(id) {
            <?php
            if (isset($_GET['collectId'])) {
                $check = $_GET['collectId'];
            }
            if (isset($_GET['checkBtn'])) {
                DB::table('Order')
                    ->where('Order_id', $check)
                    ->update([
                        'status' => 'เสร็จแล้ว'
                    ]);
            }
            ?>
            window.location.href = '/chef';
            
        }
    </script>
</body>

</html>
