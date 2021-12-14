<div id="sidebar">
    <ul class="sidebar">
        <li class="sidebar-infor">
            <img src="{{asset('/backend/img/avatar.jpg')}}" alt="avatar" class="avatar"><br>
            Tobi Thắng Em
        </li>
        <li class="sidebar-dashboard">
            <a href="{{route('admin.dashboard')}}">
                <i class="fas fa-tractor" ></i>
                Dashboard
            </a>
        </li>
        <li class="sidebar-product">
            <a href="{{route('admin.product')}}">
                <i class="fas fa-snowplow"></i>
                Products Manager
            </a>

        </li>
        <li class="sidebar-ordercollapse">
            <a href="#" role="button" data-toggle="collapse" data-target="#ordercollapse">
                <i class="fas fa-truck-monster"></i>
                Orders Manager
            </a>
            <ul class="collapse" id="ordercollapse">
                <li>Pending</li>
                <li>Shipping</li>
                <li>Shipped</li>
            </ul>
        </li>
        <li class="sidebar-contact">
            <a href="#">
                <i class="far fa-paper-plane"></i>
                Contact Master
            </a>

        </li>
    </ul>
</div>
