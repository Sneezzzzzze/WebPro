<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wait</title>
    <link rel="stylesheet" href="{{ URL::asset('css/food_page/status_style.css'); }}">
</head>
<body>
    <h1 id="text">พวกเราได้รับออเดอร์ของคุณแล้ว</h1>
    <h2 id="subtext">กรุณารอสักครู่</h2>
    <img src="https://cdn.dribbble.com/users/2556713/screenshots/7569532/media/266e0452b1ce6ebebee6d3d8871d6ddd.gif" alt="chef ian" id="image1" width="750" />
    <button id="mainMenuButton" onclick="test()">next</button>

    <script>
        function test() {
            // Change image source
            document.getElementById('image1').src = "https://th.bing.com/th/id/OIP.e-79gsYn5gujmPhIoUq-TQHaFj?rs=1&pid=ImgDetMain";
            
            // Change text content
            var maintext = document.getElementById('text');
            var subtext = document.getElementById('subtext');
            maintext.textContent = "อาหารของคุณเสร็จแล้ว";
            subtext.textContent = "ขอบคุณที่รอ";

            // Create and append the new button
            createButton();
        }

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

            // Add click event listener to navigate back to "/Table/A1"
            button.addEventListener("click", function() {
                window.location.href = "/Table/A1";
            });

            // Append the button to the body
            document.body.appendChild(button);
        }
    </script>
</body>
</html>
