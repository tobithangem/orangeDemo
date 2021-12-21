


<div id="sidebar">
    <ul class="sidebar">
        <li class="sidebar-infor">
            <img src="{{asset('/backend/img/avatar.jpg')}}" alt="avatar" class="avatar"><br>
            Tobi Thắng Em
        </li>
        <li class="sidebar-dashboard">
            <a href="{{route('admin.dashboard')}}">
                <i class="fas fa-tractor" ></i>
                Thống kê
            </a>
        </li>
        <li class="sidebar-ordercollapse">
            <a href="#" role="button" data-toggle="collapse" data-target="#ordercollapse1">
                <i class="fas fa-snowplow"></i>
                Quản lí sản phẩm
            </a>
            <ul class="collapse" id="ordercollapse1">
                <li>
                    <a class="collap-link" href="{{route('admin.listproduct')}}">Xem chi tiết</a>
                </li>
                <li>
                    <a class="collap-link" href="{{route('admin.addproduct')}}">Thêm mới</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-ordercollapse">
            <a href="#" role="button" data-toggle="collapse" data-target="#ordercollapse2">
                <i class="fas fa-truck-monster"></i>
                Quản lí đơn hàng
            </a>
            <ul class="collapse" id="ordercollapse2">
                <li>Đang đợi</li>
                <li>Đang giao</li>
                <li>Đã giao</li>
            </ul>
        </li>
        <li class="sidebar-contact">
            <a href="#">
                <i class="far fa-paper-plane"></i>
                Liên hệ
            </a>

        </li>
    </ul>
</div>
