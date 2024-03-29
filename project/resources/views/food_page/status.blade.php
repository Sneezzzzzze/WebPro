<?php

use Illuminate\Support\Facades\DB;

session_start();

// Get the previous URL to use for redirection
$previousUrl = $_SERVER['HTTP_REFERER'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wait</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/food_page/status_style.css'); }}">
    <link rel="icon" href="{{ URL::asset('image/DimsumLogo.png')}}" type="image/x-icon">
    <script>
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    </script>
</head>

<body background="https://www.it.kmitl.ac.th/~pattarachai/PIC/BG/stone.gif" link="#0000BB">
    <h1 id="text">พวกเราได้รับออเดอร์ของคุณแล้ว</h1>
    <h2 id="subtext">กรุณารอสักครู่</h2>
    <img src="https://media.giphy.com/media/kYqVAj5QNOXug/giphy.gif" id="image1" width="450" />
    <br>
    <br>
    <br>
    <?php
    if (isset($_SESSION['table'])) {
        $table = $_SESSION['table'];

        // Count all orders that are not finished for this table
        $orderCount = DB::table('Order')
            ->where('TableName', $table)
            ->where('status', 'กำลังทำ')
            ->count();

        echo "<p>รายการที่ยังไม่เสร็จ $table: $orderCount</p>";
    }
    ?>
    <script>
        function all() {
            document.getElementById("image1").src = "https://www.nicepng.com/png/full/32-324680_like-emoji-smiley-face-thumbs-up.png";
            var maintext = document.getElementById("text");
            var subtext = document.getElementById("subtext");
            maintext.textContent = "อาหารของคุณเสร็จแล้ว";
            subtext.textContent = "ขอบคุณที่รอ";
            createButton();

            function createButton() {
                var oldButton = document.getElementById("mainMenuButton");
                if (oldButton) {
                    oldButton.remove();
                }
                var button = document.createElement("button");
                button.textContent = "กลับสู่หน้าหลัก";
                button.classList.add("mainmenu_btn");
                button.id = "mainMenuButton";
                button.addEventListener("click", function() {
                    window.location.href = "<?php echo $table; ?>";
                });
                document.body.appendChild(button);
            }
            // Stop refreshing the page
            clearInterval(refreshInterval);
        }

        // Refresh the page every 10 seconds initially
        var refreshInterval = setInterval(function() {
            window.location.reload();
        }, 10000);
    </script>
    <?php
    if ($orderCount === 0) {
        echo '<script>all();</script>';
        // unset($_SESSION['count']);
    }
    ?>
</body>

</html>