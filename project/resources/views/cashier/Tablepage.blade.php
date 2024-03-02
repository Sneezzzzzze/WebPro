<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/cashier/table.css'); }}">
    <title>Table</title>
</head>

<body>
    <div class="tabla-page">

        <div class="div">
            <header>
                <h2 class="logo" href="">HOME</h2>
                <nav class="navigation">
                    <a href="/login">logout</a>
                </nav>
            </header>

            <div class="group">
                <div class="section1">
                    <button class="btn-1">A1</button>
                    <button class="btn-1">A2</button>
                    <button class="btn-1">A3</button>
                    <button class="btn-1">A4</button>
                    <button class="btn-1">A5</button>
                </div>
                <div class="section2">
                    <button class="btn-2">A6</button>
                    <button class="btn-2">A7</button>
                    <button class="btn-2">A8</button>
                    <button class="btn-2">A9</button>
                    <button class="btn-2">A10</button>
                </div>
                <div class="section3">
                    <button class="btn-3">B1</button>
                    <button class="btn-3">B2</button>
                    <button class="btn-3">B3</button>
                    <button class="btn-3">B4</button>
                    <button class="btn-3">B5</button>
                </div>
                <div class="section4">
                    <button class="btn-4">B6</button>
                    <button class="btn-4">B7</button>
                    <button class="btn-4">B8</button>
                    <button class="btn-4">B9</button>
                    <button class="btn-4">B10</button>
                </div>
            </div>
            <div class="group2">
                <h1 class="h1-1">
                    รายละเอียด
                </h1>
                <div class="box2-1">
                    <table class="table-1">
                        <tr>
                            <td>โต๊ะอาหาร</td>
                            <td class="tdR"></td>
                        </tr>
                        <tr>
                            <td>จำนวนคน</td>
                            <td class="tdR"></td>
                        </tr>
                        <tr>
                            <td>รายการอาหาร</td>
                            <td class="tdR"></td>
                        </tr>
                        <tr>
                            <td>ส่วนลด</td>
                            <td class="tdR"></td>
                        </tr>
                        <tr>
                            <td>ราคาบริสุทธิ์</td>
                            <td class="tdR"></td>
                        </tr>
                    </table>
                    <div class="section5">
                        <button class="btnT1">เพิ่มอาหาร</button>
                        <button class="btnT2">ยกเลิก</button>
                        <button class="btnT3">ย้ายโต๊ะ</button>
                        <button class="btnT4">สถานะ</button>
                        <button class="btnT5">ใบแจ้ง</button>
                        <button class="btnT6">เช็คบิล</button>
                    </div>

                    <div class="section6">
                        <table class="table-2">
                            <tr>
                                <th>
                                    รายการ
                                </th>
                                <th>
                                    ราคา
                                </th>
                                <th>
                                    จำนวน
                                </th>
                                <th>
                                    รวม
                                </th>
                                <th>
                                    สถานะ
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>



</body>

</html>