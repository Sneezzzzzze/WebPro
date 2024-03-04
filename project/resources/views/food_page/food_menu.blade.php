<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

    $dimsum = DB::table('Food')
        ->select('Name', 'Category', 'Price', 'Image')
        ->where('Category', 'ติ่มซำ')
        ->get();
    $fried = DB::table('Food')
        ->select('Name', 'Category', 'Price', 'Image')
        ->where('Category', 'ติ่มซำทอด')
        ->get();

    $fried = DB::table('Food')
        ->select('Name', 'Category', 'Price', 'Image')
        ->where('Category', 'ติ่มซำทอด')
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
    <div class="container">
        <!-- NavBar with Home Icon -->
        <div class="nav-bar">
            <div class="logo">
                <span>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                        </svg>
                    </a>
                </span>
            </div>
            <a href="/Table/cart" role="button" aria-expanded="false" style="padding-left: 800px">
                <span class="fa fa-shopping-cart" style="font-size:36px"></span><span class="caret"></span>
            </a>
        </div>
        <!-- Hero Image -->
        <div class="hero-image">
            <div class="hero-text">
                <h1>เมนูอาหาร</h1>
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
            <div class="carousel-view">
                <button id="prev-btn" class="prev-btn">
                    <svg viewBox="0 0 512 512" width="20" title="chevron-circle-left">
                        <path d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z" />
                    </svg>
                </button>
                <div id="item-list" class="item-list">
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_1f66d010ca2e45a99bfd2ed178a504be~mv2.jpg/v1/fill/w_363,h_363,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_1f66d010ca2e45a99bfd2ed178a504be~mv2.jpg" />
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_10dbbfc2ae8040ccaf532b1afb4a86e4~mv2.jpg/v1/fill/w_363,h_363,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_10dbbfc2ae8040ccaf532b1afb4a86e4~mv2.jpg" />
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_9feb609f26e844dba37f1d4994443129~mv2.jpg/v1/fill/w_363,h_363,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_9feb609f26e844dba37f1d4994443129~mv2.jpg" />
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_67b92665297f4935a6cb136a0062b573~mv2.jpg/v1/fill/w_366,h_366,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_67b92665297f4935a6cb136a0062b573~mv2.jpg" />
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_573694f7dbc0465193743017d158c21c~mv2.jpg/v1/fill/w_363,h_363,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_573694f7dbc0465193743017d158c21c~mv2.jpg" />
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_5055347a972446e6b3bb39641c641625~mv2.jpg/v1/fill/w_366,h_366,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_5055347a972446e6b3bb39641c641625~mv2.jpg" />
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_dc71e5534509418b8557fa8abd79aac2~mv2.jpg/v1/fill/w_363,h_363,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_dc71e5534509418b8557fa8abd79aac2~mv2.jpg" />
                </div>
                <button id="next-btn" class="next-btn">
                    <svg viewBox="0 0 512 512" width="20" title="chevron-circle-right">
                        <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z" />
                    </svg>
                </button>
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
                    <img src="{{$dimsums->Image}}" alt="" />
                    <div class="title">{{$dimsums->Name}}</div>
                    <div class="location">{{$dimsums->Category}}</div>
                    <div class="order_info">
                        <div class="price">{{$dimsums->Price}}</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

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
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
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
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
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
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
