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
                <!-- <a href="">
                    <svg width="100" height="35" viewBox="0 0 188 145" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="94" cy="42" rx="94" ry="25" fill="#C97026" />
                        <rect y="42" width="188" height="78" fill="#C97026" />
                        <ellipse cx="94" cy="67" rx="91" ry="60" fill="white" />
                        <path d="M187.999 41C183.499 67.6667 6.99996 67.6667 -3.53854e-05 41V121C-2.91718e-05 151.5 187.999 154 187.999 121V41Z" fill="#870000" />
                        <ellipse cx="94.5" cy="12" rx="5.5" ry="9" fill="white" />
                        <ellipse cx="67.1142" cy="17.3147" rx="4.5" ry="28.3343" transform="rotate(61.9015 67.1142 17.3147)" fill="white" />
                        <ellipse cx="121.114" cy="17.3154" rx="4.5" ry="28.3343" transform="rotate(-61.9 121.114 17.3154)" fill="white" />
                    </svg>
                </a> -->
            </span>
        </div>

        <div class="menu-bar">
            <span>
                <a href="/chef">รายการอาหารที่ลูกค้าสั่ง</a>
            </span>
            <span>
                <a href="/food-available-chef">ปิด-เปิด รายการอาหาร</a>
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