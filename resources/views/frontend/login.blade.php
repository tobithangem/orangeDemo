<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Đăng nhập/Đăng ký</title>
    <link rel="stylesheet" href="{{asset('/frontend/css/login.css')}}">
</head>
<body>
    <div class="loginbox" id="Login">
        <img src="/frontend/img/avatar.png" class="avatar">
        <h1>Đăng nhập</h1>
        <form action="frontend/login" method="post" autocomplete="off">@csrf
            <p>Tên đăng nhập</p>
            <input type="text" name="username" placeholder="Nhật tên đăng nhập" required>
            <p>Mật khẩu</p>
            <input type="password" name="password" placeholder="Nhập mật khẩu" required>
            <input type="submit" name="" value="Đăng nhập">
            @if(session()->has('user_error'))
            <label>{{ session()->get('user_error') }}</label>
            @endif
            <a href="#">Quên mật khẩu</a><br>
            <a href="register" id="btnLogin">Bạn chưa có tài khoản? Đăng ký tại đây</a>
        </form>
    </div>
</body>
</html>