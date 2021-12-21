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
    <link rel="stylesheet" href="{{asset('/frontend/css/information.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
<style>
    
</style>
</head>
<body>
    <!-- <div class= "container">
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
    </div> -->
    @include('frontend.header')
    
    <div class = "center">
    @foreach ($productdetail as $item)
        <div class="left">
            <div class="img">
                <div class="small-img">
                    <div class="img1">
                        <img src="../img/image_217141.jpg" class="d-block w-100">
                    </div>
                    <div class="img1">
                        <img src="../img/image_217141.jpg" class="d-block w-100">
                    </div>
                    <div class="img1">
                        <img src="../img/image_217141.jpg" class="d-block w-100">
                    </div>
                </div>
                <div class="big-img">
                    <img src="../img/image_217141.jpg" style="height: 300px; margin-top: 35px">
                </div>
            </div>
            <div class="click">
                <div class="button-add">
                    <button>
                        <div class="icon-add"></div>
                        <div class="btn-text" style="color: white">Thêm vào giỏ hàng</div>
                    </button>
                </div>
                <div class="button-buy">
                    <button>
                        <div class="btn-text" style="color: white">Mua ngay</div>
                    </button>
                </div>
            </div>
        </div>
        
        <div class="right">
            <div class="title">{{$item->productName}}</div>
            <div class="infor">
                <div class="publishing-company">
                    Nhà xuất bản:
                    <div class="NXB">Nhà xuất bản giáo dục</div>
                </div>
                <div class="author">Tác giả: 
                    <div class="TG">Lại Văn Long</div>
                </div>
            </div>
            <div class="cover-form">
                    Hình thức bìa:
                    <div class="HTB">Bìa mềm</div>
            </div>
            <div class="introduce">
                Liệt thần là phần tiếp theo nối Tuyết đen, một nhân vật mới xuất hiện -Tuyết Hoa Phi Vũ - đã làm khuynh đảo giang hồ. Với dáng vẻ thư sinh yếu ớt, dung mạo như tuyệt đẹp nhưng ẩn giấu trong mình là võ công phi phàm. Sau khi tiếp cận Đông Tử, Tuyết Hoa Phi Vũ đã đem lòng yêu và muốn chinh phục nàng. Mặc dù Đông Tử vẫn luôn thương nhớ Vạn Độc Vương. Tuyết Hoa Phi Vũ đã lợi dụng tình cảm trong sáng của Đông Tử để khiến Vạn Độc Vương xuất hiện, đồng thời một chưởng đoạt hạt Phong vũ châu của Vạn Độc Vương. Liệu không có Phong vũ châu Vạn Độc
            </div>
            <div class="price">
                Giá cả:
                <div class="GC">70.000đ</div>
            </div>
            <div class="quantity">
                <div>Số lượng:</div>
                <div class="number">
                    <button>
                        <div class="minus">-</div>
                    </button>
                    <div><input type="text" value="1" id="number" /></div>
                    <button>
                        <div class="plus">+</div>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
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