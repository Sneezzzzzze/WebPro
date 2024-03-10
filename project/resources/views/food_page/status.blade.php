<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wait</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/food_page/status_style.css'); }}">
    <link rel="icon" href="{{ URL::asset('image/DimsumLogo.png')}}" type="image/x-icon">

    <meta http-equiv="refresh" content="10">
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

    session_start();
    ?>
    <h1 id="text">พวกเราได้รับออเดอร์ของคุณแล้ว</h1>
    <h2 id="subtext">กรุณารอสักครู่</h2>
    <img src="https://media.giphy.com/media/kYqVAj5QNOXug/giphy.gif" id="image1" width="450" />
    <br>
    <br>
    <br>
    <!-- <button id="mainMenuButton" onclick="test()">next</button> -->
    <?php
    if (isset($_SESSION['table'])) {
        $table = $_SESSION['table'];
    }

    if (isset($_SESSION['count'])) {
        $count = $_SESSION['count'];
    }
    $leastValues = DB::table('Order')
        ->where('TableName', $table)
        ->where('status', 'กำลังทำ')
        ->orderBy('time', 'asc')
        ->limit($count)
        ->get();
    
    $allDone = true;
    foreach ($leastValues as $value) {
        if ($value->status !== 'เสร็จแล้ว') {
            $allDone = false;
            break;
        }
    }
    ?>
    <script>
        function all() {
            document.getElementById("image1").src = "https://www.nicepng.com/png/full/32-324680_like-emoji-smiley-face-thumbs-up.png";

            // Change text content
            var maintext = document.getElementById("text");
            var subtext = document.getElementById("subtext");
            maintext.textContent = "อาหารของคุณเสร็จแล้ว";
            subtext.textContent = "ขอบคุณที่รอ";

            createButton();

            function createButton() {
                // Remove existing button if it exists
                var oldButton = document.getElementById("mainMenuButton");
                if (oldButton) {
                    oldButton.remove();
                }

                // Create a button element
                var button = document.createElement("button");
                button.textContent = "กลับสู่หน้าหลัก";
                button.classList.add("mainmenu_btn");

                // Set an id for the button for easy reference when removing
                button.id = "mainMenuButton";

                // Add click event listener to navigate back to "/Table/TableName"
                button.addEventListener("click", function() {
                    window.location.href = "/Table/{{$table}}";
                });

                // Append the button to the body
                document.body.appendChild(button);

            }
        }
    </script>
    <?php
    if ($allDone) {
        echo '<script>all();</script>';
    }
    ?>
</body>

</html>