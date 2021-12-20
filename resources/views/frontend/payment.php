<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
    <link rel="stylesheet" href="{{asset('/frontend/css/payment.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
<style>
    
</style>
</head>
<body>
    <div class= "container">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <img src="../img/logo.png" alt="" style = " width:250px">
                </div>
            </div>
            <div class="col-sm-7">
                <div  class= "form-search" >
                    <input type="text" class = "search-input" placeholder = "Tìm kiếm sản phẩm">
                    <div class = "icon-search">
                        <button class = "button-search"><i class="bi bi-search"></i></button>
                    </div>
                </div>
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
    <div class="center">
        <div class="purchase">
            <div class="order">
                <div class="title">Đơn hàng</div>
                <div class="form">
                    <div class="name" style="display: flex">
                        <div class="text" style="display: flex">Tên người nhận<div style="color: red">(*)</div></div>
                        <input type="text" id="name" />
                    </div>
                    <div class="email" style="display: flex">
                        <div class="text" style="display: flex">Email<div style="color: red">(*)</div></div>
                        <input type="text" id="email" />
                    </div>
                    <div class="phone" style="display: flex">
                        <div class="text" style="display: flex">Số điện thoai<div style="color: red">(*)</div></div>
                        <input type="text" id="phone" />
                    </div>
                    <div class="address" style="display: flex">
                        <div class="text" style="display: flex">Địa chỉ<div style="color: red">(*)</div></div>
                        <input type="text" id="address" style="width: 400px" />
                    </div>
                    <div class="note" style="display: flex">
                        <div class="text">Ghi chú</div>
                        <input type="text" id="note" style="width: 400px" />
                    </div>
                </div>
            </div>
            <div class="payment">
                <div>
                    <div class="title">Hình thức thanh toán</div>
                    <div class="radio">
                        <div>
                            <input type="radio" checked="checked" />
                            <img src="../img/Icon-payment.png" alt="" style = " width:30px; height: 30px">
                            <label>Thanh toán khi nhận hàng</label>
                        </div>
                        <div>
                            <input type="radio" />
                            <img src="../img/Icon-MoMo.png" alt="" style = " width:30px; height: 30px">
                            <label>Ví MoMo</label>
                        </div>
                        <div>
                            <input type="radio" />
                            <img src="../img/Icon-ZaloPay.png" alt="" style = " width:30px; height: 30px">
                            <label>Ví ZaloPay</label>
                        </div>
                        <div>
                            <input type="radio" />
                            <img src="../img/Icon-ShoppePay.png" alt="" style = " width:30px; height: 30px">
                            <label>Ví ShopeePay</label>
                        </div>
                        <div>
                            <input type="radio" />
                            <img src="../img/icon-atm.png" alt="" style = " width:30px; height: 30px">
                            <label>ATM/Internet Banking</label>
                        </div>
                        <div>
                            <input type="radio" />
                            <img src="../img/icon-visa-mastercard.jpg" alt="" style = " width:30px; height: 30px">
                            <label>VISA / Master Card</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="check">
            <div class="annouce-price">
                <div class="price" style="display: flex">
                    <label>Giá tiền</label>
                    <div>150.000đ</div>
                </div>
                <div class="ship" style="display: flex">
                    <label>Phí vận chuyển:</label>
                    <div>30.000đ</div>
                </div>
                <div class="total" style="display: flex">
                    <label style="font-weight: bold">Tổng số tiền:</label>
                    <div style="color: red">180.000đ</div>
                </div>
            </div>
        </div>
        <div class="confirm">
            <div class="backstore">
                <button>
                    <div class="btn-text">Quay lại giỏ hàng</div>
                </button>
            </div>
            <div class="confirm-payment">
                <button>
                    <div class="btn-text">Xác nhận thanh toán</div>
                </button>
            </div>
        </div>

    </div>
    <div class = "footer">
        <div class="container">
            <div class = "row">
                <div class="col-4" style = "background-color:white">
                    <div class = "left-footer">
                        <div class = "logo-footer"> 
                            <img src="../img/logo.png" alt="" style = " width:100%">
                        </div>
                        <div class = "content-left-footer">
                            <div>Tầng 5 toà nhà 1194 Láng - Thành phố Hà Nội</div>
                            <div>Công Ty Cổ Phần Phát Hành Sách - ORANGE</div>
                            <div>Orange nhận đặt hàng trực tuyến và giao tận nơi</div>
                            <h1> </h1>
                            <div>Cơ sở 1: 144 Xuân Thuỷ, Cầu Giấy, Hà Nội </div>
                            <div>Cơ sở 2: 100 Giải Phóng, Hai Bà Trưng, Hà Nội</div>
                        </div>
                    
                    
                    </div>
                </div> 
                <div class="col">
                    <div class="right-footer">
                        <div class = "title-right"><h3>DỊCH VỤ</h3></div>
                        <div class = "content-right">
                            <div class = "content-line">
                                <a href="http://">Điều khoản sử dụng</a>
                            </div>
                            <div class = "content-line">
                                <a href="">Chính sách bảo mật</a>
                            </div>
                            <div class = "content-line">
                                <a href="http://">Giới thiệu ORANGE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="right-footer">
                        <div class = "title-right"><h3>HỖ TRỢ</h3></div>
                        <div class = "content-right">
                            <div class = "content-line">
                                <a href="http://">Phương thức vận chuyển</a>
                            </div>
                            <div class = "content-line">
                                <a href="">Phương thức thanh toán</a>
                            </div>
                            <div class = "content-line">
                                <a href="http://">Chính sách đổi trả</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="right-footer">
                        <div class = "title-right"><h3>LIÊN HỆ</h3></div>
                        <div class = "content-right">
                            <div class = "content-line">
                                <a href="http://">Email: gmail@orange.com</a>
                            </div>
                            <div class = "content-line">
                                <a href="">Hotline: 19001009</a>
                            </div>
                            <div class = "content-line">
                                <a href="http://">Zalo: 0918273645</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    
</html>