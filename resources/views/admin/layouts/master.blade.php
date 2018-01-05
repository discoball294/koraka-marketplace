<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    @yield('title')

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Preview page of Metronic Admin Theme #2 for blank page layout" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset("admin-assets/plugins/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset("admin-assets/plugins/simple-line-icons/simple-line-icons.min.css") }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset("admin-assets/plugins/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("admin-assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css") }}" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset("admin-assets/global/components-md.min.css") }}" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="{{ asset("admin-assets/global/plugins-md.min.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin-assets/plugins/bootstrap-sweetalert/sweetalert.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('admin-assets/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('admin-assets/layouts/layout2/css/layout.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin-assets/layouts/layout2/css/themes/blue.min.css') }}" rel="stylesheet" type="text/css"
          id="style_color"/>
    <link href="{{ asset('admin-assets/layouts/layout2/css/custom.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END THEME LAYOUT STYLES -->
    @yield('plugins_css')
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
<!-- BEGIN HEADER -->
@include('admin.layouts.includes.header')
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
@include('admin.layouts.includes.sidebar')
<!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
    @yield('content')

    <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2017 &copy; Koraka
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="{{ asset('admin-assets/plugins/respond.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/excanvas.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/ie8.fix.min.js') }}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('admin-assets/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets//plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('admin-assets/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="{{ asset('admin-assets/plugins/bootstrap-sweetalert/sweetalert.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets/plugins/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}"
        type="text/javascript"></script>
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('admin-assets/scripts/app.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('admin-assets/layouts/layout2/scripts/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets/layouts/layout2/scripts/demo.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
@yield('plugins_js')
</body>

</html>