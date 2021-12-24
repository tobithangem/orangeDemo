@extends('backend.layout.app')

@section('title', 'Chi tiết đơn hàng')

@section('content')
<div id="content">
    <div class="product-manager">
        <h3>
            <i class="fas fa-snowplow"></i>
            Chi tiết đơn hàng
        </h3>
    </div>
    <div>
        <h5>Thông tin người mua</h5>
        <p>Id: 27637182</p>
        <p>Tên: Thắng Em </p>
        <p>Số điện thoại: 0373051246</p>
        <p>Địa chỉ: Láng Thượng, Đống Đa, Hà Nội</p>
    </div>
    <div>
        <h5>Thông tin sản phẩm đã chọn</h5>
        <table>
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Tên sách</td>
                    <td>Số lượng</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>4234234</td>
                    <td>Từ tốt đến vĩ đại</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>4234234</td>
                    <td>Từ tốt đến vĩ đại</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>4234234</td>
                    <td>Từ tốt đến vĩ đại</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection