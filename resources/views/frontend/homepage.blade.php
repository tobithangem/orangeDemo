@extends('frontend.app')
@section('title', 'Trang chủ')
<body>

        

    
    
    @section('content')
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
                                <img src="{{asset('/frontend/img/slide1.png')}}" alt="Los Angeles" class="d-block w-100" style="height:398px">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/frontend/img/slide2.png')}}" alt="Chicago" class="d-block w-100" style="height:398px">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/frontend/img/slide3.png')}}" alt="New York" class="d-block w-100" style="height:398px">
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
                        <img src="{{asset('/frontend/img/ico-xuhuong.png')}}" style = "width:30%" alt="">
                    </div>
                    <div class="title-category">SÁCH BÁN CHẠY NHẤT THÁNG</div>
                </div>
                <div class="category-list-product">
                    <div class="row">
                    @foreach ($bestseller as $item)
                        <div class="col">
                            <div class="book-1">
                                <a href="{{url('/detail',[$item->productId])}}">
                                <div class="img-book">
                                    <img src="{{url('storage/',[$item->prductImage])}}" alt="" style ="width:200px">
                                </div>
                                <div class="name-book">
                                    <a>{{$item->productName}}</a>
                                    
                                </div>
                                </a>
                                <div class="price-book">
                                    <div class="new-price">
                                    {{$item->price}} vnđ
                                    </div>
                                    <div class="old-price">
                                    
                                    </div>
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold"> Đã bán {{$item->sold}}</div>

                            </div>
                        </div>
                        @endforeach
                        <!--  -->
                    </div>

                </div>
                <div class="bottom-category">
                    <button class="more-button btn">Xem thêm</button>
                </div>

            </div>
            <div class="category">
                <div class="top-category">
                    <div class="icon-title-category">
                        <img src="{{asset('/frontend/img/ico-xuhuong.png')}}" style = "width:30%" alt="">
                    </div>
                    <div class="title-category">SÁCH MỚI RA MẮT</div>
                </div>
                <div class="category-list-product">
                    <div class="row">
                    @foreach ($newproduct as $item)
                        <div class="col">
                            <div class="book-1">
                                <a href="{{url('/detail',[$item->productId])}}">
                                <div class="img-book">
                                    <img src="{{url('storage/',[$item->prductImage])}}" alt="" style ="width:200px">
                                </div>
                                <div class="name-book">{{$item->productName}}</div>
                                </a>
                                <div class="price-book">
                                    <div class="new-price">
                                        {{$item->price}} vnđ
                                    </div>
                                    
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold">
                                    Đã bán {{$item->sold}} 
                                </div>

                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="col">
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
                        </div> -->
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
@if(session()->has('message_confirm'))
                <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Bạn đã đặt hàng thành công</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <div class="modal-footer">
                            
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">OK</button>
                        </div>
                    </div>
                </div>
            </div>
<script>
    var myModal = new bootstrap.Modal(document.getElementById('myModal'), {})
    myModal.toggle();
</script>
@endif
</body>
    
</html>
@endsection
