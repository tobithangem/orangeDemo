@extends('backend.layout.app')

@section('title', 'Danh sách sản phẩm')

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
                <form autocomplete="off" action="{{route('admin.product_search')}}" method="POST">
                    @csrf
                    <input class="search-form" name="keyword" value="{{$keyword}}" type="search" placeholder="Tìm sản phẩm">
                </form>
            </div>
            <div class="delete_message">
                @if(session()->has('message_delete'))
                <i class="fas fa-exclamation-circle "></i>
                {{ session()->get('message_delete') }}
                @endif
                @if(session()->has('message_edit'))
                <i class="fas fa-exclamation-circle "></i>
                {{ session()->get('message_edit') }}
                @endif
            </div>

        </div>
    </div>
    <div class="table-book" >
        <div class="table-scroll">
            <table>
                <thead>
                    <tr class="table-thead">
                    <th ><span class="text-1"></span></th>
                    <th ><span class="text-1" >Id</span></th>
                    <th ><span class="text-1">Tên sách</span></th>
                    <th ><span class="text-1">Thông tin sách</span></th>
                    <th ><span class="text-1">Giá</span></th>
                    <th ><span class="text-1">Số lượng</span></th>
                    <th ><span class="text-1">Thực thi</span></th>
                    </tr>
                </thead>
                <tbody >
                @if (empty($keyword))
                    @foreach ($products as $item)
                    <tr class="table-tbody">
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
                        <td>
                            <a class="btn-edititem" onclick="show_dialog({{$item->productId}})">
                                <i class="fas fa-edit"></i>
                                Sửa
                            </a>
                            <a class="btn-deleteitem" href="{{route('admin.delete_product',[$item->productId])}}">
                            <i class="fas fa-minus"></i>
                            Xóa
                            </a>
                        </td>
                        <td>
                            <div class="dialog overlay" id="dialog-{{$item->productId}}">
                                <form autocomplete="off" class="dialog-body" method="POST" enctype="multipart/form-data" action="{{route('admin.edit_product',[$item->productId])}}">
                                    @csrf 
                                    <div class="infor">
                                        <div class="area-img">
                                            <img id="item-img" src="{{url('storage/',[$item->prductImage])}}" alt="Book Image">
                                            <input type="file" name="file" onchange="readURL(this);">
                                        </div>
                                        <div class="area-basicinfor">
                                            <table>
                                                <tr>
                                                    <td>Tên sách
                                                        <input type="text" name="productName" value="{{$item->productName}}" class="text-infor" required>
                                                    </td>
                                                    <td>Tác giả
                                                        <input type="text" name="author" value="{{$item->author}}" class="text-infor" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Người dịch
                                                        <input type="text" name="translator"  value="{{$item->translator}}" class="text-infor" required>
                                                    </td>
                                                    <td>
                                                        Nhà xuất bản
                                                        <input type="text"  name="publisher" value="{{$item->publisher}}" class="text-infor" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Số trang
                                                        <input type="text" name="numberPage" value="{{$item->numberPage}}" class="text-infor" required>
                                                    </td>
                                                    <td>Số lượng
                                                        <input type="text" name="quantity" value="{{$item->quantity}}"  class="text-infor" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ngày ra mắt
                                                        <input type="date" name="publicDate" value="{{$item->publicDate}}" class="text-infor" required>
                                                    </td>
                                                    <td>Giá
                                                        <input type="text" name="price" value="{{$item->price}}" class="text-infor" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thể loại
                                                        <select name="category" id="category">
                                                            <option value="{{$item->category}}">{{$item->category}}</option>
                                                                @foreach ($categories as $category)
                                                                <option value="{{$category->category}}">{{$category->category}}</option>
                                                                @endforeach
                                                          </select>
                                                    </td>
                                                    <td>
                                                        Mã sản phẩm
                                                        <input type="text" name="productCode" value="{{$item->productCode}}" class="text-infor" required>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Giới thiệu</p>
                                        <textarea class="text-des" name="description"  id="" cols="90" rows="4" required>{{$item->description}}</textarea>
                                    </div>
                                    <div class="dialog-action">
                                        <button type="submit" class="btn-savedialog" >
                                            <i class="far fa-save"></i>
                                            Lưu
                                        </button>
                                        <a onclick="hide_dialog({{$item->productId}})" class="btn-canceldialog">
                                            <i class="fas fa-times"></i>
                                            Hủy
                                        </a>
                                    </div>
                                </form>
                            </div>
                            
                        </td>
                    </tr>

                    @endforeach
                @elseif (!empty($keyword) && $products != null)
                    @foreach ($products as $item_search)
                    <tr>
                        <td>
                            <input type="checkbox" value="{{$item_search->productId}}">
                        </td>
                        <td>{{$item_search->productId}}</td>
                        <td>{{$item_search->productName}}</td>
                        <td>Tác giả: {{$item_search->author }}
                            <br>Thể loại: {{$item_search->category }}
                        </td>
                        <td>{{$item_search->price}}đ</td>
                        <td>{{$item_search->quantity}}</td>
                        <td>
                            <a class="btn-edititem" onclick="show_dialog({{$item_search->productId}})"">
                                <i class="fas fa-edit"></i>
                                Sửa
                            </a>
                            <a class="btn-deleteitem" href="{{route('admin.delete_product',[$item_search->productId])}}">
                            <i class="fas fa-minus"></i>
                            Xóa
                            </a>
                        </td>
                        <td>
                            <div class="dialog overlay" id="dialog-{{$item_search->productId}}">
                                <form autocomplete="off" class="dialog-body" method="POST" enctype="multipart/form-data" action="{{route('admin.edit_product',[$item_search->productId])}}">
                                    @csrf
                                    <div class="infor">
                                        <div class="area-img">
                                            <img id="item-img" src="{{url('storage/',[$item->prductImage])}}" alt="Book Image">
                                            <input type="file" name="file" onchange="readURL(this);">
                                        </div>
                                        <div class="area-basicinfor">
                                            <table>
                                                <tr>
                                                    <td>Tên sách
                                                        <input type="text" name="productName" value="{{$item_search->productName}}" class="text-infor" required>
                                                    </td>
                                                    <td>Tác giả
                                                        <input type="text" name="author" value="{{$item_search->author}}" class="text-infor" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Người dịch
                                                        <input type="text" name="translator"  value="{{$item_search->translator}}" class="text-infor" required>
                                                    </td>
                                                    <td>
                                                        Nhà xuất bản
                                                        <input type="text"  name="publisher" value="{{$item_search->publisher}}" class="text-infor" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Số trang
                                                        <input type="text" name="numberPage" value="{{$item_search->numberPage}}" class="text-infor" required>
                                                    </td>
                                                    <td>Số lượng
                                                        <input type="text" name="quantity" value="{{$item_search->quantity}}"  class="text-infor" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ngày ra mắt
                                                        <input type="date" name="publicDate" value="{{$item_search->publicDate}}" class="text-infor" required>
                                                    </td>
                                                    <td>Giá
                                                        <input type="text" name="price" value="{{$item_search->price}}" class="text-infor" required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thể loại
                                                        <select name="category" id="category">
                                                            <option value="{{$item_search->category}}">{{$item_search->category}}</option>
                                                                @foreach ($categories as $category)
                                                                <option value="{{$category->category}}">{{$category->category}}</option>
                                                                @endforeach
                                                          </select>
                                                    </td>
                                                    <td>
                                                        Mã sản phẩm
                                                        <input type="text" name="productCode" value="{{$item_search->productCode}}" class="text-infor" required>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <p>Giới thiệu</p>
                                        <textarea class="text-des" name="description"  id="" cols="90" rows="4" required>{{$item_search->description}}</textarea>
                                    </div>
                                    <div class="dialog-action">
                                        <button type="submit" class="btn-savedialog" >
                                            <i class="far fa-save"></i>
                                            Lưu
                                        </button>
                                        <a onclick="hide_dialog({{$item_search->productId}})" class="btn-canceldialog">
                                            <i class="fas fa-times"></i>
                                            Hủy
                                        </a>
                                    </div>
                                </form>
                            </div>
                            
                        </td>
                    </tr>
                    @endforeach
                @else
                    
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
{{--<div class="dialog overlay" id="dialog">
    <form autocomplete="off" class="dialog-body" method="POST" enctype="multipart/form-data" action="{{route('admin.store_product')}}">
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
                        <td>
                            Mã sản phẩm
                            <input type="text" name="translator"  class="text-infor" required>
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
                Lưu
            </button>
            <a href="#" class="btn-canceldialog">
                <i class="fas fa-times"></i>
                Hủy
            </a>
        </div>
    </form>
</div>--}}

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

    function show_dialog(paramater){
        let para = "dialog-"+paramater;
        document.getElementById(para).style.display = "flex";
    }
    function hide_dialog(paramater){
        let para = "dialog-"+paramater;
        document.getElementById(para).style.display = "none";
    }
</script>

@endsection