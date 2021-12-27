<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <link rel="stylesheet" href="{{asset('/frontend/css/register.css')}}">
</head>
<body>
    <form class="registerbox" action="{{route('form_register')}}" method="post" autocomplete="off"> @csrf
        <img src="/frontend/img/avatar.png" class="avatar">
        <div class="title">Đăng ký</div>
        <div class="name">
            <div class="label">Họ và tên</div>
            <input input type="text" name="customerName" value="" required />
        </div>
        <div class="infor">
            <div class="birthday">
                <div class="label">Ngày sinh</div>
                <input type="date" name="dateOfbirth" value="" />
            </div>
        </div>
        <div class="username">
            <div class="label">Tên đăng nhập</div>
            <input type="text" name="username" value="" required/>
        </div>
        <div class="password">
            <div class="label">Mật khẩu</div>
            <input type="password" name="password" value="" required/>
        </div>
        <div class="retype">
            <div class="label">Nhập lại</div>
            <input type="password" name="password" value="" required/>
        </div>
        <div class="phone">
            <div class="label">Số điện thoại</div>
            <input type="text" name="phoneNumber" value="" required/>
        </div>
        <div class="email">
            <div class="label">Email</div>
            <input type="text" name="email" value="" required />
        </div>
        <div class="address">
            <div class="label">Địa chỉ</div>
            <input type="text" name="address" value="" required/>
        </div>
        <div class="submit">
            <div class="submit-input">
                <input type="submit" name="dangky" value="Đăng Ký"/>
            </div>
        </div>
        @if(session()->has('user_error'))
            <p style="text-align-last: center; font-size: 20px">{{ session()->get('user_error') }}</p>
            @endif
            @if(session()->has('complete'))
            <p style="text-align-last: center; font-size: 20px">{{ session()->get('complete') }}</p>
            @endif
        <div class="linklogin">
            <a href="login">Bạn đã có tài khoản? Đăng nhập tại đây</a>
        </div>
    </form>
</body>
</html>
