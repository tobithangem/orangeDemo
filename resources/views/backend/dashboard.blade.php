@extends('backend.layout.app')

@section('title', 'Thống kê')

@section('content')
<div id="content">
    <h3>
        <i class="fas fa-tractor" ></i>
        Tổng quan
    </h3>
    <div class="db-chart">
        <div class="dbchart-t">
            <div class="db-box1">
                <h5>Doanh thu tháng này</h5>
                <h4>31,210$</h4>
                <p>Tăng 1.232$</p>
                <img src="https://www.bootstrapdash.com/demo/purple-admin-free/assets/images/dashboard/circle.svg" alt="">

            </div>
            <div class="db-box2">

                <h5>Số đơn tháng này</h5>
                <h4>1,232</h4> 
                <p>Tăng 123 đơn</p>

                <img src="https://www.bootstrapdash.com/demo/purple-admin-free/assets/images/dashboard/circle.svg" alt="">  
            </div>
            <div class="db-box3">
                <h5>Số lượng thành viên</h5>  
                <h4>5,413</h4> 
                <p>Tăng 612 thành viên</p>
                <img src="https://www.bootstrapdash.com/demo/purple-admin-free/assets/images/dashboard/circle.svg" alt="">
            </div>
        </div>
        <div class="dbchart-b">
            <div id="area-chart-morris"></label>
        </div>
    </div>
</div>

<script>
    new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'area-chart-morris',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            { year: '2018', value: 1200 },
            { year: '2019', value: 1130 },
            { year: '2020', value: 1250 },
            { year: '2021', value: 1055 },
            { year: '2022', value: 1422 }
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'year',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Value']
    });
</script>
@endsection