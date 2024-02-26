<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการร้านอาหาร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
            display: flex;
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

        .grid-left>select {
            margin-left: 10px;
            width: 30%;
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
            width: 10%;
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
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">
                    เพิ่มเมนู
                </button>

                <!-- Modal -->
                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="add" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="" method="">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="add">เพิ่มรายการอาหาร</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>ชื่ออาหาร :</h6>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="ชื่ออาหาร" name="foodname" required>
                                    </div>
                                    <h6>หมวดหมู่ :</h6>
                                    <div class="mb-3">
                                        <select class="form-select header-from" aria-label="Default select example">
                                            <option value="0" selected>หมวดหมู่</option>
                                            <option value="dimsum">ติ่มซำ</option>
                                            <option value="drink">เครื่องดื่ม</option>
                                        </select>
                                    </div>
                                    <h6>ราคา :</h6>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="ราคา" name="price" required>
                                    </div>
                                    <h6>รูปอาหาร (URL) :</h6>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="https://example.com" name="photolink" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                                    <button type="button" class="btn btn-success">ยืนยัน</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <select class="form-select header-from" aria-label="Default select example">
                    <option value="0" selected>หมวดหมู่</option>
                    <option value="dimsum">ติ่มซำ</option>
                    <option value="drink">เครื่องดื่ม</option>
                </select>
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
                    <th>รูปอาหาร</th>
                    <th>ชื่ออาหาร</th>
                    <th>หมวดหมู่</th>
                    <th>ราคา (บาท)</th>
                    <th>แก้ไข/ลบ</th>
                </tr>
                <?php
                // $foods = DB::table('Food')->select('Name', 'Price', 'Category', 'Image')->get();
                // foreach($foods as $food) {
                //     echo '<tr>
                //         <td><img src="'. $food->Image . '" alt="food" width="100" height="100"></td>
                //         <td>' .$food->Name .' </td>
                //         <td>'. $food->Category .'</td>
                //         <td>'. $food->Price .'</td>
                //         <td> <button type="button" class="btn btn-danger">
                //         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                //             <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                //         </svg>
                //          </button>
                //         </td>
                //         </tr>';
                // }
                ?>
                @foreach($foods as $food)
                <tr>
                    <td><img src="{{$food->Image}}" alt="food" width="50" height="50"></td>
                    <td>{{$food->Name}}</td>
                    <td>{{$food->Category}}</td>
                    <td>{{$food->Price}}</td>
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
                </tr>
                @endforeach
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
            </table>
        </div>
    </div>
</body>

</html>