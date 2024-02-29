<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <title>menu</title>

    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');

        body,
        .container {
            margin: 0;
            padding: 0;
        }

        .nav-bar {
            display: grid;
            grid-template-columns: auto auto;
            background-color: #C97926;
            width: 100vw;
            height: auto;
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
            height: 50%;
            width: 100%;
            
            /* Position and center the image to scale nicely on all screens */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        /* Place text in the middle of the image */
        .hero-text {
            font-family: "Bai Jamjuree", sans-serif;
            font-weight: 200;
            font-style: normal;
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

        * {
            box-sizing: border-box;
        }

        .row > .column {
            padding: 0 8px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .column {
            float: left;
            width: 20%;
        }

    </style>
</head>
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
        <!-- Recommendation -->
        <div class="recom_text">
            <h4>
                <span class="horizontal">เมนูแนะนำ</span>
            </h4>
        </div>
        <!-- Recommended food -->
        <div class="row">
            <div class="column">
                <img src="https://static.wixstatic.com/media/e669da_0b3da7703c4b47968360b567dad8ddd2~mv2.jpg/v1/fill/w_251,h_169,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_0b3da7703c4b47968360b567dad8ddd2~mv2.jpg" style="width:100%">
            </div>
            <div class="column">
                <img src="https://static.wixstatic.com/media/e669da_0cf068c6475543619dc5f922ec015b1e~mv2.jpg/v1/fill/w_147,h_110,al_c,q_80,usm_0.66_1.00_0.01,blur_2,enc_auto/e669da_0cf068c6475543619dc5f922ec015b1e~mv2.jpg" style="width:100%">
            </div>
            <div class="column">
                <img src="https://static.wixstatic.com/media/e669da_1e0491651b7b435dbf173a780a3fed93~mv2.jpg/v1/fill/w_251,h_179,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_1e0491651b7b435dbf173a780a3fed93~mv2.jpg" style="width:100%">
            </div>
            <div class="column">
                <img src="https://static.wixstatic.com/media/e669da_2f7c7e8e2e5f4dd5aa9922814a3e5aea~mv2.jpg/v1/fill/w_251,h_169,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e669da_2f7c7e8e2e5f4dd5aa9922814a3e5aea~mv2.jpg" style="width:100%">
            </div>
        </div>
        <!-- Category -->
        <div class="catagory_text">
            <h4>
                <span class="horizontal">ประเภทของอาหาร</span>
            </h4>
        </div>
    </div>
</body>
</html>
