<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Đăng nhập</title>

    <link href="{{asset('/backend/css/login.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ruda' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="login-page">
        <div class="login-l">
            <img class="sideimg" src="{{asset('/backend/img/bg_login.jpeg')}}" alt="Background Login">
        </div>
        <div class="login-r">
            <div class="login-form">
                <p class="logo">orange</p>
                <form action="{{route('admin.login')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    Tài khoản <br> 
                    <input type="text" name="admin_name" required> <br>
                    Mật khẩu <br>
                    <input type="password" name="admin_password" required> <br>
                    <input type="checkbox" checked="checked"> Lưu tài khoản <br>
                    <button type="submit">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>