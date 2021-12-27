@extends('backend.layout.app')

@section('title', 'Đã duyệt')

@section('content')
<div id="content">
    <div class="product-manager">
        <h3>
            <i class="fas fa-snowplow"></i>
            Đơn đã duyệt
        </h3>
        <div class="filter">
            <div class="searchform">
                <i class="fas fa-search"></i>
                <form autocomplete="off" action="{{route('ordershipping.search')}}" method="POST">
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
            <tr class="table-tr-order">
                <td>
                    <input type="checkbox">
                </td>
                <td>1</td>
                <td>Thắng Em - 0373051246<br>Địa chỉ: 1194 đường Láng, Đống Đa, Hà Nội</td>
                <td>645.000đ
                </td>
                <td>Ship COD</td>
                <td>Đã duyệt</td>
                <td>
                    <a class="btn-edititem" href="#">
                        <i class="fas fa-check"></i>
                        Xem chi tiết
                    </a>
                </td>
            </tr>
            <tr class="table-tr-order">
                <td>
                    <input type="checkbox">
                </td>
                <td>1</td>
                <td>Thắng Em - 0373051246<br>Địa chỉ: 1194 đường Láng, Đống Đa, Hà Nội</td>
                <td>645.000đ
                </td>
                <td>Ship COD</td>
                <td>Đã duyệt</td>
                <td>
                    <a class="btn-edititem" href="#">
                        <i class="fas fa-check"></i>
                        Xem chi tiết
                    </a>
                </td>
            </tr>
            <tr class="table-tr-order">
                <td>
                    <input type="checkbox">
                </td>
                <td>1</td>
                <td>Thắng Em - 0373051246<br>Địa chỉ: 1194 đường Láng, Đống Đa, Hà Nội</td>
                <td>645.000đ
                </td>
                <td>Ship COD</td>
                <td>Đã duyệt</td>
                <td>
                    <a class="btn-edititem" href="#">
                        <i class="fas fa-check"></i>
                        Xem chi tiết
                    </a>
                </td>
            </tr>
            <tr class="table-tr-order">
                <td>
                    <input type="checkbox">
                </td>
                <td>1</td>
                <td>Thắng Em - 0373051246<br>Địa chỉ: 1194 đường Láng, Đống Đa, Hà Nội</td>
                <td>645.000đ
                </td>
                <td>Ship COD</td>
                <td>Đã duyệt</td>
                <td>
                    <a class="btn-edititem" href="#">
                        <i class="fas fa-check"></i>
                        Xem chi tiết
                    </a>
                </td>
            </tr>
            <tr class="table-tr-order">
                <td>
                    <input type="checkbox">
                </td>
                <td>1</td>
                <td>Thắng Em - 0373051246<br>Địa chỉ: 1194 đường Láng, Đống Đa, Hà Nội</td>
                <td>645.000đ
                </td>
                <td>Ship COD</td>
                <td>Đã duyệt</td>
                <td>
                    <a class="btn-edititem" href="#">
                        <i class="fas fa-check"></i>
                        Xem chi tiết
                    </a>
                </td>
            </tr>
            <tr class="table-tr-order">
                <td>
                    <input type="checkbox">
                </td>
                <td>1</td>
                <td>Thắng Em - 0373051246<br>Địa chỉ: 1194 đường Láng, Đống Đa, Hà Nội</td>
                <td>645.000đ
                </td>
                <td>Ship COD</td>
                <td>Đã duyệt</td>
                <td>
                    <a class="btn-edititem" href="#">
                        <i class="fas fa-check"></i>
                        Xem chi tiết
                    </a>
                </td>
            </tr>
            <tr class="table-tr-order">
                <td>
                    <input type="checkbox">
                </td>
                <td>1</td>
                <td>Thắng Em - 0373051246<br>Địa chỉ: 1194 đường Láng, Đống Đa, Hà Nội</td>
                <td>645.000đ
                </td>
                <td>Ship COD</td>
                <td>Đã duyệt</td>
                <td>
                    <a class="btn-edititem" href="#">
                        <i class="fas fa-check"></i>
                        Xem chi tiết
                    </a>
                </td>
            </tr>
            <tr class="table-tr-order">
                <td>
                    <input type="checkbox">
                </td>
                <td>1</td>
                <td>Thắng Em - 0373051246<br>Địa chỉ: 1194 đường Láng, Đống Đa, Hà Nội</td>
                <td>645.000đ
                </td>
                <td>Ship COD</td>
                <td>Đã duyệt</td>
                <td>
                    <a class="btn-edititem" href="#">
                        <i class="fas fa-check"></i>
                        Xem chi tiết
                    </a>
                </td>
            </tr>

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
                        <td style="width: 80px;">{{$order->status}}</td>
                        <td>
                            <a class="btn-edititem" href="{{route('admin.orderdetails',[$order->customerId, $order->orderId])}}">
                                <i class="fas fa-check"></i>
                                Xem
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