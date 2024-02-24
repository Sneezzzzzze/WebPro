<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการร้านอาหาร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body,
        .container {
            margin: 0;
            padding: 0;
            background-color: #FEDD9E;
        }

        .nav-bar {
            display: grid;
            grid-template-columns: auto auto;
            background-color: #FFA071;
            width: 100vw;
            height: auto;
            padding: 10px;
        }

        .menu-bar {
            display: flex;
            justify-content: right;
        }

        .logo,
        .menu-bar {
            padding-left: 100px;
            padding-right: 100px;
        }

        .menu-bar>span {
            padding-right: 20px;
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

        .header {
            display: grid;
            grid-template-columns: repeat(2, 6fr);
            margin: 20px
        }
        .grid-left {
            margin-left: 110px;
        }

        .grid-right {
            display: flex;
            justify-content: right;
        }

        .btn-success {
            background-color: #BFEA7C;
            color: black;
        }

        .filter {
            width: 200px;
            height: 42px;
            text-align: left;
            position: relative;
        }

        .filter::after {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        }

        #delete-outline {
            border: none;
            background-color: transparent;
        }

        #delete-outline:focus {
            border: none;
            outline: none;
        }

        .input-group {
            width: 350px;
        }
    </style>
</head>

<body>
    <div class="container">
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

            <div class="menu-bar">
                <span>
                    <a href="#">ตรวจสอบยอดขาย</a>
                </span>
                <span>
                    <a href="#">แผนผังร้านอาหาร</a>
                </span>
                <span>
                    <a href="#">ข้อมูลอาหาร</a>
                </span>
                <span>
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </a>
                </span>
            </div>
        </div>

        <div class="header">
            <div class="grid-left">
                <button class="btn btn-success">เพิ่มเมนู</button>
                <button type="button" class="btn btn-outline-secondary dropdown-toggle filter" data-bs-toggle="dropdown" aria-expanded="false">
                    ประเภท
                </button>
                <button type="button" class="btn btn-outline-secondary dropdown-toggle filter" data-bs-toggle="dropdown" aria-expanded="false">
                    หมวดหมู่
                </button>
            </div>
            <div class="grid-right">
                <form action="" method="">
                    <div class="input-group">
                        <input type="text" class="form-control" name="Search-tab" id="s-tab" placeholder="ค้นหารายการอาหาร" aria-label="ค้นหารายการอาหาร" aria-describedby="addon-wrapping">
                        <span class="input-group-text" id="addon-wrapping">
                            <button onclick="" id="delete-outline">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>