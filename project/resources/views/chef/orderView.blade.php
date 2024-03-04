<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/chef/styles.css'); }}">
    </head>

<body>
    <div class="nav-bar" style="margin-bottom:10px">
        <div class="logo">
            <span>
                <a href="">
                    <svg width="100" height="35" viewBox="0 0 188 145" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="94" cy="42" rx="94" ry="25" fill="#C97026" />
                        <rect y="42" width="188" height="78" fill="#C97026" />
                        <ellipse cx="94" cy="67" rx="91" ry="60" fill="white" />
                        <path
                            d="M187.999 41C183.499 67.6667 6.99996 67.6667 -3.53854e-05 41V121C-2.91718e-05 151.5 187.999 154 187.999 121V41Z"
                            fill="#870000" />
                        <ellipse cx="94.5" cy="12" rx="5.5" ry="9" fill="white" />
                        <ellipse cx="67.1142" cy="17.3147" rx="4.5" ry="28.3343"
                            transform="rotate(61.9015 67.1142 17.3147)" fill="white" />
                        <ellipse cx="121.114" cy="17.3154" rx="4.5" ry="28.3343"
                            transform="rotate(-61.9 121.114 17.3154)" fill="white" />
                    </svg>
                </a>
            </span>
        </div>
    </div>
    <div class="center" style="display:flex; margin-bottom:10px;">
        <h1>รายการอาหารที่ลูกค้าสั่ง</h1>
    </div>
    <div id="box" class="center" style="display:grid; grid-template-columns:auto auto">

        <div class="container" id="orderCount0"
            style="margin-left:20px; border-radius:15px; color: white; padding: 10px; width: 600px; height: 200px; margin-bottom: 5px; display: flex; background-color: #FFB27A;">
            <div class="center" style="border-radius:15px; width: 50px; height: 100%; background-color: #870000;">
                <h1 class="center" id="orderID0">0</h1>
            </div>
            <img src="https://ih0.redbubble.net/image.1228442711.9112/raf,360x360,075,t,fafafa:ca443f4786.jpg"
                style="border-radius:15px; padding-left: 5px; padding-right: 5px; width: 180px; height: 180px"></img>
            <div style="border-radius:15px; padding-left: 30px; background-color: #4f3026; width: 100%">
                <div style="padding-top:3%">
                    <h5 id="foodName"></h5>
                    <h5 id="table"></h5>
                    <h5>Order coming in at: 00:00:00</h5>
                </div>
                <div style="padding-top:3%">
                    <button class="btn btn-success btn-lg" style="width:100px; height:50px; font-size:25px"
                        onclick="deleteSelf(0)">Done</button>
                </div>
            </div>
        </div>

        <div class="container" id="orderCount1"
            style="margin-left:20px; border-radius:15px; color: white; padding: 10px; width: 600px; height: 200px; margin-bottom: 5px; display: flex; background-color: #FFB27A;">
            <div class="center" style="border-radius:15px; width: 50px; height: 100%; background-color: #870000;">
                <h1 class="center" id="orderID1">1</h1>
            </div>
            <img src="https://ih0.redbubble.net/image.1228442711.9112/raf,360x360,075,t,fafafa:ca443f4786.jpg"
                style="border-radius:15px; padding-left: 5px; padding-right: 5px; width: 180px; height: 180px"></img>
            <div style="border-radius:15px; padding-left: 30px; background-color: #4f3026; width: 100%">
                <div style="padding-top:3%">
                    <h5 id="foodName"></h5>
                    <h5 id="table"></h5>
                    <h5>Order coming in at: 00:00:00</h5>
                </div>
                <div style="padding-top:3%">
                    <button class="btn btn-success btn-lg" style="width:100px; height:50px; font-size:25px"
                        onclick="deleteSelf(1)">Done</button>
                </div>
            </div>
        </div>

        <div class="container" id="orderCount2"
            style="margin-left:20px; border-radius:15px; color: white; padding: 10px; width: 600px; height: 200px; margin-bottom: 5px; display: flex; background-color: #FFB27A;">
            <div class="center" style="border-radius:15px; width: 50px; height: 100%; background-color: #870000;">
                <h1 class="center" id="orderID2">2</h1>
            </div>
            <img src="https://ih0.redbubble.net/image.1228442711.9112/raf,360x360,075,t,fafafa:ca443f4786.jpg"
                style="border-radius:15px; padding-left: 5px; padding-right: 5px; width: 180px; height: 180px"></img>
            <div style="border-radius:15px; padding-left: 30px; background-color: #4f3026; width: 100%">
                <div style="padding-top:3%">
                    <h5 id="foodName"></h5>
                    <h5 id="table"></h5>
                    <h5>Order coming in at: 00:00:00</h5>
                </div>
                <div style="padding-top:3%">
                    <button class="btn btn-success btn-lg" style="width:100px; height:50px; font-size:25px"
                        onclick="deleteSelf(2)">Done</button>
                </div>
            </div>
        </div>

    </div>


    <script>
        let tableNum = 'A1'
        let orderName = 'Black Egg'

        let foodName = document.getElementById("foodName")
        foodName.innerText = orderName
        let table = document.getElementById("table")
        table.innerText = "Tables: " + tableNum
        function newOrder() {
            //Provide order count and keep track on the amount of order
            orderCount++;
        }

        function deleteSelf(check) {
            let order0 = document.getElementById('orderCount0')
            let order1 = document.getElementById('orderCount1')
            let order2 = document.getElementById('orderCount2')
            if (check === 0) {
                order0.remove()
            } else if (check === 1) {
                order1.remove()
            } else {
                order2.remove()
            }
        }
    </script>
</body>

</html>