
    <div class= "container">
        <div class="row">
            <div class="col-sm-2">
                <a href="{{url('/homepage')}}">
                <div class="logo">
                    <img src="{{asset('/frontend/img/logo.png')}}" alt="" style = " width:250px">
                </div>
                </a>
            </div>
            <div class="col-sm-7">
                
                    <form class="form-search" method="post" action="{{route('search')}}">
                    {{csrf_field()}}
                    <input type="text" class = "search-input" name="keyword" placeholder = "Tìm kiếm sản phẩm">
                    <div class = "icon-search">
                        <button class = "button-search"><i class="bi bi-search"></i></button>
                    </div>
                    </form>
                
            </div>
            <div class="col-sm-3">
                <div class="form-cus">
                    <div class="noti">
                        <div class = "noti-top">
                            <div class="noti-icon">
                            <i class="bi bi-bell"></i>
                            </div>
                            <div>Thông báo</div>
                        </div>
                    </div>
                    <div class="cart">
                        <a href="/cart">
                        <div class="cart-top">
                            <i class="bi bi-cart3"></i>
                        </div>
                        <div> Giỏ hàng</div>
                        </a>
                    </div>
                    <div class="account">
                        <a href="/account.php">
                            <div class="account-top">
                                <div class="account-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div>Tài khoản</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>