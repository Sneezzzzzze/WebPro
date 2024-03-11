<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/food_page/food_page.css'); }}">
    <link rel="icon" href="{{ URL::asset('image/DimsumLogo.png')}}" type="image/x-icon">
    <title>menu</title>
    <script>
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    </script>
</head>

<body background="https://www.it.kmitl.ac.th/~pattarachai/PIC/BG/stone.gif" link="#0000BB">
    <?php

    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Request;

    $currentPath = Request::path();
    $lastSegment = basename($currentPath);
    $table = $lastSegment;
    date_default_timezone_set('Asia/Bangkok');
    session_start();

    $_SESSION['table'] = $table;
    $refreshed = time();
    $_SESSION['refreshed'] = $refreshed;

    if (isset($_GET['refreshed'])) {
        $_SESSION['table'] = $table;
    }

    $rec = DB::table('Food')
        ->select('Image')
        ->where('recommand', 1)
        ->get();

    $cart = DB::table('Cart')
        ->select('Cart_id', 'FoodImage', 'FoodName', 'FoodPrice')
        ->where('TableName', $table)
        ->get();
    ?>
    <div class="container">
        <!-- NavBar with Home Icon -->
        <div class="nav-bar">
            <div class="logo">
                <span>
                    <a href="/Table/{{$table}}">
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
                <span>
                    <a href="/history" onclick="refreshAndGoToHistory()">ประวัติการสั่งอาหาร</a>
                </span>

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
                            @foreach($cart as $carts)
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0 all-align-center">
                                    <div class="col-md-4">
                                        <img src="{{$carts->FoodImage}}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="flex-card-header">
                                                <h6 class="card-title">{{$carts->FoodName}}</h6>
                                                <form action="" method="GET">
                                                    <input type="hidden" name="cartid" value="{{$carts->Cart_id}}">
                                                    <button type="submit" class="btn-close btn-close-card" aria-label="Close" name="removeInCart"></button>
                                                </form>
                                            </div>
                                            <p>ราคา : {{$carts->FoodPrice}}</p>
                                            <div class="flex-button">
                                                <input type="button" class="minus-btn" value="-" data-cartid="{{$carts->Cart_id}}">
                                                <input type="text" class="form-control w-50 amount-field" name="amountOfFood[{{$carts->Cart_id}}]" id="amount_{{$carts->Cart_id}}" min=1 value="1" data-price="{{$carts->FoodPrice}}">
                                                <input type="button" class="plus-btn" value="+" data-cartid="{{$carts->Cart_id}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="offcanvas-bottom">
                            <div class="total-price">
                                <div id="total-label">
                                    ทั้งหมด :
                                </div>
                                <input type="hidden" name="PriceToPay">
                                <div id="totalNumPrice" name="totalPrice"></div>
                                <div>บาท</div>
                            </div>
                            <div class="check-out">
                                <button type="submit" class="btn-danger rounded-0" name="deleteAll">ลบรายการอาหารทั้งหมด</button>
                                <button type="submit" class="btn-success rounded-0" name="confirmOrder">ยืนยันการสั่งอาหาร</button>
                                <input type="hidden" name="refreshed" value="<?php echo $refreshed; ?>">
                            </div>
                            <?php
                            if (isset($_GET['removeInCart'])) {
                                $cartid = $_GET['cartid'];
                                DB::table('Cart')
                                    ->where('Cart_id', $cartid)
                                    ->where('TableName', $lastSegment)
                                    ->delete();
                                echo "<script>window.location.href = '/Table/{$table}';</script>";
                            }

                            if (isset($_GET['deleteAll'])) {
                                DB::table('Cart')
                                    ->where('TableName', $table)
                                    ->delete();
                                echo "<script>window.location.href = '/Table/{$table}';</script>";
                            }

                            if (isset($_GET['confirmOrder'])) {
                                if (isset($_GET['PriceToPay'])) {
                                    $final = $_GET['PriceToPay'];
                                }

                                $cartItems = DB::table('cart')
                                    ->select('TableName', 'FoodImage', 'FoodName', 'FoodPrice', 'Cart_id')
                                    ->get();

                                if (isset($_GET['amountOfFood'])) {
                                    $amountOfFood = $_GET['amountOfFood'];
                                    foreach ($amountOfFood as $cartId => $quantity) {
                                        // Retrieve other details of the item based on the $cartId
                                        $item = DB::table('Cart')->where('Cart_id', $cartId)->first();
                                        if ($item) {
                                            // Insert the order with the correct quantity
                                            $orderDetails = [
                                                'TableName' => $lastSegment,
                                                'FoodImage' => $item->FoodImage,
                                                'FoodName' => $item->FoodName,
                                                'FoodPrice' => $item->FoodPrice,
                                                'quantity' => $quantity,
                                                'time' => now()->format('H:i:s'),
                                                'status' => 'กำลังทำ'
                                            ];
                                            DB::table('Order')->insert($orderDetails);
                                        }
                                    }
                                }

                                DB::table('TotalPrice')->insert([
                                    'TableName' => $lastSegment,
                                    'TotalPrice' => $final,
                                    'date' => now()->format('Y-m-d')
                                ]);

                                $count = DB::table('Cart')
                                    ->select('TableName', DB::raw('COUNT(*) as count'))
                                    ->groupBy('TableName')
                                    ->get();

                                $_SESSION['count'] = $count;



                                if ($count === 0) {
                                    echo "<script>window.location.href = '/Table/{$table}';</script>";
                                } else {
                                    DB::table('Cart')
                                        ->where('TableName', $lastSegment)
                                        ->delete();
                                    echo "<script>window.location.href = '/Table/status';</script>";
                                }
                            }
                            ?>
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

        <?php
        $categoryFood = DB::table('Category')
            ->select('categoryNameTH')
            ->where('categoryNameTH', '!=', 'ทั้งหมด')
            ->orderByRaw("
            CASE 
                WHEN categoryNameTH = 'ติ่มซำนึ่ง' THEN 1
                WHEN categoryNameTH = 'ของทอด' THEN 2
                WHEN categoryNameTH = 'เครื่องดื่ม' THEN 4
                WHEN categoryNameTH = 'ของหวาน' THEN 5
                ELSE 3
            END,
            categoryNameTH ASC
        ")
            ->get();

        ?>
        <div class="menu-btns">
            @foreach($categoryFood as $categories)
            <button type="button" class="menu-btn" id="stream" onclick="location.href='#{{$categories->categoryNameTH}}'">{{$categories->categoryNameTH}}</button>
            @endforeach
        </div>

        @foreach($categoryFood as $categories)
        <!-- Category Line -->
        <div class="catagory_text" id="{{$categories->categoryNameTH}}">
            <h4>
                <span class="horizontal">อาหารประเภท {{$categories->categoryNameTH}}</span>
            </h4>
        </div>

        <!-- dimsum -->
        <div class="menu_container">
            <div class="restaurant_menu">
                <?php
                $foods = DB::table('Food')
                    ->select('Name', 'Category', 'Price', 'Image', 'available')
                    ->where('Category', $categories->categoryNameTH)
                    ->get();
                ?>
                @foreach($foods as $food)
                <div class="menu_item">
                    <form action="" method="GET">
                        <input type="hidden" name="fname" id="fname" value="{{$food->Name}}">
                        <input type="hidden" name="fprice" id="fprice" value="{{$food->Price}}">
                        <input type="hidden" name="fimg" id="fimg" value="{{$food->Image}}">

                        <?php if ($food->available == 'ปิด') : ?>
                            <div class="blur-container">
                                <img src="{{$food->Image}}" class="blurred-image" />
                                <div class="middle-text">สินค้าหมด</div>
                            </div>
                            <?php
                            $isInCart = false;
                            ?>
                        <?php else : ?>
                            <img src="{{$food->Image}}" />
                            <?php
                            $isInCart = $cart->contains('FoodName', $food->Name);
                            ?>
                        <?php endif; ?>

                        <!-- Title, location, and price -->
                        <div class="title">{{$food->Name}}</div>
                        <div class="location">{{$food->Category}}</div>
                        <div class="order_info">
                            <div class="price">{{$food->Price}}฿</div>
                        </div>

                        <!-- Order button -->
                        <button type="submit" class="btn btn_menu" name="orderBtn" id="orderBtn" {{ $isInCart || $food->available == 'ปิด' ? 'disabled' : '' }}>
                            {{ $food->available == 'ปิด' ? 'สินค้าหมด' : ($isInCart ? 'อยู่ในตะกร้าเรียบร้อย' : 'สั่งเลย') }}
                        </button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
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
            echo "<script>window.location.href = '/Table/{$table}';</script>";
        }
        ?>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const minusBtns = document.querySelectorAll('.minus-btn');
                const plusBtns = document.querySelectorAll('.plus-btn');
                const amountFields = document.querySelectorAll('.amount-field');
                const priceToPay = document.querySelector('[name="PriceToPay"]');

                minusBtns.forEach((minusBtn) => {
                    minusBtn.addEventListener('click', () => {
                        const cartId = minusBtn.getAttribute('data-cartid');
                        const amountField = document.getElementById('amount_' + cartId);
                        const currentValue = parseInt(amountField.value);
                        if (currentValue > 1) {
                            amountField.value = currentValue - 1;
                            updateTotalPrice();
                        }
                    });
                });

                plusBtns.forEach((plusBtn) => {
                    plusBtn.addEventListener('click', () => {
                        const cartId = plusBtn.getAttribute('data-cartid');
                        const amountField = document.getElementById('amount_' + cartId);
                        const currentValue = parseInt(amountField.value);
                        amountField.value = currentValue + 1;
                        updateTotalPrice();
                    });
                });

                amountFields.forEach((amountField) => {
                    amountField.addEventListener('change', () => {
                        updateTotalPrice();
                    });
                });

                function updateTotalPrice() {
                    let totalPrice = 0;
                    amountFields.forEach((amountField) => {
                        const cartId = amountField.getAttribute('data-cartid');
                        const price = parseFloat(amountField.getAttribute('data-price'));
                        const quantity = parseInt(amountField.value);
                        totalPrice += price * quantity;
                    });
                    document.getElementById('totalNumPrice').textContent = totalPrice.toFixed(2);
                    priceToPay.value = totalPrice.toFixed(2);
                }
                updateTotalPrice();
            });

            function refreshAndGoToHistory() {
                window.location.reload();
                setTimeout(function() {
                    window.location.href = '/history';
                }, 100);
            }
        </script>
</body>

</html>