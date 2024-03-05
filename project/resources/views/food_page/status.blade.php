<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wait</title>
    <!-- <link rel="stylesheet" href="{{ URL::asset('css/food_page/status_style.css'); }}"> -->
    <link rel="stylesheet" href="status_style.css">

</head>
<body>
    <h1 id="text">พวกเราได้รับออเดอร์ของคุณแล้ว</h1>
    <h2 id="subtext">กรุณารอสักครู่</h2>
    <img src="https://cdn.dribbble.com/users/2556713/screenshots/7569532/media/266e0452b1ce6ebebee6d3d8871d6ddd.gif" alt="chef ian" id="image1" width="750" />
    <button onclick="test()">change text</button>
    <script>
        function goBack() {
            button.addEventListener("click", function() {
                window.location.href = "/Table/A1";
            });

        }
        function test() {
            document.getElementById('image1').src = "https://th.bing.com/th/id/OIP.e-79gsYn5gujmPhIoUq-TQHaFj?rs=1&pid=ImgDetMain";
            
            var button = document.createElement("button");
            button.textContent = "กลับสู่หน้าหลัก";
            button.classList.add("mainmenu_btn");

            document.body.appendChild(button);
            
            // Text
            var maintext = document.getElementById('text');
            var subtext = document.getElementById('subtext');
            maintext.textContent = "อาหารของคุณเสร็จแล้ว";
            subtext.textContent = "ขอบคุณที่รอ";
            
            createButton();
            }
    </script>
</body>
</html>
