@extends('backend.layout.app')

@section('title', 'Product Manager')

@section('content')
<div id="content">
    <div class="product-manager">
        <h3>
            <i class="fas fa-snowplow"></i>
            Product Manager
        </h3>
        <div class="filter">
            <div class="searchform">
                <i class="fas fa-search"></i>
                <input class="search-form" type="search" placeholder="Find by product code">
            </div>
            <div>
                <a class="btn-additem" href="#dialog">
                    <i class="fas fa-plus"></i>
                    Add new Book
                </a>
                <a class="btn-edititem">
                    <i class="fas fa-edit"></i>
                    Change
                </a>
                <button class="btn-deleteitem">
                <i class="fas fa-minus"></i>
                Delete
                </button>

            </div>
        </div>
    </div>
    <div class="table-book" >
        <table>
            <tr>
            <th></th>
            <th>No</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Infor</th>
            <th>Price</th>
            <th>In stock</th>
            </tr>
            <tr>
            <td>
                <input type="checkbox" checked="checked">
            </td>
            <td>1</td>
            <td>B0001</td>
            <td>Từ tốt đến vĩ đại</td>
            <td>Nhà xuất bản: NXB Trẻ
                <br>Tác giả: Jim Collins
            </td>
            <td>6.9$</td>
            <td>999</td>
            </tr>
            <tr>
            <td>
                <input type="checkbox">
            </td>
            <td>2</td>
            <td>B0001</td>
            <td>Từ tốt đến vĩ đại</td>
            <td>Nhà xuất bản: NXB Trẻ
                <br>Tác giả: Jim Collins
            </td>
            <td>6.9$</td>
            <td>999</td>
            </tr>
            <tr>
            <td>
                <input type="checkbox">
            </td>
            <td>3</td>
            <td>B0001</td>
            <td>Từ tốt đến vĩ đại</td>
            <td>Nhà xuất bản: NXB Trẻ
                <br>Tác giả: Jim Collins
            </td>
            <td>6.9$</td>
            <td>999</td>
            </tr>
            <tr>
            <td>
                <input type="checkbox">
            </td>
            <td>4</td>
            <td>B0001</td>
            <td>Từ tốt đến vĩ đại</td>
            <td>Nhà xuất bản: NXB Trẻ
                <br>Tác giả: Jim Collins
            </td>
            <td>6.9$</td>
            <td>999</td>
            </tr>
            <tr>
            <td>
                <input type="checkbox">
            </td>
            <td>5</td>
            <td>B0001</td>
            <td>Từ tốt đến vĩ đại</td>
            <td>Nhà xuất bản: NXB Trẻ
                <br>Tác giả: Jim Collins
            </td>
            <td>6.9$</td>
            <td>999</td>
            </tr>
            <tr>
            <td>
                <input type="checkbox">
            </td>
            <td>6</td>
            <td>B0001</td>
            <td>Từ tốt đến vĩ đại</td>
            <td>Nhà xuất bản: NXB Trẻ
                <br>Tác giả: Jim Collins
            </td>
            <td>6.9$</td>
            <td>999</td>
            </tr>
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
    <div class="dialog-body">
        <div class="infor">
            <div class="area-img">
                <img id="item-img" src="#" alt="Book Image">
                <input type="file" onchange="readURL(this);">
            </div>
            <div class="area-basicinfor">
                <table>
                    <tr>
                        <td>Product Code
                            <input type="text" class="text-infor">
                        </td>
                        <td>Author
                            <input type="text" class="text-infor">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Translator
                            <input type="text" class="text-infor">
                        </td>
                        <td>
                            Publishing company
                            <input type="text" class="text-infor">
                        </td>
                    </tr>
                    <tr>
                        <td>Pages
                            <input type="text" class="text-infor">
                        </td>
                        <td>Book Size
                            <input type="text" class="text-infor">
                        </td>
                    </tr>
                    <tr>
                        <td>Release
                            <input type="date" class="text-infor">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="description">
            <p>Description</p>
            <textarea class="text-des" name="" id="" cols="90" rows="4"></textarea>
        </div>
        <div class="dialog-action">
            <a href="#" class="btn-savedialog">
                <i class="far fa-save"></i>
                Save
            </a>
            <a href="#" class="btn-canceldialog">
                <i class="fas fa-times"></i>
                Cancel
            </a>
        </div>
    </div>
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