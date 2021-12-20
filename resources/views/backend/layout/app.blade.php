<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <link href="{{asset('/backend/css/productmanager.css')}}" rel="stylesheet">
    <link href="{{asset('/backend/css/dashboard.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ruda' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('font_awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <style>
        body {
            color: #797979;
	        background: #f2f2f2;
            font-family: 'Ruda', sans-serif;
            padding: 0px !important;
            margin: 0px !important;
            font-size: 13px;
            letter-spacing: 0.9px;
            box-sizing: border-box;
        }

        ul li {
            list-style: none;
        }
        a, a:hover, a:focus {
            text-decoration: none;
            outline: none;
        }
        p {
            margin: 0;
            padding: 0;
        }
        textarea:focus, input:focus {
            outline: none;
        }
        button {
            border: none;
        }
        button:focus {
            outline: none;
        }
        input[type=search]::-webkit-search-cancel-button {
            -webkit-appearance: searchfield-cancel-button;
        }

        #header {
            background-color: #424a5d;
            width: 100%;
            min-height: 60px;
            position: fixed;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid;
        }
        #header .logo {
            min-height: 60px;
            width: 200px;
            text-align: center;
            padding-top: 15px;
        }
        #header .logo .text-logo {
            font-size: 20px;
            text-transform: uppercase;
            color: orange;
            font-weight: 700;
            margin-top: 15px;       
            letter-spacing: 3px;
        }
        #header .logout {
            padding-top: 20px;
            min-height: 60px;
            width: 150px;
            text-align: center;
        }
        #header .logout .btn-logout {
            font-size: 13px;
            padding: 6px 15px 6px 15px;
            border: 1px solid;
            border-radius: 4px;
            color: orange;
            background-color: transparent;
        }
        #header .logout .btn-logout:hover {
            background-color: rgb(61, 171, 204) !important;
            color: white;
        }


        #sidebar {
            top: 61px;
            left: 0px;
            width: 200px;
            height: 100%;
            position: fixed;
            background: #358796;
            color: white;
            padding: 15px;
            font-size: 12px;
        }
        #sidebar .sidebar {
            padding: 0;
            height: 100%;
        }
        .sidebar-infor .avatar {
            cursor: pointer;
            width: 90px;
            border-radius: 50%;
        }
        .sidebar .sidebar-infor {
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            padding-bottom: 30px;
        }
        .sidebar .sidebar-infor:hover {
            background: #358796 !important;
        }

        #sidebar > ul > li {
            margin-bottom: 5px;
            display: flex;
        }
        #sidebar > ul > li:hover {
            background-color: #68dff0;
        }
        #sidebar > ul > li.sidebar-ordercollapse:hover {
            background-color: transparent;
        }
        .sidebar > li > a {
            padding-top: 15px;
            padding-left: 10px;
            padding-bottom: 15px;
            width: 100%;
            color: white;
        }
        .sidebar > li > a > i {
            width: 18px;
            height: auto;
        }
        .sidebar-ordercollapse {
            display: flex;
            flex-direction: column;
        }
        #sidebar > ul > li.sidebar-ordercollapse > a:hover {
            background-color: #68dff0;
        }
        .sidebar-ordercollapse .collapse {
            font-weight: 300;
            background-color: transparent !important;
        }
        .sidebar-ordercollapse > ul {
            padding-left: 32px;
        }
        .sidebar-ordercollapse > ul > li {
            margin-top: 15px;
            margin-bottom: 15px;
            cursor: pointer;
        }
        .sidebar-ordercollapse > ul > li:hover {
            color: orange;
        }

        #content {
            position: relative;
            top: 60px;
            left: 200px;
            width: calc(100% - 200px);
        }
    </style>
</head>

<body>
    <!--Header-->
    @include('backend.layout.header')

    <!--Sidebar-->
    @include('backend.layout.sidebar')

    @yield('content')

</body>

</html>