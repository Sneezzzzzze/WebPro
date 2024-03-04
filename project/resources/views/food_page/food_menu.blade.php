<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/food_page/food_page.css'); }}">
    <title>menu</title>
</head>

<!-- <script>
    const menuBtns = document.querySelectorAll('.menu-btn');
    const foodItems = document.querySelectorAll('.menu_container');

    let activeBtn = "steam";

    showFoodMenu(activeBtn);

    menuBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            resetActiveBtn();
            showFoodMenu(btn.id);
            btn.classList.add('active-btn');
        });
    });

    function resetActiveBtn(){
        menuBtns.forEach((btn) => {
            btn.classList.remove('active-btn');
        });
    }

    function showFoodMenu(newMenuBtn){
        activeBtn = newMenuBtn;
        foodItems.forEach((item) => {
            if(item.classList.contains(activeBtn)){
                item.style.display = "grid";
            } else {
                item.style.display = "none";
            }
        });
    }
</script> -->

<body background="https://www.it.kmitl.ac.th/~pattarachai/PIC/BG/stone.gif" link="#0000BB">
    <?php
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Request;

    $currentPath = Request::path();

    $lastSegment = basename($currentPath);

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

    $rec = DB::table('Food')
        ->select('Image')
        ->where('recommand', 1)
        ->get();
    ?>
    <div class="container">
        <!-- NavBar with Home Icon -->
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

            <div class="shop-cart">
                <a data-bs-toggle="offcanvas" href="#shopping-cart" role="button" aria-controls="shopping-cart">
                    <span class="fa fa-shopping-cart" style="font-size:36px"></span><span class="caret"></span>
                </a>

                <form action="" method="">
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="shopping-cart" aria-labelledby="offcanvasLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasLabel">รายการอาหารที่สั่ง</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0 all-align-center">
                                    <div class="col-md-4">
                                        <img src="https://upload.wikimedia.org/wikipedia/vi/9/90/Microsoft_Photos_Icon_on_Windows_10.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="flex-card-header">
                                                <h6 class="card-title">ชื่ออาหาร</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <p>ราคา : 9999</p>
                                            <div class="flex-button">
                                                <input type="button" class="minus-btn" value="-">
                                                <input type="text" class="form-control w-50 amount-field" name="amountOfFood" id="amount" min=1 value="1">
                                                <input type="button" class="plus-btn" value="+">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas-bottom">
                            <div class="total-price">
                                <div id="total-label">
                                    ทั้งหมด :
                                </div>
                                <div id="totalNumPrice">
                                    9999.87฿
                                </div>
                            </div>
                            <div class="check-out">
                                <button type="submit" class="btn-danger rounded-0">ลบรายการอาหารทั้งหมด</button>
                                <button type="submit" class="btn-success rounded-0">ยืนยันการสั่งอาหาร</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Hero Image -->
        <div class="hero-image">
            <div class="hero-text">
                <h1>โต๊ะ {{$lastSegment}}</h1>
                <h2>เมนูอาหาร</h2>
            </div>
        </div>
        <br>
        <!-- Recommendation Line -->
        <div class="recom_text">
            <h4>
                <span class="horizontal">เมนูแนะนำ</span>
            </h4>
        </div>

        <!-- Recommended food -->
        <div class="rec_food">
            <div id="item-list" class="item-list">
                @foreach($rec as $recs)
                <img id="item" class="item" src="{{$recs->Image}}" />
                @endforeach
            </div>

        </div>

        <div class="menu-btns">
            <button type="button" class="menu-btn" id="stream" onclick="location.href='#section1'">ติ่มซำนึ่ง</button>
            <button type="button" class="menu-btn" id="fry" onclick="location.href='#section2'">ติ่มซำทอด</button>
            <button type="button" class="menu-btn" id="dessert" onclick="location.href='#section3'">ของหวาน</button>
            <button type="button" class="menu-btn" id="drink" onclick="location.href='#section4'">เครื่องดื่ม</button>
        </div>

        <!-- <div class="section" id="menu_type">
            <div class="type_container">
                <ul class="category">
                    <li class="active">ติ่มซำนึ่ง</li>
                    <li>ติ่มซำทอด</li>
                    <li>ของหวาน</li>
                    <li>เครื่องดื่ม</li>
                </ul> -->

        <!-- Category Line -->
        <div class="catagory_text" id="section1">
            <h4>
                <span class="horizontal">อาหารประเภทติ่มซำนึ่ง</span>
            </h4>
        </div>

        <!-- dimsum -->
        <div class="menu_container">
            <div class="restaurant_menu">
                @foreach($dimsum as $dimsums)
                <div class="menu_item">
                    <form action="" method="GET">
                        <input type="hidden" name="fname" id="fname" value="{{$dimsums->Name}}">
                        <input type="hidden" name="fprice" id="fprice" value="{{$dimsums->Price}}">
                        <input type="hidden" name="fimg" id="fimg" value="{{$dimsums->Image}}">

                        <img src="{{$dimsums->Image}}" id="customerFoodImage" />
                        <div class="title">{{$dimsums->Name}}</div>
                        <div class="location">{{$dimsums->Category}}</div>
                        <div class="order_info">
                            <div class="price">{{$dimsums->Price}}</div>
                        </div>
                        <button type="submit" class="btn btn_menu" name="orderBtn" id="orderBtn">สั่งเลย</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>

        <?php
        if (isset($_GET['orderBtn'])) {
            $fname = $_GET['fname'];
            $fprice = $_GET['fprice'];
            $fimg = $_GET['fimg'];

            DB::table('Cart')->insert([
                'TableName' => $lastSegment,
                'FoodImage' => $fimg,
                'FoodName' => $fname,
                'FoodPrice' => $fprice
            ]);
        }
        ?>

        <!-- fried dimsum -->
        <div class="catagory_text" id="section2">
            <h4>
                <span class="horizontal">อาหารประเภทติ่มซำทอด</span>
            </h4>
        </div>
        <div class="menu_container">
            <div class="restaurant_menu">
                @foreach($fried as $frieds)
                <div class="menu_item">
                    <img src="{{$frieds->Image}}" alt="" />
                    <div class="title">{{$frieds->Name}}</div>
                    <div class="location">{{$frieds->Category}}</div>
                    <div class="order_info">
                        <div class="price">{{$frieds->Price}}</div>
                        <form action="" method="">
                            <button type="submit" class="btn btn_menu">สั่งเลย</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Category Line -->
        <div class="catagory_text" id="section3">
            <h4>
                <span class="horizontal">ประเภทขนมหวาน</span>
            </h4>
        </div>
        <div class="menu_container">
            <div class="restaurant_menu">
                @foreach($sweet as $sweets)
                <div class="menu_item">
                    <img src="{{$sweets->Image}}" alt="" />
                    <div class="title">{{$sweets->Name}}</div>
                    <div class="location">{{$sweets->Category}}</div>
                    <div class="order_info">
                        <div class="price">{{$sweets->Price}}</div>
                        <form action="" method="">
                            <button type="submit" class="btn btn_menu">สั่งเลย</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Category Line -->
        <div class="catagory_text" id="section4">
            <h4>
                <span class="horizontal">เครื่องดื่ม</span>
            </h4>
        </div>
        <div class="menu_container">
            <div class="restaurant_menu">
                @foreach($drink as $drinks)
                <div class="menu_item">
                    <img src="{{$drinks->Image}}" alt="" />
                    <div class="title">{{$drinks->Name}}</div>
                    <div class="location">{{$drinks->Category}}</div>
                    <div class="order_info">
                        <div class="price">{{$drinks->Price}}</div>
                        <form action="" method="">
                            <button type="submit" class="btn btn_menu">สั่งเลย</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const minusBtn = document.querySelector('.minus-btn');
            const plusBtn = document.querySelector('.plus-btn');
            const amountField = document.querySelector('.amount-field');

            minusBtn.addEventListener('click', () => {
                const currentValue = parseInt(amountField.value);
                if (currentValue > 1) {
                    amountField.value = currentValue - 1;
                }
            });

            plusBtn.addEventListener('click', () => {
                const currentValue = parseInt(amountField.value);
                amountField.value = currentValue + 1;
            });
        });
    </script>
</body>

</html>