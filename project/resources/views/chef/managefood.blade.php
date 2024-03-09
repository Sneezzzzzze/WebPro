<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/chef/food.css'); }}">
</head>

<body>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var originalOpacity = 1;
            var blurredOpacity = 1;

            var btnClose = document.querySelectorAll(".btn_close");
            var btnOpen = document.querySelectorAll(".btn_open");
            var images = document.querySelectorAll(".menu_item img");
            var captions = document.querySelectorAll(".menu_item .centered");

            // Function to blur the image and show caption
            function blurImageAndShowCaption(index) {
                images[index].style.filter = "blur(5px)"; // You can adjust the blur amount
                images[index].style.opacity = blurredOpacity;
                captions[index].style.display = "block";
            }

            // Function to unblur the image and hide caption
            function unblurImageAndHideCaption(index) {
                images[index].style.filter = "none";
                images[index].style.opacity = originalOpacity;
                captions[index].style.display = "none";
            }

            // Attach click event listeners to the "ปิด" buttons
            btnClose.forEach(function (button, index) {
                button.addEventListener("click", function (event) {
                    event.preventDefault();
                    blurImageAndShowCaption(index);
                });
            });

            // Attach click event listeners to the "เปิด" buttons
            btnOpen.forEach(function (button, index) {
                button.addEventListener("click", function (event) {
                    event.preventDefault();
                    unblurImageAndHideCaption(index);
                });
            });
        });
    </script>
  

    <?php

    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Request;

    $currentPath = Request::path();
    $lastSegment = basename($currentPath);
    $table = $lastSegment;
    session_start();

    $_SESSION['table'] = $table;
    $refreshed = time();
    $_SESSION['refreshed'] = $refreshed;

    if (isset($_GET['refreshed'])) {
        $_SESSION['table'] = $table;
    }
    $dimsum = DB::table('Food')
        ->select('Name', 'Category', 'Price', 'Image')
        ->where('Category', 'ติ่มซำ')
        ->get();
    $fried = DB::table('Food')
        ->select('Name', 'Category', 'Price', 'Image')
        ->where('Category', 'ของทอด')
        ->get();

    $sweet = DB::table('Food')
        ->select('Name', 'Category', 'Price', 'Image')
        ->where('Category', 'ของหวาน')
        ->get();

    $drink = DB::table('Food')
        ->select('Name', 'Category', 'Price', 'Image')
        ->where('Category', 'เครื่องดื่ม')
        ->get();
    ?>

    <!-- nav bar logo -->
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
    <!-- end nav bar -->

    <div class="center-point" style="margin: 30px;">
        <h1>จัดการเมนูอาหาร</h1>
    </div>

    <!-- food content -->
    <!-- dimsum -->
    <div class="menu_container">
            <div class="restaurant_menu">
                @foreach($dimsum as $dimsums)
                <div class="menu_item">
                    <form action="" method="GET">
                        <input type="hidden" name="fname" id="fname" value="{{$dimsums->Name}}">
                        <input type="hidden" name="fprice" id="fprice" value="{{$dimsums->Price}}">
                        <input type="hidden" name="fimg" id="fimg" value="{{$dimsums->Image}}">
                        <div class="container_img">
                            <img src="{{$dimsums->Image}}" alt="" />
                            <div class="centered">สินค้าหมด</div>
                        </div>
                        <div class="title">{{$dimsums->Name}}</div>
                        <div class="location">{{$dimsums->Category}}</div>
                        <div class="order_info">
                            <div class="price">{{$dimsums->Price}}</div>
                        </div>
                        <button type="submit" class="btn btn_open" name="orderBtn" id="orderBtn" selected>เปิด</button>
                        <button type="submit" class="btn btn_close" name="orderBtn" id="orderBtn">ปิด</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
        <!-- fried dimsum -->
        <div class="menu_container">
            <div class="restaurant_menu">
                @foreach($fried as $frieds)
                <div class="menu_item">
                    <form action="" method="GET">
                        <input type="hidden" name="fname" id="fname" value="{{$frieds->Name}}">
                        <input type="hidden" name="fprice" id="fprice" value="{{$frieds->Price}}">
                        <input type="hidden" name="fimg" id="fimg" value="{{$frieds->Image}}">
                        <img src="{{$frieds->Image}}" id="customerFoodImage" />
                        <div class="title">{{$frieds->Name}}</div>
                        <div class="location">{{$frieds->Category}}</div>
                        <div class="order_info">
                            <div class="price">{{$frieds->Price}}</div>
                        </div>
                        <button type="submit" class="btn btn_open" name="orderBtn" id="orderBtn">เปิด</button>
                        <button type="submit" class="btn btn_close" name="orderBtn" id="orderBtn">ปิด</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>


        <!-- dessert -->
        <div class="menu_container">
            <div class="restaurant_menu">
                @foreach($sweet as $sweets)
                <div class="menu_item">
                    <form action="" method="GET">
                        <input type="hidden" name="fname" id="fname" value="{{$sweets->Name}}">
                        <input type="hidden" name="fprice" id="fprice" value="{{$sweets->Price}}">
                        <input type="hidden" name="fimg" id="fimg" value="{{$sweets->Image}}">
                        <img src="{{$sweets->Image}}" alt="" />
                        <div class="title">{{$sweets->Name}}</div>
                        <div class="location">{{$sweets->Category}}</div>
                        <div class="order_info">
                            <div class="price">{{$sweets->Price}}</div>
                        </div>
                        <button type="submit" class="btn btn_open" name="orderBtn" id="orderBtn">เปิด</button>
                        <button type="submit" class="btn btn_close" name="orderBtn" id="orderBtn">ปิด</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
        <!-- beverages -->
        <div class="menu_container">
            <div class="restaurant_menu">
                @foreach($drink as $drinks)
                <div class="menu_item">
                    <form action="" method="GET">
                        <input type="hidden" name="fname" id="fname" value="{{$drinks->Name}}">
                        <input type="hidden" name="fprice" id="fprice" value="{{$drinks->Price}}">
                        <input type="hidden" name="fimg" id="fimg" value="{{$drinks->Image}}">
                        <img src="{{$drinks->Image}}" alt="" />
                        <div class="title">{{$drinks->Name}}</div>
                        <div class="location">{{$drinks->Category}}</div>
                        <div class="order_info">
                            <div class="price">{{$drinks->Price}}</div>
                        </div>
                        <button type="submit" class="btn btn_open" name="orderBtn" id="orderBtn">เปิด</button>
                        <button type="submit" class="btn btn_close" name="orderBtn" id="orderBtn">ปิด</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>

</body>
</html>
