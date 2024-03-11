<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/staff/table.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Table</title>
    <script>
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    </script>
    <link rel="icon" href="{{ URL::asset('image/DimsumLogo.png')}}" type="image/x-icon">

</head>

<body>
    <?php

    use Illuminate\Support\Facades\DB;

    ?>
    <div class="tabla-page">

        <div class="div">
            <header>
                <nav class="navigation">
                    <h2><a href="/staff">หน้าหลัก</a></h2>
                </nav>
                <nav class="navigation">
                    <a href="/login">ออกจากระบบ</a>
                </nav>
            </header>

            <div class="group">
                <form id="myform" action="" method="GET">
                    <input type="hidden" name="tabl" id="tabl">
                    <div class="section1">
                        <button type="button" class="btn-1 table-btn" onclick="tableName('A1')" name="A1" id="A1">A1
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-2 table-btn" onclick="tableName('A2')" name="A2" id="A2">A2
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-3 table-btn" onclick="tableName('A3')" name="A3" id="A3">A3
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-4 table-btn" onclick="tableName('A4')" name="A4" id="A4">A4
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-5 table-btn" onclick="tableName('A5')" name="A5" id="A5">A5
                            <div class="status"></div>
                        </button>
                    </div>
                    <div class="section2">
                        <button type="button" class="btn-6 table-btn" onclick="tableName('A6')" name="A6" id="A6">A6
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-7 table-btn" onclick="tableName('A7')" name="A7" id="A7">A7
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-8 table-btn" onclick="tableName('A8')" name="A8" id="A8">A8
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-9 table-btn" onclick="tableName('A9')" name="A9" id="A9">A9
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-10 table-btn" onclick="tableName('A10')" name="A10" id="A10">A10
                            <div class="status"></div>
                        </button>
                    </div>
                    <div class="section3">
                        <button type="button" class="btn-11 table-btn" onclick="tableName('B1')" name="B1" id="B1">B1
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-12 table-btn" onclick="tableName('B2')" name="B2" id="B2">B2
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-13 table-btn" onclick="tableName('B3')" name="B3" id="B3">B3
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-14 table-btn" onclick="tableName('B4')" name="B4" id="B4">B4
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-15 table-btn" onclick="tableName('B5')" name="B5" id="B5">B5
                            <div class="status"></div>
                        </button>
                    </div>
                    <div class="section4">
                        <button type="button" class="btn-16 table-btn" onclick="tableName('B6')" name="B6" id="B6">B6
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-17 table-btn" onclick="tableName('B7')" name="B7" id="B7">B7
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-18 table-btn" onclick="tableName('B8')" name="B8" id="B8">B8
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-19 table-btn" onclick="tableName('B9')" name="B9" id="B9">B9
                            <div class="status"></div>
                        </button>
                        <button type="button" class="btn-20 table-btn" onclick="tableName('B10')" name="B10" id="B10">B10
                            <div class="status"></div>
                        </button>
                    </div>
                </form>
            </div>

            <div class="group2">
                <h1 class="h1-1">
                    รายละเอียด
                </h1>
                <div class="box2-1">
                    <table class="table-1">
                        <tr>
                            <td name="table" id="table">โต๊ะอาหาร {{ isset($_GET['tabl']) ? $_GET['tabl'] : '' }}</td>
                            <td class="tdR"></td>
                        </tr>
                    </table>
                    <div class="section5">
                        <button type="submit" class="btnT3">สถานะโต๊ะ</button>
                        <button type="submit" class="btnT6" data-bs-toggle="modal" data-bs-target="#checkBill">เช็คบิล</button>
                        <button type="submit" class="btnT9">แสดงรายการ</button>
                        <button type="submit" class="btnT12">ล้างรายการสั่ง</button>
                    </div>

                    <div class="section6 overflow-scroll">
                        <table class="table table-2">
                            <thead>
                                <tr>
                                    <th>รายการ</th>
                                    <th>ราคา</th>
                                    <th>จำนวน</th>
                                    <th>รวม</th>
                                    <th>สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                isset($_GET['tabl']) ? $table = $_GET['tabl'] : $table = '';
                                $order = DB::table('Order')
                                    ->select('FoodName', 'FoodImage', 'quantity', 'FoodPrice', 'status', 'TableName')
                                    ->where('TableName', $table)
                                    ->get();
                                ?>
                                @if($table == '')
                                <tr>
                                    <td colspan="5">กรุณาเลือกโต๊ะก่อน</td>
                                </tr>
                                @endif
                                @if(isset($order) && count($order) > 0)
                                @foreach($order as $orders)
                                <tr>
                                    <td>{{ $orders->FoodName }}</td>
                                    <td>{{ $orders->FoodPrice }}</td>
                                    <td>{{ $orders->quantity }}</td>
                                    <td>{{ $orders->quantity * $orders->FoodPrice }}</td>
                                    <td>{{ $orders->status }}</td>
                                </tr>
                                @endforeach
                                @elseif(isset($order) && count($order) == 0 && $table != '')
                                <tr>
                                    <td colspan="5">ไม่มีรายการอาหาร</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Check bill Modal -->
    <div class="modal fade" id="checkBill" tabindex="-1" aria-labelledby="checkBill" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="checkBill">ใบเสร็จ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" name="addMenuButton"></button>
                </div>
                <form action="" method="">
                    <div class="modal-body">
                        <div class="bill-container">
                            <p style="text-align: left;">รายการ</p>
                            <p style="text-align: right;">บาท</p>
                            @foreach($order as $orders)
                            <div class="list-bill">
                                <p>{{$orders->FoodName}} {{$orders->quantity}}</p>
                                <p>{{ $orders->quantity * $orders->FoodPrice }}</p>
                            </div>
                            @endforeach
                            <hr class="hr">
                            <?php
                            $total = DB::table('Order')
                                ->select(DB::raw('SUM(FoodPrice * quantity) as total'))
                                ->where('TableName', $table)
                                ->get();
                            ?>
                            @foreach($total as $totals)
                            <div class="list-bill">
                                <p>ราคาทั้งหมด</p>
                                <p>{{$totals->total}}</p>
                            </div>
                            @endforeach
                            <hr class="hr">
                            <img src="https://ih1.redbubble.net/image.4074919657.8583/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.u1.jpg" alt="QRcode">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const buttons = document.querySelectorAll('.group button');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove 'active' class from all buttons
                buttons.forEach(btn => btn.classList.remove('active'));
                // Add 'active' class to the clicked button
                button.classList.add('active');
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.group button');

            buttons.forEach(button => {
                button.addEventListener('click', event => {
                    event.preventDefault(); // Prevent form submission
                    const tablename = button.id; // Get the table name from button id
                    const table = document.getElementById('table');
                    const myform = document.getElementById('myform');
                    const tabl = document.getElementById('tabl');
                    tabl.value = tablename;
                    table.innerHTML = `โต๊ะอาหาร ${tablename}`; // Set table name in the table details section

                });
            });
        });

        function toggleStatus(button) {
            const status = button.querySelector('.status');
            if (status) {
                if (status.style.backgroundColor === 'red') {
                    status.style.backgroundColor = 'green'; // Change status color to green
                    localStorage.setItem(button.id, 'green'); // Save status to local storage
                } else {
                    status.style.backgroundColor = 'red'; // Change status color to red
                    localStorage.setItem(button.id, 'red'); // Save status to local storage
                }
            }
        }

        // Function to load status from local storage
        function loadStatus() {
            const buttons = document.querySelectorAll('.group button');
            buttons.forEach(button => {
                const status = localStorage.getItem(button.id);
                if (status) {
                    const buttonStatus = button.querySelector('.status');
                    if (buttonStatus) {
                        buttonStatus.style.backgroundColor = status; // Set button status from local storage
                    }
                }
            });
        }

        // Event listener to handle button clicks and toggle status
        document.addEventListener('DOMContentLoaded', function() {
            loadStatus(); // Load status from local storage on page load

            const statusButtons = document.querySelectorAll('.btnT3');
            statusButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const selectedButton = document.querySelector('.group button.active');
                    toggleStatus(selectedButton); // Toggle status and save to local storage
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {

            const showData = document.querySelectorAll('.btnT9');
            showData.forEach(button => {
                button.addEventListener('click', () => {
                    const myform = document.getElementById('myform');
                    myform.submit();
                });
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const showData = document.querySelectorAll('.btnT12');
            showData.forEach(button => {
                button.addEventListener('click', () => {
                    const confirmClear = confirm("คุณจะลบทั้งรายการใช่ไหม?");
                    if (confirmClear) {
                        const table = "<?php echo isset($_GET['tabl']) ? $_GET['tabl'] : ''; ?>";
                        const myform = document.getElementById('myform');
                        const clearAllInput = document.createElement('input');
                        clearAllInput.type = 'hidden';
                        clearAllInput.name = 'clearAll';
                        clearAllInput.value = 'true';
                        myform.appendChild(clearAllInput);
                        myform.submit();
                    }
                    <?php
                    if (isset($_GET['clearAll']) && $_GET['clearAll'] === 'true') {
                        $table = isset($_GET['tabl']) ? $_GET['tabl'] : '';
                        DB::table('Order')->where('TableName', $table)->delete();
                    }
                    ?>
                });
            });
        });
    </script>
</body>

</html>