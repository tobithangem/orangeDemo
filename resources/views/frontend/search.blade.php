<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
    <link rel="stylesheet" href="{{asset('/frontend/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/search.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/category.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
@include('frontend.header')

<body>
<div class="category-list-product">
                    
                    <div class="labeltop">
                    <div class="labelsearch ">
                        Kết quả tìm kiếm cho từ khoá: "{{$keyword}}""
                    </div>
                            <div class="sortby">
                                
                                
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option value="priceup">Giá từ thấp - cao</option>
                                    <option value="pricedown">Giá từ cao - thấp</option>
                                    <option value="sold">Bán chạy nhất</option>
                                    <option value="new">Sách mới ra</option>
                                </select>
                                
                                
                            </div>
                    </div>
                    
                        <div class="list-product row">
                        @forelse ($productSearch as $item)
                        <div class="col-3">
                            <div class="book-1">
                                <a href="{{url('/detail',[$item->productId])}}" >
                                <div class="img-book">
                                    <img src="{{url('storage/',[$item->prductImage])}}" alt="" style ="width:200px">
                                    
                                </div>
                                <div class="name-book">
                                    <a>{{$item->productName}}</a>
                                    
                                </div>
                                </a>
                                <div class="price-book">
                                    <div class="new-price">
                                    {{$item->price}} vnđ
                                    </div>
                                    
                                </div>
                                <div class="rate-book"></div>
                                <div class="amount-sold"> Đã bán 10</div>

                            </div>
                        </div>
                        @empty
                            <h1>Không tìm thấy sản phẩm</h1>
                        @endforelse
                        </div>
                    </div>
                    
@include('frontend.footer')

</body>

