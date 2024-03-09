<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการร้านอาหาร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/management/openAndClose.css'); }}">
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
            <span>
                <a href="/dashboard">ตรวจสอบยอดขาย</a>
            </span>
            <span>
                <a href="/food-available-manager">ปิด-เปิด รายการอาหาร</a>
            </span>
            <span>
                <a href="/management">ข้อมูลอาหาร</a>
            </span>
            <span>
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </a>
                <ul class="dropdown-menu">
                    <a class="dropdown-item" href="/login">Logout</a>
                </ul>
            </span>
        </div>
    </div>

    <div class="header-title">
        <h1>ปิด-เปิด รายการอาหาร</h1>
    </div>

    <div class="food-table">
        <table class="table table-hover">
            <tr>
                <th>รูปอาหาร</th>
                <th>ชื่ออาหาร</th>
                <th>หมวดหมู่</th>
                <th>ราคา (บาท)</th>
                <th>ปิด/เปิด</th>
            </tr>
            @foreach($foods as $food)
            <tr>
                <td><img src="{{$food->Image}}" alt="food" width="50" height="50"></td>
                <td>{{$food->Name}}</td>
                <td>{{$food->Category}}</td>
                <td>{{$food->Price}}</td>
                <td>
                    <div class="form-check form-switch d-flex justify-content-between align-items-center">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>
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