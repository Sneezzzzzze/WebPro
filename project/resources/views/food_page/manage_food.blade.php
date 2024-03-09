<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการร้านอาหาร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/management/manage-food.css'); }}">
    <link rel="icon" href="{{ URL::asset('image/DimsumLogo.png')}}" type="image/x-icon">

</head>

<body>
    <?php

    use Illuminate\Support\Facades\DB;

    $categ = DB::table('Category')
        ->select('categoryNameTH')
        ->get();

    $foods = DB::table('Food')
        ->select('rowid', 'Name', 'Category', 'Price', 'Image')
        ->get();
    ?>
    <div class="nav-bar">
        <div class="logo">
            <span>
                <!-- <a href="/management">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                        </svg>
                    </a> -->
            </span>
        </div>

        <div class="menu-bar">
        </div>
    </div>

    <div class="header-title">
        <h1>จัดการรายการอาหาร</h1>
    </div>

    <div class="food-table">
        <table class="table table-hover">
            <tr>
                <th>รูปอาหาร</th>
                <th>ชื่ออาหาร</th>
                <th>หมวดหมู่</th>
                <th>ราคา (บาท)</th>
                <th>เปิด/ปิด</th>
            </tr>
            @foreach($foods as $food)
            <tr>
                <td><img src="{{$food->Image}}" alt="food" width="50" height="50"></td>
                <td>{{$food->Name}}</td>
                <td>{{$food->Category}}</td>
                <td>{{$food->Price}}</td>
                <td>
                    <!-- <form method="">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modify" onclick="insertDataInModify('{{$food->rowid}}', '{{$food->Name}}', '{{$food->Category}}', '{{$food->Price}}', '{{$food->Image}}')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                <path d="M16 4.5a4.5 4.5 0 0 1-1.703 3.526L13 5l2.959-1.11q.04.3.041.61" />
                                <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.5 4.5 0 0 0 11.5 9m-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376M3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                            </svg>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="insertDataInDelete('{{$food->Name}}')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                            </svg>
                        </button>
                    </form> -->
                </td>
            </tr>
            <!-- ใส่ข้อมูลลงไปใน modal ตอน click ปุ่ม modify-->
            <!-- <script>
                function insertDataInModify(rowid, name, category, price, image) {
                    document.getElementById('mrowid').value = rowid;
                    document.getElementById('mFoodname').value = name;
                    document.getElementById('mPrice').value = price;
                    document.querySelector('#mCategory option[value="' + category + '"]').selected = true;
                    document.getElementById('mPhotolink').value = image;
                }

                function insertDataInDelete(name) {
                    document.getElementById('fname').value = name;
                }
            </script> -->
            @endforeach
        </table>
    </div>
</body>

</html>