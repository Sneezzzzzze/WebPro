<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: #5C5470;
        }

        .card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 400px;
            height: 480px;
            margin: 0 auto;
            margin-top: 220px;
            border-radius: 10%;
            backdrop-filter: blur(15px);
            background-color: rgba(255, 255, 255, 0.5);
        }

        .card-body {
            margin-top: 15px;
        }

        .icon {
            display: flex;
            justify-content: center;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .btn {
            width: 300px;
            height: auto;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </div>
                <h4 class="card-title text-center mb-4">สมัครสมาชิก</h4>
                <form method="" action="">
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="ใส่อีเมล" name="username" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="ใส่รหัสผ่าน" name="password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน" name="confirm-password" required>
                    </div>
                    <div class="position">
                        <select class="form-select form-select-md" aria-label="Small select example" name="position" id="pos">
                            <option selected>เลือกตำแหน่ง</option>
                            <option value="chef">เชฟ</option>
                            <option value="waiter">พนักงานเสิร์ฟอาหาร</option>
                            <option value="chef">ผู้จัดการร้าน</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">สมัครสมาชิก</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>