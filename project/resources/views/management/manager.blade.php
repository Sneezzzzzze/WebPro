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
</head>

<body>
    <?php

    use Illuminate\Support\Facades\DB;

    $categ = DB::table('Category')
        ->select('categoryNameTH')
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
                <a href="#">แผนผังร้านอาหาร</a>
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
        <h1>ข้อมูลรายการอาหาร</h1>
    </div>

    <div class="header">
        <div class="grid-left">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">
                เพิ่มเมนูอาหาร
            </button>

            <!-- Add Modal -->
            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="add" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/management" method="GET">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="add">เพิ่มรายการอาหาร</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" name="addMenuButton"></button>
                            </div>
                            <div class="modal-body">
                                <h6>ชื่ออาหาร :</h6>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="ชื่ออาหาร" name="foodname" required>
                                </div>
                                <h6>หมวดหมู่ :</h6>
                                <div class="mb-3">
                                    <select class="form-select header-from" aria-label="Default select example" name="category">
                                        <option selected>หมวดหมู่</option>
                                        @foreach($categ as $cate)
                                        <?php
                                        $check = $cate->categoryNameTH;
                                        $cate->categoryNameTH;
                                        echo '<option value="' . $cate->categoryNameTH . '">' . $cate->categoryNameTH . '</option>';
                                        ?>
                                        @endforeach
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
                                <button type="submit" class="btn btn-success" data-bs-dismiss="modal" name="addMenu">ยืนยัน</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_GET['addMenu'])) {
                            $name = $_GET['foodname'];
                            $price = $_GET['price'];
                            $category = $_GET['category'];
                            $photolink = $_GET['photolink'];

                            DB::table('Food')->insert([
                                'Name' => $name,
                                'Price' => $price,
                                'Category' => $category,
                                'Image' => $photolink
                            ]);
                            echo '<script>window.location.href = "/management";</script>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <button type="button" id="addCate" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCategory">
                เพิ่มหมวดหมู่อาหาร
            </button>

            <!-- Add Category Modal -->
            <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategory" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addCategory">เพิ่มหมวดหมู่อาหาร</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" name="addMenuButton"></button>
                        </div>
                        <form action="/management" method="">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="ex. ของหวาน" name="AddFoodCategory" id="AddFoodCategory" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                                <button type="submit" class="btn btn-success" data-bs-dismiss="modal" name="addCategory" id="addCategory">ยืนยัน</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_GET['addCategory'])) {
                $addcate = $_GET['AddFoodCategory'];
                DB::table('Category')->insert(['categoryNameTH' => $addcate]);
                echo '<script>window.location.href = "/management";</script>';
            }
            ?>
            <div class="choose-category">
                <form action="" method="GET">
                    <select class="form-select header-from" aria-label="Default select example" name="category">
                        @foreach($categ as $cate)
                        <?php
                        $check = $cate->categoryNameTH;
                        if ($check === "ทั้งหมด") {
                            echo '<option value="' . $cate->categoryNameTH . '" selected>' . $cate->categoryNameTH . '</option>';
                        } else {
                            echo '<option value="' . $cate->categoryNameTH . '">' . $cate->categoryNameTH . '</option>';
                        }
                        ?>
                        @endforeach
                    </select>
                    <input type="submit" id="category-submit" class="btn btn-primary" value="ยืนยัน">
                </form>
            </div>
        </div>

        <form action="" method="GET">
            <div class="grid-right">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="ค้นหารายการอาหาร" aria-label="ค้นหารายการอาหาร" aria-describedby="addon-wrapping" name="search" id="search">
                    <span class="input-group-text" id="addon-wrapping">
                        <button id="delete-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </button>
                    </span>
                </div>
            </div>
        </form>
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
            @foreach($foods as $food)
            <tr>
                <td><img src="{{$food->Image}}" alt="food" width="50" height="50"></td>
                <td>{{$food->Name}}</td>
                <td>{{$food->Category}}</td>
                <td>{{$food->Price}}</td>
                <td>
                    <form method="">
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
                    </form>
                </td>
            </tr>
            <!-- ใส่ข้อมูลลงไปใน modal ตอน click ปุ่ม modify-->
            <script>
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
            </script>
            @endforeach
            <!-- Modify Modal -->
            <div class="modal fade" id="modify" tabindex="-1" aria-labelledby="modify" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modify">แก้ไขรายการอาหาร</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/management" method="">
                            <input type="hidden" name="mrowid" id="mrowid">
                            <div class="modal-body">
                                <h6>ชื่ออาหาร :</h6>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="ชื่ออาหาร" name="mFoodname" id="mFoodname" required>
                                </div>
                                <h6>หมวดหมู่ :</h6>
                                <div class="mb-3">
                                    <select class="form-select header-from" aria-label="Default select example" name="mCategory" id="mCategory">
                                        @foreach($categ as $cate)
                                        <?php
                                        $check = $cate->categoryNameTH;
                                        echo '<option value="' . $cate->categoryNameTH . '">' . $cate->categoryNameTH . '</option>';
                                        ?>
                                        @endforeach
                                    </select>
                                </div>
                                <h6>ราคา :</h6>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="ราคา" name="mPrice" id="mPrice" required>
                                </div>
                                <h6>รูปอาหาร (URL) :</h6>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="https://example.com" name="mPhotolink" id="mPhotolink" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                                <button type="submit" class="btn btn-warning" name="modifyMenu">ยืนยันการแก้ไข</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_GET['modifyMenu'])) {
                            $rowid = $_GET['mrowid'];
                            $name = $_GET['mFoodname'];
                            $price = $_GET['mPrice'];
                            $category = $_GET['mCategory'];
                            $photolink = $_GET['mPhotolink'];


                            DB::table('Food')
                                ->where('rowid', $rowid)
                                ->update([
                                    'Name' => $name,
                                    'Price' => $price,
                                    'Category' => $category,
                                    'Image' => $photolink
                                ]);
                            echo '<script>window.location.href = "/management";</script>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Delete Modal -->
            <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="delete">ท่านต้องการลบเมนูนี้ใช่หรือไม่</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/management" method="">
                                <input type="hidden" name="fname" id="fname" value="">
                                <button type="submit" class="btn btn-primary" name="dDelete" value="yes">ใช่</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ไม่</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_GET['fname']) && isset($_GET['dDelete'])) {
                $name = $_GET['fname'];
                $delete = $_GET['dDelete'];
                if ($delete === 'yes') {
                    DB::table('Food')
                        ->where('Name', $name)
                        ->delete();
                    echo '<script>window.location.href = "/management";</script>';
                }
            }
            ?>
        </table>
    </div>
</body>

</html>