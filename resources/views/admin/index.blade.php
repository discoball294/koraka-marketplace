@extends('admin.layouts.master')
@section('title')
    <title>Dashboard - Riverstone - Hotel & cottage - Admin Page</title>
@endsection
@section('content')
    <div class="page-content" style="min-height: 1434px;">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->
        <div class="theme-panel">
            <div class="toggler tooltips" data-container="body" data-placement="left" data-html="true"
                 data-original-title="Click to open advance theme customizer panel">
                <i class="icon-settings"></i>
            </div>
            <div class="toggler-close">
                <i class="icon-close"></i>
            </div>
            <div class="theme-options">
                <div class="theme-option theme-colors clearfix">
                    <span> THEME COLOR </span>
                    <ul>
                        <li class="color-default current tooltips" data-style="default" data-container="body"
                            data-original-title="Default"></li>
                        <li class="color-grey tooltips" data-style="grey" data-container="body"
                            data-original-title="Grey"></li>
                        <li class="color-blue tooltips" data-style="blue" data-container="body"
                            data-original-title="Blue"></li>
                        <li class="color-dark tooltips" data-style="dark" data-container="body"
                            data-original-title="Dark"></li>
                        <li class="color-light tooltips" data-style="light" data-container="body"
                            data-original-title="Light"></li>
                    </ul>
                </div>
                <div class="theme-option">
                    <span> Layout </span>
                    <select class="layout-option form-control input-small">
                        <option value="fluid" selected="selected">Fluid</option>
                        <option value="boxed">Boxed</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Header </span>
                    <select class="page-header-option form-control input-small">
                        <option value="fixed" selected="selected">Fixed</option>
                        <option value="default">Default</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Top Dropdown</span>
                    <select class="page-header-top-dropdown-style-option form-control input-small">
                        <option value="light" selected="selected">Light</option>
                        <option value="dark">Dark</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Mode</span>
                    <select class="sidebar-option form-control input-small">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected="selected">Default</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Style</span>
                    <select class="sidebar-style-option form-control input-small">
                        <option value="default" selected="selected">Default</option>
                        <option value="compact">Compact</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Menu </span>
                    <select class="sidebar-menu-option form-control input-small">
                        <option value="accordion" selected="selected">Accordion</option>
                        <option value="hover">Hover</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Position </span>
                    <select class="sidebar-pos-option form-control input-small">
                        <option value="left" selected="selected">Left</option>
                        <option value="right">Right</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Footer </span>
                    <select class="page-footer-option form-control input-small">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected="selected">Default</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- END THEME PANEL -->
        <h1 class="page-title"> Blank Page Layout
            <small>blank page layout</small>
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Blank Page</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Page Layouts</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown"
                            data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <a href="#">
                                <i class="icon-bell"></i> Action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-shield"></i> Another action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-user"></i> Something else here</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <i class="icon-bag"></i> Separated link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <div class="note note-info">
            <p> A black page template with a minimal dependency assets to use as a base for any custom page you
                create </p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-green-sharp">
                                <span data-counter="counterup" data-value="7800">7800</span>
                                <small class="font-green-sharp">$</small>
                            </h3>
                            <small>Lifetime Order Value</small>
                        </div>
                        <div class="icon">
                            <i class="icon-pie-chart"></i>
                        </div>
                    </div>
                    <div class="progress-info">
                        <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> progress</div>
                            <div class="status-number"> 76%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-red-haze">
                                <span data-counter="counterup" data-value="1349">1349</span>
                            </h3>
                            <small>NEW FEEDBACKS</small>
                        </div>
                        <div class="icon">
                            <i class="icon-like"></i>
                        </div>
                    </div>
                    <div class="progress-info">
                        <div class="progress">
                                        <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">85% change</span>
                                        </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> change</div>
                            <div class="status-number"> 85%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-blue-sharp">
                                <span data-counter="counterup" data-value="567">567</span>
                            </h3>
                            <small>TOTAL ORDERS</small>
                        </div>
                        <div class="icon">
                            <i class="icon-basket"></i>
                        </div>
                    </div>
                    <div class="progress-info">
                        <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> grow</div>
                            <div class="status-number"> 45%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-purple-soft">
                                <span data-counter="counterup" data-value="276">276</span>
                            </h3>
                            <small>REGISTERED USERS</small>
                        </div>
                        <div class="icon">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                    <div class="progress-info">
                        <div class="progress">
                                        <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% change</span>
                                        </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> change</div>
                            <div class="status-number"> 57%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('plugins_js')
    <script src="{{ asset('admin-assets/plugins/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-assets/plugins/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-assets/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-assets/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-assets/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
    <script>

    </script>
@endsection