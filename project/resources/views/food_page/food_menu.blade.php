<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>menu</title>

    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');

        /* nav_bar&base */
        body,
        .container {
            font-family: "Bai Jamjuree", sans-serif;
            font-weight: 200;
            font-style: normal;
            display: grid;
            margin: 0;
            padding: 0;
        }

        .nav-bar {
            display: grid;
            grid-template-columns: auto auto;
            background-color: #C97926;
            width: 100vw;
            height: 50px;
            padding: 10px;
        }

        .logo {
            padding-left: 100px;
            padding-right: 100px;
        }

        .logo>span {
            padding-left: 20px;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            opacity: 0.7;
        }

        html {
            height: 100%;
            scroll-behavior: smooth;
        }
        /* End nav_bar&base */

        /* The hero image */
        .hero-image {
            /* Use "linear-gradient" to add a darken background effect to the image. This will make the text easier to read */
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://cdn.cnn.com/cnnnext/dam/assets/160325033254-hk-dim-sum-fook-lam-moon.jpg");
            /* margin-left: 100px; */

            /* Set a specific height */
            height: 400px;
            
            /* Position and center the image to scale nicely on all screens */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        /* Place text in the middle of the image */
        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
        /* End The hero image */

        /* Recommendation Line */
        .recom_text {
            text-align: center;
        }

        .catagory_text {
            text-align: center;
        }

        .horizontal::before{
            content: "";
            display: inline-block;
            border:1px solid black;
            margin-right:10px;
            margin-bottom: 3px;
            width: 600px;
        }

        .horizontal::after{
            content: "";
            display: inline-block;
            border:1px solid black;
            margin-left:10px;
            margin-bottom: 3px;
            width: 600px;
        }
        /* End Recommendation Line */

        /* Recommendation img */
        img {
            border: 10px solid #BFBFBF;
            border-radius: 5px;
        }

        button{
            border: none;
            cursor: pointer;
            color: white;
            background: none;
            transition: all .3s ease-in-out;
        }

        .rec_food {
            width: 100%;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .carousel-view {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            padding: 44px 0;
            transition: all 0.25s ease-in;
        }

        .carousel-view .item-list {
            max-width: 950px;
            width: 70vw;
            padding: 50px 10px;
            display: flex;
            gap: 48px;
            scroll-behavior: smooth;
            transition: all 0.25s ease-in;
            -ms-overflow-style: none;
            scrollbar-width: none;
            overflow: auto;
            scroll-snap-type: x mandatory;
        }

        .item-list::-webkit-scrollbar {
            display: none;
        }

        .prev-btn {
            cursor: pointer;
        }

        .next-btn {
            cursor: pointer;
        }

        .item {
            scroll-snap-align: center;
            min-width: 120px;
            height: 120px;
            background-color: deeppink;
            border-radius:8px;
        }
        /* End Recommendation img */

        /* food&order */
        .section {
            width: 100%;
            padding: 40px 0;
        }

        .type_container,
        .menu_container {
            padding: 0 30px;
        }

        .btn {
            padding: 14px 20px;
            border-radius: 4px;
            color: #fff;
            text-decoration: none;
            font-size: 22px;
            display: inline-block;
            margin: 20px 0;
        }

        .category {
            list-style: none;
            text-align: center;
            margin: 20px 0 40px 0;
        }

        .category li {
            display: inline-block;
            margin: 0 15px;
            font-size: 20px;
            font-weight: 500;
            cursor: pointer;
        }

        .category li.active {
            color: #C97926;
        }

        .restaurant_menu {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .menu_item {
            width: 260px;
            margin: 0 auto;
            border-radius: 6px;
            overflow: hidden;
        }

        .menu_item img {
            width: 100%;
        }

        .order_info {
            justify-content: space-between;
        }

        .btn_menu {
            padding: 6px 10px;
            font-size: 16px;
            text-align: center;
            background: #fff;
            border: 1px solid #C97926;
            color: #C97926;
        }

        .title {
            font-size: 18px;
            font-weight: 300;
            margin: 8px 0;
        }   

        .location {
            font-size: 18px;
            font-weight: 500;
        }
        /* End food&order */

        .menu-btns{
            padding: 0.6rem 0;
            display: flex;
            justify-content: center;
        }
        .menu-btn{
            background: none;
            border: none;
            color: black;
            display: block;
            margin: 0 1rem;
            cursor: pointer;
            outline: 0;
            transition: opacity 0.4s ease-out;
        }
        .menu-btn::after{
            content: "";
            display: block;
            height: 2px;
            margin-left: auto;
            margin-right: auto;
            background: #C97926;
            margin-top: 0.5rem;
            width: 0;
            transition: width 0.4s ease-out;
        }
        .menu-btn:hover::after{
            width: 100%;
        }
        .menu-btn:hover{
            opacity: 0.8;
        }
        .active-btn{
            color: #C97926;
        }

    </style>
</head>

<script>
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
</script>

<body background="https://www.it.kmitl.ac.th/~pattarachai/PIC/BG/stone.gif" link="#0000BB">
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
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_1f66d010ca2e45a99bfd2ed178a504be~mv2.jpg/v1/fill/w_363,h_363,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_1f66d010ca2e45a99bfd2ed178a504be~mv2.jpg"/>
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_10dbbfc2ae8040ccaf532b1afb4a86e4~mv2.jpg/v1/fill/w_363,h_363,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_10dbbfc2ae8040ccaf532b1afb4a86e4~mv2.jpg"/>
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_9feb609f26e844dba37f1d4994443129~mv2.jpg/v1/fill/w_363,h_363,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_9feb609f26e844dba37f1d4994443129~mv2.jpg"/>
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_67b92665297f4935a6cb136a0062b573~mv2.jpg/v1/fill/w_366,h_366,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_67b92665297f4935a6cb136a0062b573~mv2.jpg"/>
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_573694f7dbc0465193743017d158c21c~mv2.jpg/v1/fill/w_363,h_363,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_573694f7dbc0465193743017d158c21c~mv2.jpg"/>
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_5055347a972446e6b3bb39641c641625~mv2.jpg/v1/fill/w_366,h_366,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_5055347a972446e6b3bb39641c641625~mv2.jpg"/>
                    <img id="item" class="item" src="https://static.wixstatic.com/media/e669da_dc71e5534509418b8557fa8abd79aac2~mv2.jpg/v1/fill/w_363,h_363,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_dc71e5534509418b8557fa8abd79aac2~mv2.jpg"/>
                </div>
                <button id="next-btn" class="next-btn">
                <svg viewBox="0 0 512 512" width="20" title="chevron-circle-right">
                <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z" />
                </svg>
                </button>
            </div>
        </div>

        <div class = "menu-btns">
            <button type = "button" class = "menu-btn" id = "stream" onclick="location.href='#section1'">ติ่มซำนึ่ง</button>
            <button type = "button" class = "menu-btn" id = "fry" onclick="location.href='#section2'">ติ่มซำทอด</button>
            <button type = "button" class = "menu-btn" id = "dessert" onclick="location.href='#section3'">ของหวาน</button>
            <button type = "button" class = "menu-btn" id = "drink" onclick="location.href='#section4'">เครื่องดื่ม</button>
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

        <div class="menu_container">
            <div class="restaurant_menu">
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_b3e85e5777ce4979884960b782113fec~mv2.jpg/v1/fill/w_1257,h_943,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/e669da_b3e85e5777ce4979884960b782113fec~mv2.jpg" alt="" />
                    <div class="title">ยกทัพติ่มซำ</div>
                    <div class="location">ติ่มซำนึ่ง</div>
                    <div class="order_info">
                        <div class="price">159.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_f252fc5f301f47d48604b962b9658d56~mv2.jpg/v1/fill/w_1257,h_943,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/e669da_f252fc5f301f47d48604b962b9658d56~mv2.jpg" alt="" />
                    <div class="title">ยกทัพขนมจีบ</div>
                    <div class="location">ติ่มซำนึ่ง</div>
                    <div class="order_info">
                        <div class="price">149.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_ab0e12bd07b94358a11c3def8344669a~mv2.jpg/v1/fill/w_1183,h_943,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/e669da_ab0e12bd07b94358a11c3def8344669a~mv2.jpg" alt="" />
                    <div class="title">ขนมจีบกุ้งผักโขมชีส</div>
                    <div class="location">ติ่มซำนึ่ง</div>
                    <div class="order_info">
                        <div class="price">59.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_4cffc3fb6bac4ccbba00acf3cbd56f55~mv2.jpg/v1/fill/w_964,h_723,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/e669da_4cffc3fb6bac4ccbba00acf3cbd56f55~mv2.jpg" alt="" />
                    <div class="title">ซาลาเปาโชคดีลาวา</div>
                    <div class="location">ติ่มซำนึ่ง</div>
                    <div class="order_info">
                        <div class="price">55.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_207cbd849af14c5583314fa2e4b976b9~mv2.jpg/v1/fill/w_965,h_724,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/e669da_207cbd849af14c5583314fa2e4b976b9~mv2.jpg" alt="" />
                    <div class="title">ซาลาเปาหมูแดง</div>
                    <div class="location">ติ่มซำนึ่ง</div>
                    <div class="order_info">
                        <div class="price">45.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_71f1afad574849a686e59a778ec22211~mv2.jpg/v1/fill/w_250,h_169,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_71f1afad574849a686e59a778ec22211~mv2.jpg" alt="" />
                    <div class="title">ขนมจีบกุ้งต้มยำ</div>
                    <div class="location">ติ่มซำนึ่ง</div>
                    <div class="order_info">
                        <div class="price">59.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category Line -->
        <div class="catagory_text" id="section2">
            <h4>
            <span class="horizontal">อาหารประเภทติ่มซำทอด</span>
            </h4>
        </div>
        <div class="menu_container">
            <div class="restaurant_menu">
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_9e505f3636344628a585b7871d95e41a~mv2_d_1667_1250_s_2.jpg/v1/fill/w_251,h_169,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_9e505f3636344628a585b7871d95e41a~mv2_d_1667_1250_s_2.jpg" alt="" />
                    <div class="title">ซาลาเปาโชคดีลาวาทอด</div>
                    <div class="location">ติ่มซำทอด</div>
                    <div class="order_info">
                        <div class="price">55.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_55c6f454f9b843128458320ee4318f46~mv2.jpg/v1/fill/w_251,h_169,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_55c6f454f9b843128458320ee4318f46~mv2.jpg" alt="" />
                    <div class="title">เผือกทอดลาวา</div>
                    <div class="location">ติ่มซำทอด</div>
                    <div class="order_info">
                        <div class="price">65.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_cc8583df1935403ebbecde87defef00c~mv2.jpg/v1/fill/w_251,h_169,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_cc8583df1935403ebbecde87defef00c~mv2.jpg" alt="" />
                    <div class="title">เผือกทอด</div>
                    <div class="location">ติ่มซำทอด</div>
                    <div class="order_info">
                        <div class="price">59.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_6fb5e3af52504307b66e6cf30ab74571~mv2.jpg/v1/fill/w_251,h_169,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_6fb5e3af52504307b66e6cf30ab74571~mv2.jpg" alt="" />
                    <div class="title">แฮกึ๋น</div>
                    <div class="location">ติ่มซำทอด</div>
                    <div class="order_info">
                        <div class="price">69.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_2f7c7e8e2e5f4dd5aa9922814a3e5aea~mv2.jpg/v1/fill/w_251,h_169,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_2f7c7e8e2e5f4dd5aa9922814a3e5aea~mv2.jpg" alt="" />
                    <div class="title">ปลาท่องโก๋ดิป</div>
                    <div class="location">ติ่มซำทอด</div>
                    <div class="order_info">
                        <div class="price">49.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_039e2b34cff445e6b54177fb8f355798~mv2.jpg/v1/fill/w_251,h_169,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_039e2b34cff445e6b54177fb8f355798~mv2.jpg" alt="" />
                    <div class="title">ซาลาเปาไส้ครีมทอด</div>
                    <div class="location">ติ่มซำทอด</div>
                    <div class="order_info">
                        <div class="price">45.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
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
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_b7f38e8d5eb5455d954298a066a62931~mv2.jpg/v1/fill/w_253,h_175,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_b7f38e8d5eb5455d954298a066a62931~mv2.jpg" alt="" />
                    <div class="title">ลูกตาลนมสด</div>
                    <div class="location">ขนมหวาน</div>
                    <div class="order_info">
                        <div class="price">55.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_649d2f73472b41218b020e1cb6dc3631~mv2.jpg/v1/fill/w_253,h_175,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_649d2f73472b41218b020e1cb6dc3631~mv2.jpg" alt="" />
                    <div class="title">ทับทิมกรอบ</div>
                    <div class="location">ขนมหวาน</div>
                    <div class="order_info">
                        <div class="price">49.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_b778c823995a44009999c9c8be29d8e9~mv2.jpg/v1/fill/w_253,h_175,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_b778c823995a44009999c9c8be29d8e9~mv2.jpg" alt="" />
                    <div class="title">บัวลอยเผือก</div>
                    <div class="location">ขนมหวาน</div>
                    <div class="order_info">
                        <div class="price">49.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_f1fa411317874fc380ce5da45f6e1af3~mv2.jpg/v1/fill/w_253,h_175,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_f1fa411317874fc380ce5da45f6e1af3~mv2.jpg" alt="" />
                    <div class="title">สละลอยแก้ว</div>
                    <div class="location">ขนมหวาน</div>
                    <div class="order_info">
                        <div class="price">49.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_9ec46fd2f3494fbab4b6e0879884adcb~mv2.jpg/v1/fill/w_253,h_175,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_9ec46fd2f3494fbab4b6e0879884adcb~mv2.jpg" alt="" />
                    <div class="title">บัวลอยน้ำขิง</div>
                    <div class="location">ขนมหวาน</div>
                    <div class="order_info">
                        <div class="price">49.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://static.wixstatic.com/media/e669da_9cb22ed24ed84995927a21f60c5a1ad0~mv2.jpg/v1/fill/w_253,h_175,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_9cb22ed24ed84995927a21f60c5a1ad0~mv2.jpg" alt="" />
                    <div class="title">บัวลอย 4 เซียน</div>
                    <div class="location">ขนมหวาน</div>
                    <div class="order_info">
                        <div class="price">49.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
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
                <div class="menu_item">
                    <img src="https://www.fatehpharma.com/wp-content/uploads/2020/07/pepsi_cola_bottle_500ml.jpg" alt="" />
                    <div class="title">เป๊ปซี่ 500ml.</div>
                    <div class="location">เครื่องดื่ม</div>
                    <div class="order_info">
                        <div class="price">25.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://cdn0.woolworths.media/content/wowproductimages/large/038121.jpg" alt="" />
                    <div class="title">โค้ก 2l.</div>
                    <div class="location">เครื่องดื่ม</div>
                    <div class="order_info">
                        <div class="price">40.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://th.bing.com/th/id/OIP.pgEFe3HeXq2YVdULtYDjTgHaHa?w=500&h=500&rs=1&pid=ImgDetMain" alt="" />
                    <div class="title">ชาเขียว โออิชิ</div>
                    <div class="location">เครื่องดื่ม</div>
                    <div class="order_info">
                        <div class="price">15.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://th-test-11.slatic.net/p/e44bbb7b1c024743d158788bdaf21b8f.jpg" alt="" />
                    <div class="title">น้ำฟัก</div>
                    <div class="location">เครื่องดื่ม</div>
                    <div class="order_info">
                        <div class="price">25.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://img.wongnai.com/p/400x400/2023/05/10/d515d3e34b7a4b7ea554a99efa4a6edf.jpg" alt="" />
                    <div class="title">น้ำเก็กฮวย</div>
                    <div class="location">เครื่องดื่ม</div>
                    <div class="order_info">
                        <div class="price">20.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
                <div class="menu_item">
                    <img src="https://suckhoedoisong.qltns.mediacdn.vn/thumb_w/640/324455921873985536/2023/2/14/base64-1676355577881189087789.png" alt="" />
                    <div class="title">ชามะนาว</div>
                    <div class="location">เครื่องดื่ม</div>
                    <div class="order_info">
                        <div class="price">20.-</div>
                        <a href="#" class="btn btn_menu">สั่งเลย</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
