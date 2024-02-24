<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการร้านอาหาร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin: 0; /* ลบ margin ทั้งหมด */
            padding: 0; /* ลบ padding ทั้งหมด */
            height: 100vh; /* ตั้งความสูงของ body เป็น 100% ของ viewport height */
        }
        .nav-bar {
            display: flex;
            justify-content: space-between; /* จัดเรียงเนื้อหาใน Navbar ให้ชิดขอบ */
            align-items: center; /* จัดเนื้อหาใน Navbar ให้ตรงกลางตามแนวตั้ง */
            background-color: #5C5470; /* เพิ่มสีพื้นหลังสำหรับ Navbar */
            padding: 10px 20px; /* เพิ่ม padding เพื่อเพิ่มระยะห่างของเนื้อหาภายใน Navbar */
        }
        .menu-bar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .menu-bar li {
            padding: 0px 20px;
        }
        .menu-bar a {
            color: white; /* เปลี่ยนสีของข้อความลิงก์ใน Navbar เป็นขาว */
            text-decoration: none; /* ลบการขีดเส้นใต้ข้อความลิงก์ */
        }
        .menu-bar a:hover {
            color: #FFC107; /* เปลี่ยนสีของข้อความลิงก์เมื่อโฮเวอร์ */
            text-decoration: none; /* ลบการขีดเส้นใต้ข้อความลิงก์ */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="nav-bar">

            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                </svg>
            </div>

            <div class="menu-bar">
                <ul>
                    <li>
                        <a href="#">ตรวจสอบยอดขาย</a>
                    </li>
                    <li>
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>