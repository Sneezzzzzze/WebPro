<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: #5C5470;
        }

        .container-fluid {
            height: 100vh;
        }

        .card {
            width: 400px;
            height: 440px;
            margin: auto;
            border-radius: 10%;
            backdrop-filter: blur(15px);
            background-color: rgba(255, 255, 255, 0.5);
        }

        .card-body {
            margin: 10%;
        }

        .icon {
            display: flex;
            justify-content: center;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .btn {
            margin-top: 15px;
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-body">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                </div>
                <h4 class="card-title text-center mb-4">เข้าสู่ระบบ</h4>
                <form method="POST" action="">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="บัญชีผู้ใช้งาน" name="username" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="รหัสผ่าน" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">เข้าสู่ระบบ</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>