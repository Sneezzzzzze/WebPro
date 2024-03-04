<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/chef/styles.css'); }}">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <ul style="margin-bottom:10px;">
        <!-- <li><a class="active" href="#order">Order</a></li>
        <li><a href="index.html">Food</a></li> -->
    </ul>
    <div style="display:flex; margin-bottom:10px;">
        <a style="color: white; text-decoration: none;" href="index.html"><div class="backbutton" style="margin-right:20px;">Back</div></a>
        <div class="backbutton" onclick="newOrder()">Test create</div>
    </div>
    <div id="box" class="center" style="display:grid; grid-template-columns:auto auto">

        <div id="orderCount" style="margin-left:20px; border-radius:15px; color: white; padding: 10px; width: 600px; height: 200px; margin-bottom: 5px; display: flex; background-color: #FFB27A;">
            <div class="center" style="border-radius:15px; width: 50px; height: 100%; background-color: #870000;">
                <h1 class="center">1</h1>
            </div>
                <img src="https://ih0.redbubble.net/image.1228442711.9112/raf,360x360,075,t,fafafa:ca443f4786.jpg" style="border-radius:15px; padding-left: 5px; padding-right: 5px; width: 180px; height: 180px"></img>
                <div style="border-radius:15px; padding-left: 30px; background-color: #4f3026; width: 100%">
                    <div style="padding-top:3%">
                        <h5>orderName</h5>
                            <h5>Tables: tableNum</h5>
                            <h5>Order coming in at: 00:00:00</h5>
                    </div>
                    <div style="padding-top:3%">
                        <button class="btn btn-success btn-lg" style="width:100px; height:50px; font-size:25px">Done</button>
                    </div>
                </div>
        </div>

        <div id="orderCount" style="margin-left:20px; border-radius:15px; color: white; padding: 10px; width: 600px; height: 200px; margin-bottom: 5px; display: flex; background-color: #FFB27A;">
            <div class="center" style="border-radius:15px; width: 50px; height: 100%; background-color: #870000;">
                <h1 class="center">1</h1>
            </div>
                <img src="https://ih0.redbubble.net/image.1228442711.9112/raf,360x360,075,t,fafafa:ca443f4786.jpg" style="border-radius:15px; padding-left: 5px; padding-right: 5px; width: 180px; height: 180px"></img>
                <div style="border-radius:15px; padding-left: 30px; background-color: #4f3026; width: 100%">
                    <div style="padding-top:3%">
                        <h5>orderName</h5>
                            <h5>Tables: tableNum</h5>
                            <h5>Order coming in at: 00:00:00</h5>
                    </div>
                    <div style="padding-top:3%">
                        <button class="btn btn-success btn-lg" style="width:100px; height:50px; font-size:25px">Done</button>
                    </div>
                </div>
        </div>

        <div id="orderCount" style="margin-left:20px; border-radius:15px; color: white; padding: 10px; width: 600px; height: 200px; margin-bottom: 5px; display: flex; background-color: #FFB27A;">
            <div class="center" style="border-radius:15px; width: 50px; height: 100%; background-color: #870000;">
                <h1 class="center">1</h1>
            </div>
                <img src="https://ih0.redbubble.net/image.1228442711.9112/raf,360x360,075,t,fafafa:ca443f4786.jpg" style="border-radius:15px; padding-left: 5px; padding-right: 5px; width: 180px; height: 180px"></img>
                <div style="border-radius:15px; padding-left: 30px; background-color: #4f3026; width: 100%">
                    <div style="padding-top:3%">
                        <h5>orderName</h5>
                            <h5>Tables: tableNum</h5>
                            <h5>Order coming in at: 00:00:00</h5>
                    </div>
                    <div style="padding-top:3%">
                        <button class="btn btn-success btn-lg" style="width:100px; height:50px; font-size:25px">Done</button>
                    </div>
                </div>
        </div>

        <div id="orderCount" style="margin-left:20px; border-radius:15px; color: white; padding: 10px; width: 600px; height: 200px; margin-bottom: 5px; display: flex; background-color: #FFB27A;">
            <div class="center" style="border-radius:15px; width: 50px; height: 100%; background-color: #870000;">
                <h1 class="center">1</h1>
            </div>
                <img src="https://ih0.redbubble.net/image.1228442711.9112/raf,360x360,075,t,fafafa:ca443f4786.jpg" style="border-radius:15px; padding-left: 5px; padding-right: 5px; width: 180px; height: 180px"></img>
                <div style="border-radius:15px; padding-left: 30px; background-color: #4f3026; width: 100%">
                    <div style="padding-top:3%">
                        <h5>orderName</h5>
                            <h5>Tables: tableNum</h5>
                            <h5>Order coming in at: 00:00:00</h5>
                    </div>
                    <div style="padding-top:3%">
                        <button class="btn btn-success btn-lg" style="width:100px; height:50px; font-size:25px">Done</button>
                    </div>
                </div>
        </div>

    </div>
</body>
</html>