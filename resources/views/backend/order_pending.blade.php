@extends('backend.layout.app')

@section('title', 'Chờ duyệt')

@section('content')
<div id="content">
    <div class="product-manager">
        <h3>
            <i class="fas fa-snowplow"></i>
            Đơn chờ duyệt
        </h3>
        <div class="filter">
            <div class="searchform">
                <i class="fas fa-search"></i>
                <form autocomplete="off" action="{{route('orderpending.search')}}" method="POST">
                    @csrf
                    <input class="search-form" name="keyword" value="{{$keyword}}" type="search" placeholder="Tìm sản phẩm">
                </form>
            </div>
        </div>
    </div>
    {{--<div class="table-order">
        <div class="table-sub-order">
        <table>
            <tr class="table-tr-order">
                <th></th>
                <th > <span class="thead-order">Id</span> </th>
                <th > <span class="thead-order">Người mua</span> </th>
                <th > <span class="thead-order">Giá</span> </th>
                <th > <span class="thead-order">Thanh toán</span> </th>
                <th > <span class="thead-order">Trạng thái</span> </th>
                <th > <span class="thead-order">Thực thi</span> </th>
            </tr>
            @foreach ($orders as $order)
                <tr class="table-tr-order">
                    <td>
                        <input type="checkbox">
                    </td>
                    <td>{{$order->orderId}}</td>
                    <td>Id: {{$order->customerId}}<br>Địa chỉ: {{$order->addressDelivery}}</td>
                    <td>{{$order->total}}
                    </td>
                    <td>{{$order->payments}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <a class="btn-edititem" href="{{route('admin.orderdetails')}}">
                            <i class="fas fa-check"></i>
                            Xem
                        </a>
                        <a class="btn-deleteitem">
                            <i class="fas fa-times"></i>
                            Hủy
                        </a>
                    </td>
                </tr> 
             @endforeach
        </div>
        </table>
    </div>--}}
    <div class="table-book" >
        <div class="table-scroll">
            <table>
                <thead>
                    <tr class="table-thead">
                    <th ><span class="text-1"></span></th>
                    <th ><span class="text-1" >Id</span></th>
                    <th ><span class="text-1">Người mua</span></th>
                    <th ><span class="text-1">Giá</span></th>
                    <th ><span class="text-1">Thanh toán</span></th>
                    <th ><span class="text-1">Trạng thái</span></th>
                    <th ><span class="text-1">Thực thi</span></th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($orders as $order)
                    <tr class="table-tbody">
                        <td>
                            <input type="checkbox" >
                        </td>
                        <td>{{$order->orderId}}</td>
                        <td> Id: {{$order->customerId}}
                            <br> SDT: {{$order->phone}}
                            <br> Ngày đặt: {{$order->orderDate}}
                        </td>
                        <td>{{$order->total}}đ
                        </td>
                        <td>{{$order->payments}}</td>
                        <td >{{$order->status}}</td>
                        <td>
                            <a class="btn-edititem" href="{{route('admin.orderdetails',[$order->customerId, $order->orderId])}}">
                                <i class="fas fa-check"></i>
                                Xem
                            </a>
                            <a class="btn-deleteitem" href="{{route('order.delete',[$order->orderId])}}">
                                <i class="fas fa-times"></i>
                                Xóa
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection