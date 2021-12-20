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
    <link rel="stylesheet" href="{{asset('/frontend/css/category.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
<style>
    
</style>
</head>
<body>
    <div class= "container">
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
    </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<div class="center" style="height:1000px">
        <div class="top-center" >
            <div class="container">
                <div class="row">
                    <div class="left-content col-3">
                        <div class="title-left-top">Danh mục sản phẩm</div>
                        <div class="menu">
                            <div id="menu">
                                <ul>
                                    <li>
                                        <a href="">Văn Học</a>
                                        
                                    </li>
                                    <li>
                                        <a href="">Tâm lý - Kỹ năng sống</a>
                                        
                                    </li>
                                    <li>
                                        <a href="">Sách thiếu nhi</a>
                                        
                                    </li>
                                    <li>
                                        <a href="">Giáo khoa - Tham khảo</a>
                                        
                                    </li>
                                    <li>
                                        <a href="">Tiểu sử - Hồi kí</a>
                                        
                                    </li>
                                    <li>
                                        <a href="">Sách học ngoại ngữ</a>
                                        
                                    </li>
                                    <li>
                                        <a href="">Sách bán chạy</a>
                                        <!-- <div class="dropdown-menu">
                                            <div class="row">
                                            </div>
                                        </div> -->
                                    </li>
                                    <li>
                                        <a href="">Sách mới ra</a>
                                        <!-- <div class="dropdown-menu">
                                            <div class="row">
                                                
                                            </div>
                                        </div> -->
                                    </li>
                                    
                                </ul>
                            </div>

                        </div>
                        <div class="filter">
                            <div class="title-filter">Tuỳ chọn lọc sản phẩm</div>
                            <div class="price">
                                <label class="label-filter" style="border-top: 0px" for="">GIÁ</label><br>
                                <div class="checkbox">
                                <input type="checkbox" id="price1" name="price1" value="50">
                                <label for="vehicle1"> dưới 50.000đ</label><br>
                                <input type="checkbox" id="price2" name="price2" value="50-150">
                                <label for="vehicle2"> 50.000đ - 150.000đ</label><br>
                                <input type="checkbox" id="price3" name="price3" value="150-250">
                                <label for="vehicle3"> 150.000đ - 250.000đ</label><br>
                                <input type="checkbox" id="price3" name="price4" value="250-400">
                                <label for="vehicle3"> 250.000đ - 400.000đ</label><br>
                                <input type="checkbox" id="price3" name="price5" value="400">
                                <label for="vehicle3"> Trên 400.000đ</label><br>
                                </div>
                            </div>
                            <div class="publisher">
                                <label class="label-filter" for="">NHÀ XUẤT BẢN</label><br>
                                <div class="checkbox">
                                <input type="checkbox" id="publish1" name="publish1" value="50">
                                <label for="vehicle1"> Nhã Nam</label><br>
                                <input type="checkbox" id="publish2" name="publish5" value="50-150">
                                <label for="vehicle2"> Kim Đồng</label><br>
                                <input type="checkbox" id="publish3" name="publish5" value="150-250">
                                <label for="vehicle3"> Bloom Book</label><br>
                                <input type="checkbox" id="publish4" name="publish5" value="250-400">
                                <label for="vehicle3"> Fahasa</label><br>
                                <input type="checkbox" id="publish5" name="publish5" value="400">
                                <label for="vehicle3"> Sky Book</label><br>
                                </div>
                            </div>
                            <div class="price">
                                <label class="label-filter" for="">GIÁ</label><br>
                                <div class="checkbox">
                                <input type="checkbox" id="price1" name="price1" value="50">
                                <label for="vehicle1"> dưới 50.000đ</label><br>
                                <input type="checkbox" id="price2" name="price2" value="50-150">
                                <label for="vehicle2"> 50.000đ - 150.000đ</label><br>
                                <input type="checkbox" id="price3" name="price3" value="150-250">
                                <label for="vehicle3"> 150.000đ - 250.000đ</label><br>
                                <input type="checkbox" id="price3" name="price4" value="250-400">
                                <label for="vehicle3"> 250.000đ - 400.000đ</label><br>
                                <input type="checkbox" id="price3" name="price5" value="400">
                                <label for="vehicle3"> Trên 400.000đ</label><br>
                                </div>
                            </div>
                            <div class="publisher"></div>
                            <div class="age">

                            </div>
                        </div>
                    </div>
                    <div class="right-content col-9">
                        <div class="top-right-content">
                            <div class="row">
                                <div class="col">
                                    <div class="flash-sale">
                                        <div class="icon-top-center">
                                            <img src="{{asset('/frontend/img/ico_flashsale.png')}}" style = "width:30%" alt="">
                                        </div>
                                        <div class="title-top-center">Flash sale</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="flash-sale">
                                        <div class="icon-top-center">
                                            <img src="{{asset('/frontend/img/ico_goiy.png')}}" style = "width:30%"  alt="">
                                        </div>
                                        <div class="title-top-center">Gợi ý</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="flash-sale">
                                        <div class="icon-top-center">
                                            <img src="{{asset('/frontend/img/ico_kinhte.png')}}" style = "width:30%" alt="">
                                        </div>
                                        <div class="title-top-center">Wibu die</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="flash-sale">
                                        <div class="icon-top-center">
                                            <img src="{{asset('/frontend/img/ico_PCSC.png')}}" style = "width:30%" alt="">
                                        </div>
                                        <div class="title-top-center">Yêu thích</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="flash-sale">
                                        <div class="icon-top-center">
                                            <img src="{{asset('/frontend/img/ico-xuhuong.png')}}" style = "width:30%" alt="">
                                        </div>
                                        <div class="title-top-center">Xu hướng</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        <div class="category-list-product">
                            <div class="sortby">
                                
                                <div class="sort-by">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option value="priceup">Giá từ thấp - cao</option>
                                    <option value="pricedown">Giá từ cao - thấp</option>
                                    <option value="sold">Bán chạy nhất</option>
                                    <option value="new">Sách mới ra</option>
                                </select>
                                </div>
                                
                            </div>
                        <div class="list-product row">
                        
                        <div class="col-4">
                            <div class="book-1">
                                <div class="img-book">
                                    <img src="{{asset('/frontend/img/book1.png')}}" alt="" style ="width:200px">
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
                        <div class="col-4">
                        <div class="book-1">
                                <div class="img-book">
                                    <img src="{{asset('/frontend/img/book2.png')}}" alt="" style ="width:200px">
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
                        <div class="col-4">
                        <div class="book-1">
                                <div class="img-book">
                                    <img src="{{asset('/frontend/img/book3.png')}}" alt="" style ="width:200px">
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
                        <div class="col-4">
                        <div class="book-1">
                                <div class="img-book">
                                    <img src="{{asset('/frontend/img/book4.png')}}" alt="" style ="width:200px">
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
                        <div class="col-4">
                        <div class="book-1">
                                <div class="img-book">
                                    <img src="{{asset('/frontend/img/book5.png')}}" alt="" style ="width:200px">
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
                        </div>
                    </div>
                </div>
            </div>
</div>
    </div>
    @include('frontend.footer')
</body>
</html>
