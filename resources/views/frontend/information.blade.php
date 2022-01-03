<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
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
<div>  
    <div class = "center">
    @foreach ($productdetail as $item)
        <div class="left">
            <div class="img">
                <!-- <div class="small-img">
                    <div class="img1">
                        <img src="../../../public/frontend/img/image_217141.jpg" class="d-block w-100">
                    </div>
                    <div class="img1">
                        <img src="../../../public/frontend/img/image_217141.jpg" class="d-block w-100">
                    </div>
                    <div class="img1">
                        <img src="../../../public/frontend/img/image_217141.jpg" class="d-block w-100">
                    </div>
                </div> -->
                <div class="big-img">
                    <img src="{{url('storage/',[$item->prductImage])}}" style="height: 300px; margin-top: 35px">
                </div>
            </div>
            
        </div>
        
        <div class="right">
            <div class="title">{{$item->productName}}</div>
            <div class="infor">
                <div class="publishing-company">
                    Nhà xuất bản:
                    <div class="NXB">{{$item->publisher}}</div>
                </div>
                <div class="author">Tác giả: 
                    <div class="TG">{{$item->author}}</div>
                </div>
            </div>
            <div class="cover-form">
                    Hình thức bìa:
                    <div class="HTB">Bìa mềm</div>
            </div>
            <div class="introduce">
            {{$item->description}}
                <!-- Liệt thần là phần tiếp theo nối Tuyết đen, một nhân vật mới xuất hiện -Tuyết Hoa Phi Vũ - đã làm khuynh đảo giang hồ. Với dáng vẻ thư sinh yếu ớt, dung mạo như tuyệt đẹp nhưng ẩn giấu trong mình là võ công phi phàm. Sau khi tiếp cận Đông Tử, Tuyết Hoa Phi Vũ đã đem lòng yêu và muốn chinh phục nàng. Mặc dù Đông Tử vẫn luôn thương nhớ Vạn Độc Vương. Tuyết Hoa Phi Vũ đã lợi dụng tình cảm trong sáng của Đông Tử để khiến Vạn Độc Vương xuất hiện, đồng thời một chưởng đoạt hạt Phong vũ châu của Vạn Độc Vương. Liệu không có Phong vũ châu Vạn Độc -->
            </div>
            <div class="price">
                Giá:
                <div class="GC">{{$item->price}} VNĐ</div>
            </div>
            
        </div>
    
    </div>
    <form method="post" action= "{{url('addtocart',[$item->productId])}}">
    {{csrf_field()}}
    <div class="click">
        <div class="button">
                <div class="button-add">
                    <button type="submit">
                        <div class="btn-text" style="color: white">
                        Thêm vào giỏ hàng
                    </div>
                    </button>
                    
                </div>
                
        
                <div class="quantity">
                <div>Số lượng:</div>
                <div class="number">
                    
                    <div class="form-group">
                        <input type="number" value="1" id="number" class="quantityadd" name="quantityadd" />
                    </div>
                    
                </div>
                
            </div>
            
        </div>
    </form>
    <div class="mess">
    @if(session()->has('message_addtocart'))
    <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{session()->get('message_addtocart')}}</h5>
                            
                        </div>
                        
                        <div class="modal-footer" style="text-align:center">
                            
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
    </div>
    @endforeach
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
    @include ('frontend.footer')
</body>
    
</html>
<script>
    function add_to_cart(event){
        event.preventDefault();
    }
    $('.form-group').on('input', '.quantityadd', function(){
    var quantity = $(this).val();
    
    if ($.isNumeric(quantity) && (quantity != 0))
    {
        $.ajax({
            type: 'get',
            url: '/Cart/add/'+Id+'/'+quantity,
            success: function(data){
                if (data == 'success') {                
                    alert('success');
                }
                else{
                    alert('failure');
                }

            },
            error:function(data){

            }
        });
    }
});
</script>