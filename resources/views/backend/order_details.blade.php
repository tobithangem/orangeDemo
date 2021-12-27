@extends('backend.layout.app')

@section('title', 'Chi tiết đơn hàng')

@section('content')
<div id="content">
    <div class="product-manager" style="margin-bottom: 40px;border-bottom: 1px solid;">
        <h3>
            <i class="fas fa-snowplow"></i>
            Chi tiết đơn hàng
        </h3>
    </div>
    <div class="container fluid" style="height: calc(100vh - 309px);padding-left:0px;color: black;">
        <div class="row" style="height: 100%;">
            <div class="col-sm-9" id="left-box">
                <h6 style="font-weight: bold;padding-bottom:20px;">  Đơn hàng: <i>{{$order->orderId}}</i> </h6>
                <div style="position: relative;margin-top:20px;">
                    <div class="table-orderdetail">
                        <table style="width:100%;">
                            <thead>
                                <tr style="border-bottom: 1px solid;">
                                    <td> <b class="b-order"></b> </td>
                                    <td> <b class="b-order">Id</b> </td>
                                    <td><b class="b-order">Ảnh</b></td>
                                    <td><b class="b-order">Tên sách</b></td>
                                    <td><b class="b-order">Giá tiền</b></td>
                                    <td><b class="b-order">Số lượng</b></td>

                                </tr>
                            </thead>
                            <tbody class="tbody-orderdetail">
                                @foreach ($orderdetails as $orderdetail)
                                    <tr>
                                        <td>                            
                                            <input type="checkbox" >
                                        </td>
                                        <td style="width: 50px;">                            
                                            {{$orderdetail->productId}}
                                        </td>
                                        <td><img src="{{url('storage/',[$orderdetail->unitImg])}}" alt="" style="width:80px; height: auto;"></td>
                                        <td>{{$orderdetail->productName}}</td>
                                        <td>{{$orderdetail->unitPrice}}</td>
                                        <td style="width: 80px;">{{$orderdetail->quantityOrder}}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" id="right-box">
                <div style="height: 50px;">
                    <a class="btn-edititem" href="{{route('order.confirm', [$order->orderId])}}">
                        <i class="fas fa-check"></i>
                        Duyệt 
                    </a>
                    <a class="btn-deleteitem" onclick="history.back()">
                        <i class="fas fa-undo"></i>
                        Quay lại
                    </a>
                </div>

                <div>
                    <h6 style="font-weight: bold;">Thông tin khách hàng</h6>
                    <p class="p-tag"> <b>Id:</b>  {{$customer->customerId}}</p>
                    <p class="p-tag"><b>Tên người nhận:</b> {{$order->personName}}</p>
                    <p class="p-tag"><b>Sdt người nhận:</b> {{$order->phone}}</p>
                    <p class="p-tag"><b>Hình thức thanh toán:</b> {{$order->payments}}</p>

                    <p class="p-tag"><b>Địa chỉ người nhận:</b> {{$order->addressDelivery}}</p>
                    <p class="p-tag"><b>Thành tiền:</b> {{$order->total}}đ</p>
                    <p class="p-tag"><b>Ngày đặt:</b> {{$order->orderDate}}</p>
                    <p class="p-tag"><b>Trạng thái:</b> {{$order->status}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection