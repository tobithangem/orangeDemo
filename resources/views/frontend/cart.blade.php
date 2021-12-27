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
    <!-- <link rel="stylesheet" href="{{asset('/frontend/css/payment.css')}}"> -->
    <link href="{{asset('/frontend/css/cart.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
<style>
    
</style>
</head>
<body>
    @include('frontend.header')
    <div class="center">
        <div class="container">
            <div class = "title row" style = "height: 65px">
                <div class="col-8">
                    <div class="title">
                        Giỏ Hàng
                    </div>
                </div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
            <div class="row" style="height: 10px; background-color: gainsboro">
                <div class="col"></div>
            </div>
            <div class = "toolbar row">
                <div class="col-8">
                    <div class="header-item-cart"  style="display: flex">
                        <div class="checkbox">
                            <input class="checkbox" type="checkbox" />
                        </div>
                        <div class="select-all">Chọn tất cả</div>
                        <div class="price">Giá tiền</div>
                        <div class="quantity">Số lượng</div>
                        <div class="total">Thành tiền</div>
                        <div class="delete">Xóa</div>
                    </div>
                    @foreach ($productcart as $item)
                    <div class="detail-item-cart"  style="display: flex">
                        <div class="checkbox">
                            <input class="checkbox" type="checkbox" />
                        </div>
                        <div class="select-all">
                            <a class="product-cart" href="{{url('/detail',[$item->productId])}}">
                            <div class="img-book">
                                <img src="{{url('storage/',[$item->prductImage])}}" alt="" style = "width: 150px; height: 130px">
                            </div>
                            <div class="name-book">{{$item->productName}}</div>
                            </a>
                        </div>
                        <div class="price">
                            <span>{{$item->price}}</span>
                        </div>
                        <div class="quantity">
                            <div class="number"  style="display: flex">
                                <button>
                                    <div class="minus">-</div>
                                </button>
                                <div><input type="text" value="{{$item->quantityincart}}" id="number"/></div>
                                <button>
                                    <div class="plus">+</div>
                                </button>
                            </div>
                        </div>
                        <div class="total">
                            <span>{{$item->price*$item->quantityincart}}</span>
                        </div>
                        <div class="delete">
                        <button>
                            <div class="btn-icon"></div>
                            <a class="deletecart" href="{{url('deletecart',[$item->productId])}}">
                            <div class="btn-text">Xóa</div>
                            </a>
                        </button></div>
                    </div>
                    @endforeach
                    <!-- <div class="detail-item-cart"  style="display: flex">
                        <div class="checkbox">
                            <input class="checkbox" type="checkbox" />
                        </div>
                        <div class="select-all">
                            <div class="img-book">
                                <img src="../../../public/frontend/img/book2.png" alt="" style = " width: 100px; height: 130px">
                            </div>
                            <div class="name-book">Từ điển cho em</div>
                        </div>
                        <div class="price">
                            <span>32.000</span>
                        </div>
                        <div class="quantity">
                            <div class="number"  style="display: flex">
                                <button>
                                    <div class="minus">-</div>
                                </button>
                                <div><input type="text" value="1" id="number"/></div>
                                <button>
                                    <div class="plus">+</div>
                                </button>
                            </div>
                        </div>
                        <div class="total">
                            <span>64.000</span>
                        </div>
                        <div class="delete">
                            <button>
                                <div class="btn-icon"></div>
                                <div class="btn-text">Xóa</div>
                            </button>
                        </div>
                    </div> 
                    <div class="detail-item-cart"  style="display: flex">
                        <div class="checkbox">
                            <input class="checkbox" type="checkbox" />
                        </div>
                        <div class="select-all">
                            <div class="img-book">
                                <img src="../../../public/frontend/img/book2.png" alt="" style = " width: 100px; height: 130px">
                            </div>
                            <div class="name-book">Từ điển cho em</div>
                        </div>
                        <div class="price">
                            <span>64.000</span>
                        </div>
                        <div class="quantity">
                            <div class="number"  style="display: flex">
                                <button>
                                    <div class="minus">-</div>
                                </button>
                                <div><input type="text" value="1" id="number"/></div>
                                <button>
                                    <div class="plus">+</div>
                                </button>
                            </div>
                        </div>
                        <div class="total">
                            <span>64.000</span>
                        </div>
                        <div class="delete">
                            <button>
                                <div class="btn-icon"></div>
                                <div class="btn-text">Xóa</div>
                            </button>
                        </div>
                    </div>
                    <div class="detail-item-cart"  style="display: flex">
                        <div class="checkbox">
                            <input class="checkbox" type="checkbox" />
                        </div>
                        <div class="select-all">
                            <div class="img-book">
                                <img src="../../../public/frontend/img/book2.png" alt="" style = " width: 100px; height: 130px">
                            </div>
                            <div class="name-book">Từ điển cho em</div>
                        </div>
                        <div class="price">
                            <span>16.000</span>
                        </div>
                        <div class="quantity">
                            <div class="number"  style="display: flex">
                                <button>
                                    <div class="minus">-</div>
                                </button>
                                <div><input type="text" value="1" id="number"/></div>
                                <button>
                                    <div class="plus">+</div>
                                </button>
                            </div>
                        </div>
                        <div class="total">
                            <span>64.000</span>
                        </div>
                        <div class="delete">
                            <button>
                                <div class="btn-icon"></div>
                                <div class="btn-text">Xóa</div>
                            </button>
                        </div>
                    </div> -->
                </div> 
                <div class="col-4">
                    <div class="header-buy">
                        <div>Thành tiền</div>
                    </div>
                    <div class="price-buy">
                        <div class="price-product">
                            <div class="text">Thành tiền</div>
                            <span>{{$total}} VNĐ</span>
                        </div>
                        <div class="price-ship">
                            <div class="text">Phí vận chuyển</div>
                            <span>15.000 VNĐ</span>
                        </div>
                        <div class="price-total">
                            <div class="text" style="font-weight: bold">Tổng số tiền</div>
                            <span style="font-weight: bold; color: red">{{$total + 15000}} VNĐ</span>
                        </div>
                        <div class="button-payment">
                            <button>
                                <a href="{{route('payment')}}">
                                    <div class="btn-payment">THANH TOÁN</div>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class = "footer">
        <div class="container">
            <div class = "row">
                <div class="col-4" style = "background-color:white">
                    <div class = "left-footer">
                        <div class = "logo-footer"> 
                            <img src="../../../public/frontend/img/logo.png" alt="" style = " width:100%">
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
<script>
    
</script>