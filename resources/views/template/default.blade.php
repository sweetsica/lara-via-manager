@if(view()->hasSection('content.head'))
    @yield('content.head')
@else
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
            <title>Zoter - Responsive Bootstrap 4 Admin Dashboard</title>
            <meta content="Admin Dashboard" name="description" />
            <meta content="Mannatthemes" name="author" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

            <!-- jvectormap -->
            <link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
            <link href="{{asset('assets/plugins/fullcalendar/vanillaCalendar.css')}}" rel="stylesheet" type="text/css"  />

            <link href="{{asset('assets/plugins/morris/morris.css')}}" rel="stylesheet">

            <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
            <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
            <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
        </head>
@endif
    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            @if(view()->hasSection('content.sidebar'))
                @yield('content.sidebar')
            @else
                <div class="left side-menu">
                    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                        <i class="ion-close"></i>
                    </button>

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <div class="text-center">
                            <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
                            <a href="index.html" class="logo">
                                <img src="{{asset('assets/images/logo-lg.png')}}" alt="" class="logo-large">
                            </a>
                        </div>
                    </div>

                    <div class="sidebar-inner niceScrollleft">

                        <div id="sidebar-menu">
                            <ul>
                                <li class="menu-title">Main</li>

                                <li>
                                    <a href="index.html" class="waves-effect">
                                        <i class="mdi mdi-airplay"></i>
                                        <span> Dashboard <span class="badge badge-pill badge-primary float-right">7</span></span>
                                    </a>
                                </li>

                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Advanced UI </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="advanced-highlight.html">Highlight</a></li>
                                        <li><a href="advanced-rating.html">Rating</a></li>
                                        <li><a href="advanced-alertify.html">Alertify</a></li>
                                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-clock"></i><span> Calendar </span></a>
                                </li>

                                <li class="menu-title">Components</li>

                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullseye"></i> <span> UI Elements </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="ui-buttons.html">Buttons</a></li>
                                        <li><a href="ui-cards.html">Cards</a></li>
                                        <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                        <li><a href="ui-modals.html">Modals</a></li>
                                        <li><a href="ui-images.html">Images</a></li>
                                        <li><a href="ui-alerts.html">Alerts</a></li>
                                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                        <li><a href="ui-lightbox.html">Lightbox</a></li>
                                        <li><a href="ui-navs.html">Navs</a></li>
                                        <li><a href="ui-pagination.html">Pagination</a></li>
                                        <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                        <li><a href="ui-badge.html">Badge</a></li>
                                        <li><a href="ui-carousel.html">Carousel</a></li>
                                        <li><a href="ui-video.html">Video</a></li>
                                        <li><a href="ui-typography.html">Typography</a></li>
                                        <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                        <li><a href="ui-grid.html">Grid</a></li>
                                    </ul>
                                </li>

                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Forms </span> <span class="badge badge-pill badge-info float-right">8</span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-advanced.html">Form Advanced</a></li>
                                        <li><a href="form-editors.html">Form Editors</a></li>
                                        <li><a href="form-uploads.html">Form File Upload</a></li>
                                        <li><a href="form-mask.html">Form Mask</a></li>
                                        <li><a href="form-summernote.html">Summernote</a></li>
                                        <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                    </ul>
                                </li>

                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gauge"></i><span> Charts </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="charts-morris.html">Morris Chart</a></li>
                                        <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                        <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                        <li><a href="charts-flot.html">Flot Chart</a></li>
                                        <li><a href="charts-c3.html">C3 Chart</a></li>
                                        <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                                    </ul>
                                </li>

                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cards-outline"></i> <span> Icons </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="icons-material.html">Material Design</a></li>
                                        <li><a href="icons-ion.html">Ion Icons</a></li>
                                        <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                        <li><a href="icons-themify.html">Themify Icons</a></li>
                                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                                        <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                    </ul>
                                </li>

                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-table"></i><span> Tables </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="tables-basic.html">Basic Tables</a></li>
                                        <li><a href="tables-datatable.html">Data Table</a></li>
                                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                                        <li><a href="tables-editable.html">Editable Table</a></li>
                                    </ul>
                                </li>

                                <li class="menu-title">Extra</li>

                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-map-marker-multiple"></i><span> Maps </span> <span class="badge badge-pill badge-danger float-right">2</span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="maps-google.html"> Google Map</a></li>
                                        <li><a href="maps-vector.html"> Vector Map</a></li>
                                    </ul>
                                </li>

                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="pages-login.html">Login</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                        <li><a href="pages-blank.html">Blank Page</a></li>
                                        <li><a href="pages-404.html">Error 404</a></li>
                                        <li><a href="pages-500.html">Error 500</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div> <!-- end sidebarinner -->
                </div>
            @endif
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->
            @if(view()->hasSection('content'))
                @yield('content')
            @else
                <div class="accountbg"></div>
                <div class="content-page">
                    <div class="wrapper-page">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <a href="index.html" class="logo logo-admin"><img src="assets/images/e-logo.png" height="20" alt="logo"></a>
                                </div>
                                <div class="px-3 pb-3">
                                    <form class="form-horizontal m-t-20" action="index.html">

                                        <div class="user-thumb text-center m-b-30">
                                            <img src="assets/images/users/avatar-1.jpg" class="rounded-circle img-thumbnail" alt="thumbnail">
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="password" required="" placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>

                                        <div class="form-group m-t-10 mb-0 row">
                                            <div class="col-12 m-t-20 text-center">
                                                <a href="pages-login.html" class="text-muted">Not you?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if(view()->hasSection('content.footer'))
                @yield('content.footer')
            @else
                <footer class="footer">
                    © 2024 Lara Via Manager by Sweetsica.
                </footer>
        </div>
        <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        @if(view()->hasSection('content.script'))
            @yield('content.script')
        @else

        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('assets/js/detect.js')}}"></script>
        <script src="{{asset('assets/js/fastclick.js')}}"></script>
        <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>

        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

        <script src="{{asset('assets/plugins/skycons/skycons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/fullcalendar/vanillaCalendar.js')}}"></script>

        <script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>
        <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>

        <script src="{{asset('assets/pages/dashborad.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        @endif
        </body>
        </html>

    @endif)
