<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ร้านติ่มซำ ยินดีต้อนรับ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ URL::asset('image/DimsumLogo.png')}}" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');

        * {
            font-family: "Bai Jamjuree", sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            color: white;
            background-image: url("{{ URL::asset('image/dimsum-background.jpg')}}");
            background-size: 110vw 110vh;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            z-index: 0;
        }

        .background-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .content {
            text-align: center;
            z-index: 2;
        }
        img {
            margin: 50px;
            width: 25%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="background-overlay"></div>
    <div class="content">
        <h1>ยินดีต้อนรับเข้าสู่ร้านอาหารติ่มซำ</h1>
        <h2>โปรดสแกน QRcode ที่โต๊ะของท่านเพื่อเริ่มสั่งอาหาร</h2>
        <img src="{{ URL::asset('image/welcome.png')}}" alt="">
    </div>
</body>

</html>
