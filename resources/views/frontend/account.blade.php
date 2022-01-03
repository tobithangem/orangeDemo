<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="utf-8" />
        <link rel="stylesheet" href="{{asset('/frontend/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/account.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    </head>
    <body>
        <!-- Header -->
   @include('frontend.header')

        <!-- body -->

    <div class="center">
        
        <div class="title-info" style="display:flex">
            <p>Thông tin cá nhân</p>
            <button class="btn btn-danger logout">
                <a href="{{url('/logout')}}">Đăng xuất</a>
            </button>
        </div>
        <div class="form-info">
        @foreach ($customer as $item)
            <form class="info"> 
                <div class="name" style="display: flex">
                    <label>Họ và tên:<span style="color: red;">*</span></label>
                    <div>{{$item->customerName}}</div>
                </div>
                <div class="username" style="display: flex">
                    <label>Tên đăng nhập:<span style="color: red;">*</span></label>
                    <div>{{$item->username}}</div>
                </div>
                <div class="password" style="display: flex">
                    <label>Mật khẩu:<span style="color: red;">*</span></label>
                    <div>{{$item->password}}</div>
                </div>
                <div class="phoneNumber" style="display: flex">
                    <label>Số điện thoai:<span style="color: red;">*</span></label>
                    <div>{{$item->phoneNumber}}</div>
                </div>
                <div class="email" style="display: flex">
                    <label>Email:<span style="color: red;">*</span></label>
                    <div>{{$item->email}}</div>
                </div>
                <div class="dateOfbirth" style="display: flex">
                    <label>Ngày sinh:<span style="color: red;">*</span></label>
                    <div>{{$item->dateOfbirth}}</div>
                </div>
                <div class="address" style="display: flex">
                    <label>Địa chỉ:<span style="color: red;">*</span></label>
                    <div>{{$item->address}}</div>
                </div>
                
            </form>
            @endforeach
        </div>

        <div class="title-order">
            <p>Danh sách đơn hàng</p>
        </div>

        <div class="form-order">
            <!-- <div class="order" style="display:flex">
                <div class="order-id">ID</div>
                <div class="order-price">Thanh toán</div>
                <div class="order-date">Ngày đặt hàng</div>
                <div class="order-status">Trạng thái</div> 
            </div> -->
            <table  style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 10%; ">ID</th>
                        <th style="width: 50%; ">Sản phẩm</th>
                        <th style="width: 10%;">Thanh toán</th>
                        <th style="width: 15%; ">Ngày đặt hàng</th>
                        <th style="width: 15%;">Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customerOrder as $order)
                    
                    <tr>
                        <th style="width: 10%;">{{$order->orderId}}</th>
                        <th style="width: 50%;">
                            @foreach ($orderdetail as $detail)
                                @if([$order->orderId] == [$detail->orderId])
                            <div>
                            {{$detail->productName}} SL: {{$detail->quantityOrder}}
                            </div>
                            @endif
                            @endforeach
                        </th>   
                        <th style="width: 10%;">{{$order->total}}</th>
                        <th style="width: 15%; ">{{$order->orderDate}}</th>
                        <th style="width: 15%;">{{$order->status}}</th>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

    </div>

        <!-- Footer -->
    @include('frontend.footer')
    </body>
</html>
<body>

        

    
