<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    
    <!-- <link rel="stylesheet" href="css/appv1.css"> -->

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/appme.css">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="css/dropzone.min.css"> -->
<!--     <link rel="stylesheet" href="css/basic.min.css"> -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link rel="stylesheet" href="css/ng-table.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <style>
    .dropdown-menu a {
        margin-left: 15px;
        color: black;
        cursor: pointer;
        font-weight: 700;
    }

/** Editable table
------------------------- */

.editable-table > tbody > tr > td {
  padding: 4px
}
.editable-text {
  padding-left: 4px;
  padding-top: 4px;
  padding-bottom: 4px;
  display: inline-block;
}
.editable-table tbody > tr > td > .controls {
  //width: 100%
}
.editable-input {
  padding-left: 3px;
}
.editable-input.input-sm {
  height: 30px;
  font-size: 14px;
  padding-top: 4px;
  padding-bottom: 4px;
}
    </style>
        
    
</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Nam The</a>
                <a class="navbar-brand hidden" href="./">N</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{URL::to('admin/index')}}"> <i class="menu-icon fa fa-dashboard"></i>Trang chủ </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Thông số</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{URL::to('admin/information/colors')}}">Màu sắc</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{URL::to('admin/information/displays')}}">Màn hình</a></li>
                            <li><i class="fa fa-bars"></i><a href="{{URL::to('admin/information/storages')}}">Bộ nhớ</a></li>
                            <li><i class="fa fa-bars"></i><a href="{{URL::to('admin/information/operating_systems')}}">Hệ điều hành</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Quản lý hàng hóa</h3><!-- /.menu-title -->
                    <li>
                        <a href="{{URL::to('admin/brands')}}"> <i class="menu-icon ti-menu-alt"></i>Quản lý nhãn hiệu </a>
                    </li>
                     <li>
                        <a href="{{URL::to('admin/products')}}"> <i class="menu-icon ti-list"></i>Quản lý sản phẩm </a>
                    </li>

                    <h3 class="menu-title">Quản lý giao dịch</h3><!-- /.menu-title -->

                    <li>
                        <a href="{{URL::to('admin/orders')}}"> <i class="menu-icon ti-envelope"></i>Đơn đặt hàng </a>
                    </li>
                     <li>
                        <a href="{{URL::to('admin/orderdetails')}}"> <i class="menu-icon ti-shopping-cart"></i>Quản lý đơn đặt hàng chi tiết </a>
                    </li>

                    <h3 class="menu-title">Quản lý người dùng</h3><!-- /.menu-title -->
                     <li>
                        <a href="{{URL::to('admin/users')}}"> <i class="menu-icon ti-envelope"></i>Người dùng </a>
                    </li>
                     <li>
                        <a href="{{URL::to('admin/comments')}}"> <i class="menu-icon ti-envelope"></i>Bình luận </a>
                    </li>

                     <h3 class="menu-title">Quản lý website</h3><!-- /.menu-title -->
                     <li>
                        <a href="{{URL::to('admin/slides')}}"> <i class="menu-icon ti-layout"></i>Quản lý slide </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nam The
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Trang cá nhân</a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Cài đặt</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Đăng xuất</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>@yield('title_content')</h1>
                    </div>
                </div>
            </div>
        </div>
        
       

        <div class="content mt-3">
                 @yield('content')
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

<!-- 
    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script> -->
    <!-- <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script> -->
    <!-- <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script> -->
    <!-- <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script> -->
   <!--  <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script> -->
    
    <!-- <script src="js/dropzone.js"></script>
    <script src="js/dropzone-config.js"></script> -->
    
    <script src="js/angular.js"></script> 
    <script src="js/ng-table.min.js"></script>
    <script src="js/angular-animate.min.js"></script>
    <script src="js/angular-aria.min.js"></script>
    <script src="js/angular-messages.min.js"></script>
    <script src="js/angular-route.min.js"></script>
    <script src="js/angularjs-dropdown-multiselect.js"></script>
    @yield('script')
    


</body>
</html>
