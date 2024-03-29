<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="{{ URL::asset('image/DimsumLogo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('css/login/login.css')}}">
    <style>
        body {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-image: url("{{ URL::asset('image/food-background.jpg')}}");
            background-size: 100vw 100vh;
        }
    </style>
    <script>
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    </script>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <div class="icon">
                <img src="{{ URL::asset('image/DimsumLogo.png')}}" alt="dimsum-logo">
            </div>
            <h4 class="card-title text-center mb-4">เข้าสู่ระบบ</h4>
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="ผู้บัญชีผู้ใช้งาน" name="user" id="user" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="รหัสผ่าน" name="password" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">เข้าสู่ระบบ</button>
            </form>
        </div>
    </div>

</body>

</html>