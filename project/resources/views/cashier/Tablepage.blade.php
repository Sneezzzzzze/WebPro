<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/cashier/table.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Table</title>
    <script>
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    </script>
</head>

<body>
    <div class="tabla-page">

        <div class="div">
            <header>
                <nav class="navigation">
                    <h2><a href="/cashier">หน้าหลัก</a></h2>
                </nav>
                <nav class="navigation">
                    <a href="/login">ออกจากระบบ</a>
                </nav>
            </header>

            <div class="group">
                <div class="section1">
                    <button type="submit" class="btn-1 table-btn">A1
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-2 table-btn">A2
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-3 table-btn">A3
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-4 table-btn">A4
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-5 table-btn">A5
                        <div class="status"></div>
                    </button>
                </div>
                <div class="section2">
                    <button type="submit" class="btn-6 table-btn">A6
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-7 table-btn">A7
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-8 table-btn">A8
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-9 table-btn">A9
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-10 table-btn">A10
                        <div class="status"></div>
                    </button>
                </div>
                <div class="section3">
                    <button type="submit" class="btn-11 table-btn">B1
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-12 table-btn">B2
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-13 table-btn">B3
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-14 table-btn">B4
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-15 table-btn">B5
                        <div class="status"></div>
                    </button>
                </div>
                <div class="section4">
                    <button type="submit" class="btn-16 table-btn">B6
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-17 table-btn">B7
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-18 table-btn">B8
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-19 table-btn">B9
                        <div class="status"></div>
                    </button>
                    <button type="submit" class="btn-20 table-btn">B10
                        <div class="status"></div>
                    </button>
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
                        <button type="submit" class="btnT3">สถานะโต๊ะ</button>
                        <button type="submit" class="btnT6" data-bs-toggle="modal" data-bs-target="#checkBill">เช็คบิล</button>
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
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>รูป</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
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
                <form action="/management" method="">
                    <div class="modal-body">
                        <div class="bill-container">
                            <p style="text-align: right;">บาท</p>
                            <div class="list-bill">
                                <p>x2 hum</p>
                                <p>200</p>
                            </div>
                            <div class="list-bill">
                                <p>kuy</p>
                                <p>1500</p>
                            </div>
                            <div class="list-bill">
                                <p>x10 PorkSlice</p>
                                <p>20000</p>
                            </div>
                            <hr class="hr">
                            <div class="list-bill">
                                <p>ราคาทั้งหมด</p>
                                <p>139253</p>
                            </div>
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

        const statusButtons = document.querySelectorAll('.btnT3');

        statusButtons.forEach(button => {
            button.addEventListener('click', () => {
                const selectedButton = document.querySelector('.group button.active');
                const status = selectedButton.querySelector('.status');
                if (status) {
                    if (status.style.backgroundColor === 'red') {
                        status.style.backgroundColor = 'green'; // Change status color to green
                    } else {
                        status.style.backgroundColor = 'red'; // Change status color to red
                    }
                }
            });
        });
    </script>
</body>

</html>