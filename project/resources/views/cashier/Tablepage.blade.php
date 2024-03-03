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
                    <a href="#">LOGIN</a>
                </nav>
            </header>

            <div class="group">
                <div class="section1">
                    <button type="submit" class="btn-1">A1</button>
                    <button type="submit" class="btn-2">A2</button>
                    <button type="submit" class="btn-3">A3</button>
                    <button type="submit" class="btn-4">A4</button>
                    <button type="submit" class="btn-5">A5</button>
                </div>
                <div class="section2">
                    <button type="submit" class="btn-6">A6</button>
                    <button type="submit" class="btn-7">A7</button>
                    <button type="submit" class="btn-8">A8</button>
                    <button type="submit" class="btn-9">A9</button>
                    <button type="submit" class="btn-10">A10</button>
                </div>
                <div class="section3">
                    <button type="submit" class="btn-11">B1</button>
                    <button type="submit" class="btn-12">B2</button>
                    <button type="submit" class="btn-13">B3</button>
                    <button type="submit" class="btn-14">B4</button>
                    <button type="submit" class="btn-15">B5</button>
                </div>
                <div class="section4">
                    <button type="submit" class="btn-16">B6</button>
                    <button type="submit" class="btn-17">B7</button>
                    <button type="submit" class="btn-18">B8</button>
                    <button type="submit" class="btn-19">B9</button>
                    <button type="submit" class="btn-20">B10</button>
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
                    </table>
                    <div class="section5">
                        <button type="submit" class="btnT2">ยกเลิกโต๊ะ</button>
                        <button type="submit" class="btnT4">สถานะ</button>
                        <button type="submit" class="btnT5">ใบแจ้ง</button>
                        <button type="submit" class="btnT6">เช็คบิล</button>
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

                        <div class="section7">
                            <table class="table-3">
                                <tr>
                                    <td>ยอดเงินบริสุทธิ์</td>
                                    <td class="price"></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>







</body>

</html>