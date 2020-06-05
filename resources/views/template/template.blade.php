<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin RTL Theme #1 for blank page layout" name="description" />
        <meta content="" name="author" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        @yield('css')
        <link href="{{ URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/global/css/components-rtl.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ URL::asset('assets/global/css/plugins-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/layouts/layout/css/layout-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/layouts/layout/css/themes/darkblue-rtl.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <!--Start New links-->
        <link href="{{ asset('assets/global/plugins/animate/animate.css') }}" rel="stylesheet">
        <!--
        <link href="{{ asset('css/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/css/app.css') }}" rel="stylesheet">
        -->
        <!--End New Links-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link rel="shortcut icon" href="favicon.ico" /> </head>
        <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-container-bg-solid" style="font-family: tahoma, Helvetica, sans-serif !important;">
        <div class="page-wrapper">
            <div class="page-header navbar navbar-fixed-top">
                <div class="page-header-inner ">
                    <div class="page-logo">
                        <a href="index.html">
                            {{ Html::image('assets/layouts/layout/img/logo.png', 'medical', array('class'=>'logo-default' )) }}
                        </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    {{ Html::image('assets/layouts/layout/img/avatar3_small.jpg', 'profile', array('class'=>'img-circle' )) }}
                                    <span class="username username-hide-on-mobile"> Ahmed </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                   
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                          <span style="color: #000">تسجيل الخروج</span> 
                                        </a>
                                        <form id="logout-form" action="{{url('admin/logout')}}" method="POST" style="display: none;">
                                         {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="page-container">
                <div class="page-sidebar-wrapper">
                    <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            
                            <li class='nav-item'>
                                <a href="{{ URL('admin/main') }}" class="nav-link nav-toggle">
                                    <i class="icon-user-md icon-2x"></i>
                                    <span class="title">الرئيسيه</span>
                                </a>
                            </li>

                            

                            <li class='nav-item   {{ Request::segment(2) === "basic_specialties" ? "active" : "" }}'>
                                <a href="{{ URL('admin/basic_specialties') }}" class="nav-link nav-toggle">
                                    <i class="icon-user-md icon-2x"></i>
                                    <span class="title">التخصصات الرئيسيه</span>
                                </a>
                            </li>
                            <li class='nav-item   {{ Request::segment(2) === "abouts" ? "active" : "" }}'>
                                <a href="{{ URL('admin/abouts') }}" class="nav-link nav-toggle">
                                    <i class="icon-user-md icon-2x"></i>
                                    <span class="title"> صفحات المقدمه  </span>
                                </a>
                            </li>

                            <li class='nav-item   {{ Request::segment(2) === "hospitals" ? "active" : "" }}'>
                                <a href="{{ URL('admin/hospitals') }}" class="nav-link nav-toggle">
                                    <i class="icon-user-md icon-2x"></i>
                                    <span class="title"> المستشفيات </span>
                                </a>
                            </li>

                             <li class='nav-item   {{ Request::segment(2) === "doctors-centers" ? "active" : "" }}'>
                                <a href="{{ URL('admin/doctors-centers') }}" class="nav-link nav-toggle">
                                    <i class="icon-user-md icon-2x"></i>
                                    <span class="title"> الاطباء والمراكز الطبيه </span>
                                </a>
                            </li>
                            
                            
                            
                             
                        </ul>
                    </div>
                </div>
                <div class="page-content-wrapper">
                    <div class="page-content">
                      @yield('content')
                    </div>
                </div>
            </div>
            <div class="page-footer">
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <!-- JQUERY Libery Link
        <script src="{{ URL::asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        -->
        <script src="{{ URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
        @yield('js')
    </body>

</html>