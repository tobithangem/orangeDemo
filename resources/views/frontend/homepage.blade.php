<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
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
                    <img src="{{asset('/frontend/img/logo.png')}}" alt="" style = " width:250px">
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
    <!--Header-->
    @include('frontend.header')
    @include('frontend.listcategory')
                        <div class="right-slide">
                                <!-- Carousel -->
                            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                            </div>

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/slide1.png" alt="Los Angeles" class="d-block w-100" style="height:398px">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/slide2.png" alt="Chicago" class="d-block w-100" style="height:398px">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/slide3.png" alt="New York" class="d-block w-100" style="height:398px">
                            </div>
                            </div>

                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-center">
            <div class="category">
                <div class="top-category">
                    <div class="icon-title-category">
                        <img src="../img/ico-xuhuong.png" style = "width:30%" alt="">
                    </div>
                    <div class="title-category">SÁCH BÁN CHẠY NHẤT THÁNG</div>
                </div>
                <div class="category-list-product">
                    <div class="row">
                        
                        <div class="col">
                            <div class="book-1">
                                <div class="img-book">
                                    <img src="../img/book1.png" alt="" style ="width:200px">
                                </div>
                                <div class="name-book">
                                    <a href="http://">Một phút với Steve Jobs Một phút với Steve Jobs</a>
                                    
                                </div>
                                <div class="price-book">
                                    <div class="new-price">
                                        100.000đ
                                    </div>
                                    <div class="old-price">
                                        150.000đ
                                    </div>
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold"></div>

                            </div>
                        </div>
                        <div class="col">
                        <div class="book-1">
                                <div class="img-book">
                                    <img src="../img/book2.png" alt="" style ="width:200px">
                                </div>
                                <div class="name-book">Từ điển tiếng "Em"</div>
                                <div class="price-book">
                                    <div class="new-price">
                                        100.000đ
                                    </div>
                                    <div class="old-price">
                                        150.000đ
                                    </div>
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold"></div>

                            </div>
                        </div>
                        <div class="col">
                        <div class="book-1">
                                <div class="img-book">
                                    <img src="../img/book3.png" alt="" style ="width:200px">
                                </div>
                                <div class="name-book">Chiến binh cầu vồng</div>
                                <div class="price-book">
                                    <div class="new-price">
                                        100.000đ
                                    </div>
                                    <div class="old-price">
                                        150.000đ
                                    </div>
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold"></div>

                            </div>
                        </div>
                        <div class="col">
                        <div class="book-1">
                                <div class="img-book">
                                    <img src="../img/book4.png" alt="" style ="width:200px">
                                </div>
                                <div class="name-book">Nhà giả kim</div>
                                <div class="price-book">
                                    <div class="new-price">
                                        100.000đ
                                    </div>
                                    <div class="old-price">
                                        150.000đ
                                    </div>
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold"></div>

                            </div>
                        </div>
                        <div class="col">
                        <div class="book-1">
                                <div class="img-book">
                                    <img src="../img/book5.png" alt="" style ="width:200px">
                                </div>
                                <div class="name-book">Cây cam ngọt của tôi</div>
                                <div class="price-book">
                                    <div class="new-price">
                                        100.000đ
                                    </div>
                                    <div class="old-price">
                                        150.000đ
                                    </div>
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold"></div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="bottom-category">
                    <button class="more-button btn">Xem thêm</button>
                </div>

            </div>
            <div class="category">
                <div class="top-category">
                    <div class="icon-title-category">
                        <img src="../img/ico-xuhuong.png" style = "width:30%" alt="">
                    </div>
                    <div class="title-category">SÁCH MỚI RA MẮT</div>
                </div>
                <div class="category-list-product">
                    <div class="row">
                        
                        <div class="col">
                            <div class="book-1">
                                <div class="img-book">
                                    <img src="../img/book6.png" alt="" style ="width:200px">
                                </div>
                                <div class="name-book">Tôi là Bêtô</div>
                                <div class="price-book">
                                    <div class="new-price">
                                        100.000đ
                                    </div>
                                    <div class="old-price">
                                        150.000đ
                                    </div>
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold"></div>

                            </div>
                        </div>
                        <div class="col">
                        <div class="book-1">
                                <div class="img-book">
                                    <img src="../img/book7.png" alt="" style ="width:200px">
                                </div>
                                <div class="name-book">Thám tử lừng danh Conan - Tập 99</div>
                                <div class="price-book">
                                    <div class="new-price">
                                        100.000đ
                                    </div>
                                    <div class="old-price">
                                        150.000đ
                                    </div>
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold"></div>

                            </div>
                        </div>
                        <div class="col">
                        <div class="book-1">
                                <div class="img-book">
                                    <img src="../img/book8.png" alt="" style ="width:200px">
                                </div>
                                <div class="name-book">Doraemon - Tập 100</div>
                                <div class="price-book">
                                    <div class="new-price">
                                        100.000đ
                                    </div>
                                    <div class="old-price">
                                        150.000đ
                                    </div>
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold"></div>

                            </div>
                        </div>
                        <div class="col">
                        <div class="book-1">
                                <div class="img-book">
                                    <img src="../img/book9.png" alt="" style ="width:200px">
                                </div>
                                <div class="name-book">Naruto - Tập 899</div>
                                <div class="price-book">
                                    <div class="new-price">
                                        100.000đ
                                    </div>
                                    <div class="old-price">
                                        150.000đ
                                    </div>
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold"></div>

                            </div>
                        </div>
                        <div class="col">
                        <div class="book-1">
                                <div class="img-book">
                                    <img src="../img/book10.png" alt="" style ="width:200px">
                                </div>
                                <div class="name-book">Bước chậm lại giữa thế gian vội vã</div>
                                <div class="price-book">
                                    <div class="new-price">
                                        100.000đ
                                    </div>
                                    <div class="old-price">
                                        150.000đ
                                    </div>
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold"></div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="bottom-category">
                    <button class="more-button btn">Xem thêm</button>
                </div>

            </div>
        </div>
    </div>
    <!-- <div class = "footer">
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
    </div> -->
    @include('frontend.footer')
</body>
    
</html>