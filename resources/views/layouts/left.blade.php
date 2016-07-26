<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="index_alt.html#" type="image/png">

  <title>AdminX</title>

  <!--icheck-->
  <link href="{{ asset('/assets/admin/js/iCheck/skins/minimal/minimal.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/admin/js/iCheck/skins/square/square.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/admin/js/iCheck/skins/square/red.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/admin/js/iCheck/skins/square/blue.css') }}" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="{{ asset('/assets/admin/css/clndr.css') }}" rel="stylesheet">

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/admin/js/morris-chart/morris.css') }}">

  <!--common-->
  <link href="{{ asset('/assets/admin/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/admin/css/style-responsive.css') }}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="{{ asset('/assets/admin/images/logo.png') }}" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="{{ asset('/assets/admin/images/logo_icon.png') }}" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="{{ asset('/assets/admin/images/photos/user-avatar.png') }}" class="media-object">
                    <div class="media-body">
                        <h4><a href="index_alt.html#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="index_alt.html#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="index_alt.html#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                  <li><a href="index_alt.html#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list nav-active"><a href="#"><i class="fa fa-home"></i> <span>后台管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{ url('admin') }}">首页</a></li>
                    </ul>
                </li>
                @foreach($menus as $menu)
                @can('test')
                <li class="menu-list"><a href="#"><i class="fa"></i> <span>{{ $menu['label'] }}</span></a>
                    <ul class="sub-menu-list">
                        @foreach($menu['children_pid'] as $m)
                        <li><a href="index_alt.html">{{ $m['label'] }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endcan
                @endforeach

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->


<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ asset('/assets/admin/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('/assets/admin/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('/assets/admin/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('/assets/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/admin/js/modernizr.min.js') }}"></script>
<script src="{{ asset('/assets/admin/js/jquery.nicescroll.js') }}"></script>

<!--easy pie chart-->
<script src="{{ asset('/assets/admin/js/easypiechart/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('/assets/admin/js/easypiechart/easypiechart-init.js') }}"></script>

<!--Sparkline Chart-->
<script src="{{ asset('/assets/admin/js/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('/assets/admin/js/sparkline/sparkline-init.js') }}"></script>

<!--icheck -->
<script src="{{ asset('/assets/admin/js/iCheck/jquery.icheck.js') }}"></script>
<script src="{{ asset('/assets/admin/js/iCheck/jquery.icheck.js') }}"></script>

<!-- jQuery Flot Chart-->
<script src="{{ asset('/assets/admin/js/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('/assets/admin/js/flot-chart/jquery.flot.tooltip.js') }}"></script>
<script src="{{ asset('/assets/admin/js/flot-chart/jquery.flot.resize.js') }}"></script>


<!--Morris Chart-->
<script src="{{ asset('/assets/admin/js/morris-chart/morris.js') }}"></script>
<script src="{{ asset('/assets/admin/js/morris-chart/raphael-min.js') }}"></script>

<!--Calendar-->
<script src="{{ asset('/assets/admin/js/calendar/clndr.js') }}"></script>
<script src="{{ asset('/assets/admin/js/calendar/evnt.calendar.init.js') }}"></script>
<script src="{{ asset('/assets/admin/js/calendar/moment-2.2.1.js') }}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--common scripts for all pages-->
<script src="{{ asset('/assets/admin/js/scripts.js') }}"></script>

<!--Dashboard Charts-->
<script src="{{ asset('/assets/admin/js/dashboard-chart-init.js') }}"></script>

