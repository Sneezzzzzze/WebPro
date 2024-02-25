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
            background-color: white;
        }

        .nav-bar {
            display: grid;
            grid-template-columns: auto auto;
            background-color: #C97926;
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
            margin-left: 50px;
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

        .food-table {
            margin-left: 70px;
        }

        td {
            margin: auto;
            width: 30%;
            text-align: left;
            vertical-align: middle;
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
                <form method="POST">
                    <button class="btn btn-success" name="add" id="add">เพิ่มเมนู</button>
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle filter" data-bs-toggle="dropdown" aria-expanded="false">
                        หมวดหมู่
                    </button>
                </form>
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

        <div class="food-table">
            <table class="table table-hover">
                <tr>
                    <th>ชื่ออาหาร</th>
                    <th>หมวดหมู่</th>
                    <th>ราคา (บาท)</th>
                    <th>แก้ไข/ลบ</th>
                </tr>
                <!-- <tr>
                    <td>ฮะเก๋า</td>
                    <td>ติ่มซำ</td>
                    <td>50</td>
                    <td>
                        <button type="button" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                <path d="M16 4.5a4.5 4.5 0 0 1-1.703 3.526L13 5l2.959-1.11q.04.3.041.61" />
                                <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.5 4.5 0 0 0 11.5 9m-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376M3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                            </svg>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                            </svg>
                        </button>
                    </td>
                </tr> -->

                <?php
                class MyDB extends SQLite3
                {
                    function __construct()
                    {
                        $this->open("Restaurant.db");
                    }
                }

                $sql = "SELECT Name, Category, Price
                        FROM Food;";
                $result = $db->query($sql);

                while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['Name'] . '</td>';
                    echo '<td>' . $row['Category'] . '</td>';
                    echo '<td>' . $row['Price'] . '</td>';
                    echo '<td>';
                    echo '<button type="button" class="btn btn-warning">';
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">';
                    echo '<path d="M16 4.5a4.5 4.5 0 0 1-1.703 3.526L13 5l2.959-1.11q.04.3.041.61" />';
                    echo '<path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.5 4.5 0 0 0 11.5 9m-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376M3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />';
                    echo '</svg>';
                    echo '</button>';
                    echo '<button type="button" class="btn btn-danger">';
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">';
                    echo '<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />';
                    echo '</svg>';
                    echo '</button>';
                    echo '</td>';
                    echo '</tr>';
                }

                $db->close();
                ?>
            </table>
        </div>
    </div>
</body>

</html>