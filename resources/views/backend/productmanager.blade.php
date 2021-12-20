@extends('backend.layout.app')

@section('title', 'Quản lí sách')

@section('content')
<div id="content">
    <div class="product-manager">
        <h3>
            <i class="fas fa-snowplow"></i>
            Danh sách sản phẩm
        </h3>
        <div class="filter">
            <div class="searchform">
                <i class="fas fa-search"></i>
                <input class="search-form" type="search" placeholder="Tìm sản phẩm">
            </div>
            <div>
                <a class="btn-additem" href="#dialog">
                    <i class="fas fa-plus"></i>
                    Thêm mới
                </a>
                <a class="btn-edititem" href="#dialog">
                    <i class="fas fa-edit"></i>
                    Xem hoặc Sửa
                </a>
                <button class="btn-deleteitem">
                <i class="fas fa-minus"></i>
                Xóa
                </button>

            </div>
        </div>
    </div>
    <div class="table-book" >
        <table>
            <tr>
            <th>Checkbox</th>
            <th>Mã sách</th>
            <th>Tên sách</th>
            <th>Thông tin sách</th>
            <th>Giá</th>
            <th>Số lượng</th>
            </tr>
            
            @foreach ($products as $item)
            <tr>
                <td>
                    <input type="checkbox" value="{{$item->productId}}">
                </td>
                <td>{{$item->productId}}</td>
                <td>{{$item->productName}}</td>
                <td>Tác giả: {{$item->author }}
                    <br>Thể loại: {{$item->category }}
                </td>
                <td>{{$item->price}}đ</td>
                <td>{{$item->quantity}}</td>
            </tr>
            @endforeach
        </table>
        <div class="pagi">
            <a href="#">
                <i class="fas fa-arrow-left"></i>
            </a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<div class="dialog overlay" id="dialog">
    <form class="dialog-body" method="POST" enctype="multipart/form-data" action="{{route('admin.store_product')}}">
        @csrf
        <div class="infor">
            <div class="area-img">
                <img id="item-img" src="#" alt="Book Image">
                <input type="file" name="file" onchange="readURL(this);">
            </div>
            <div class="area-basicinfor">
                <table>
                    <tr>
                        <td>Tên sách
                            <input type="text" name="productName" class="text-infor" required>
                        </td>
                        <td>Tác giả
                            <input type="text" name="author" class="text-infor" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Người dịch
                            <input type="text" name="translator"  class="text-infor" required>
                        </td>
                        <td>
                            Nhà xuất bản
                            <input type="text"  name="publisher" class="text-infor" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Số trang
                            <input type="text" name="numberPage"  class="text-infor" required>
                        </td>
                        <td>Số lượng
                            <input type="text" name="quantity"  class="text-infor" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày ra mắt
                            <input type="date" name="publicDate"  class="text-infor" required>
                        </td>
                        <td>Giá
                            <input type="text" name="price" class="text-infor" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Thể loại
                            <select name="category" id="category" required>
                                <option value="">Chọn thể loại sách</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->category}}">{{$category->category}}</option>
                                    @endforeach
                              </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="description">
            <p>Giới thiệu</p>
            <textarea class="text-des" name="description"  id="" cols="90" rows="4" required></textarea>
        </div>
        <div class="dialog-action">
            <button type="submit" class="btn-savedialog">
                <i class="far fa-save"></i>
                Save
            </button>
            <a href="#" class="btn-canceldialog">
                <i class="fas fa-times"></i>
                Cancel
            </a>
        </div>
    </form>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#item-img')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection