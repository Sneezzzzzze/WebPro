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
    <div class="nav-bar">
        <div class="logo">
            <span>
                <a href="">
                    <svg width="100" height="35" viewBox="0 0 188 145" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="94" cy="42" rx="94" ry="25" fill="#C97026" />
                        <rect y="42" width="188" height="78" fill="#C97026" />
                        <ellipse cx="94" cy="67" rx="91" ry="60" fill="white" />
                        <path d="M187.999 41C183.499 67.6667 6.99996 67.6667 -3.53854e-05 41V121C-2.91718e-05 151.5 187.999 154 187.999 121V41Z" fill="#870000" />
                        <ellipse cx="94.5" cy="12" rx="5.5" ry="9" fill="white" />
                        <ellipse cx="67.1142" cy="17.3147" rx="4.5" ry="28.3343" transform="rotate(61.9015 67.1142 17.3147)" fill="white" />
                        <ellipse cx="121.114" cy="17.3154" rx="4.5" ry="28.3343" transform="rotate(-61.9 121.114 17.3154)" fill="white" />
                    </svg>
                </a>
            </span>
        </div>
    </div>

    <div class="center-point" style="margin: 30px;">
        <h1>รายการอาหารที่ลูกค้าสั่ง</h1>
    </div>

    <div class="center-card">
        <div class="container" id="orderCount0">
            <div class="orderNum center-point">
                <!-- <h1 id="orderID0">0</h1> -->
            </div>
            <div class="menu-list">
                <div class="toDoList">
                    <span>
                        <h2 id="table"></h2>
                        <h3>เวลาที่สั่ง : 00:00:00 น.</h3>
                    </span>
                    <div>
                        <h4>รายการอาหารที่สั่ง :</h4>
                        <p id="foodName"></p>
                    </div>
                </div>
                <div class="done">
                    <button class="btn btn-success btn-lg" onclick=deleteSelf(0)>
                        <svg xmlns="http://www.w3.org/2000/svg" width="136" height="462" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="container" id="orderCount1">
            <div class="orderNum center-point">
                <!-- <h1 id="orderID1">1</h1> -->
            </div>
            <div class="menu-list">
                <div class="toDoList">
                    <span>
                        <h2 id="table"></h2>
                        <h3>เวลาที่สั่ง : 00:00:00 น.</h3>
                    </span>
                    <div>
                        <h4>รายการอาหารที่สั่ง :</h4>
                        <p id="foodName"></p>
                    </div>
                </div>
                <div class="done">
                    <button class="btn btn-success btn-lg" onclick=deleteSelf(0)>
                        <svg xmlns="http://www.w3.org/2000/svg" width="136" height="462" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="container" id="orderCount2">
            <div class="orderNum center-point">
                <!-- <h1 id="orderID2">2</h1> -->
            </div>
            <div class="menu-list">
                <div class="toDoList">
                    <span>
                        <h2 id="table"></h2>
                        <h3>เวลาที่สั่ง : 00:00:00 น.</h3>
                    </span>
                    <div>
                        <h4>รายการอาหารที่สั่ง :</h4>
                        <p id="foodName"></p>
                    </div>
                </div>
                <div class="done">
                    <button class="btn btn-success btn-lg" onclick=deleteSelf(0)>
                        <svg xmlns="http://www.w3.org/2000/svg" width="136" height="462" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                        </svg>
                    </button>
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
        table.innerText = "โต๊ะ: " + tableNum

        function newOrder() {
            //Provide order count and keep track on the amount of order
            orderCount++;
        }

        function deleteSelf(check) {
            let order0 = document.getElementById('orderCount0');
            let order1 = document.getElementById('orderCount1');
            let order2 = document.getElementById('orderCount2');
            if (check === 0) {
                order0.remove();
                a
            } else if (check === 1) {
                order1.remove();
            } else {
                order2.remove();
            }
        }
    </script>
</body>

</html>