<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>menu</title>

    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');

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
        }

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

        .order {
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

    </style>
</head>

<script>
    const prev = document.getElementById('prev-btn')
    const next = document.getElementById('next-btn')
    const list = document.getElementById('item-list')
        
    const itemWidth = 150
    const padding = 10
        
    prev.addEventListener('click',()=>{
      list.scrollLeft -= itemWidth + padding
    })
    
    next.addEventListener('click',()=>{
      list.scrollLeft += itemWidth + padding
    })
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
        <!-- Main Image -->
        <div class="hero-image">
            <div class="hero-text">
                <h1>เมนูอาหาร</h1>
            </div>
        </div>
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

        <!-- Category Line -->
        <!-- <div class="catagory_text">
            <h4>
                <span class="horizontal">ประเภทของอาหาร</span>
            </h4>
        </div> -->

        <div class="section" id="menu_type">
            <div class="type_container">
                <ul class="category">
                    <li class="active">ติ่มซำนึ่ง</li>
                    <li>ติ่มซำทอด</li>
                    <li>ของหวาน</li>
                    <li>เครื่องดื่ม</li>
                </ul>

            <div class="menu_container">
                <div class="restaurant_menu">
                    <div class="menu_item">
                        <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-1.jpg" alt="" />
                        <div class="title">Food Restaurant | Chineese & Thai</div>
                        <div class="location">Thailand, Bangkok</div>
                        <div class="order_info">
                            <div class="price">$10.00</div>
                            <a href="#" class="btn btn_menu">สั่งเลย</a>
                        </div>
                    </div>
                    <div class="menu_item">
                        <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-4.jpg" alt="" />
                        <div class="title">Food Restaurant | Chineese & Thai</div>
                        <div class="location">Thailand, Bangkok</div>
                        <div class="order_info">
                            <div class="price">$10.00</div>
                            <a href="#" class="btn btn_menu">สั่งเลย</a>
                        </div>
                    </div>
                    <div class="menu_item">
                        <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-6.jpg" alt="" />
                        <div class="title">Food Restaurant | Chineese & Thai</div>
                        <div class="location">Thailand, Bangkok</div>
                        <div class="order_info">
                            <div class="price">$10.00</div>
                            <a href="#" class="btn btn_menu">สั่งเลย</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
