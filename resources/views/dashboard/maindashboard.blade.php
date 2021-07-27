

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/charts/apexcharts.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
@include('dashboard.submenus.mainsidebar')

<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Dashboard Ecommerce Starts -->
        <section id="dashboard-ecommerce">
            <div class="row">
               
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-success p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-credit-card text-success font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1">97.5k</h2>
                            <p class="mb-0">Revenue Generated</p>
                        </div>
                        <div class="card-content">
                            <div id="line-area-chart-2"></div>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-warning p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-package text-warning font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1">97.5K</h2>
                            <p class="mb-0">Orders Received</p>
                        </div>
                        <div class="card-content">
                            <div id="line-area-chart-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-end">
                            <h4 class="card-title">Revenue</h4>
                            <p class="font-medium-5 mb-0"><i class="feather icon-settings text-muted cursor-pointer"></i></p>
                        </div>
                        <div class="card-content">
                            <div class="card-body pb-0">
                                <div class="d-flex justify-content-start">
                                    <div class="mr-2">
                                        <p class="mb-50 text-bold-600">This Month</p>
                                        <h2 class="text-bold-400">
                                            <sup class="font-medium-1">$</sup>
                                            <span class="text-success">86,589</span>
                                        </h2>
                                    </div>
                                    <div>
                                        <p class="mb-50 text-bold-600">Last Month</p>
                                        <h2 class="text-bold-400">
                                            <sup class="font-medium-1">$</sup>
                                            <span>73,683</span>
                                        </h2>
                                    </div>

                                </div>
                                <div id="revenue-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row pb-50">
                                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2">
                                                <div>
                                                    <h2 class="text-bold-700 mb-25">2.7K</h2>
                                                    <p class="text-bold-500 mb-75">Avg Sessions</p>
                                                    <h5 class="font-medium-2">
                                                        <span class="text-success">+5.2% </span>
                                                        <span>vs last 7 days</span>
                                                    </h5>
                                                </div>
                                                <a href="#" class="btn btn-primary shadow">View Details <i class="feather icon-chevrons-right"></i></a>
                                            </div>
                                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                                                <div class="dropdown chart-dropdown">
                                                    <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button" id="dropdownItem5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Last 7 Days
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                                        <a class="dropdown-item" href="#">Last 28 Days</a>
                                                        <a class="dropdown-item" href="#">Last Month</a>
                                                        <a class="dropdown-item" href="#">Last Year</a>
                                                    </div>
                                                </div>
                                                <div id="avg-session-chart"></div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row avg-sessions pt-50">
                                            <div class="col-6">
                                                <small>Goal: $100000</small>
                                                <div class="progress progress-bar-primary mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width:50%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <small>Users: 100K</small>
                                                <div class="progress progress-bar-warning mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <small>Retention: 90%</small>
                                                <div class="progress progress-bar-danger mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100" style="width:70%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <small>Duration: 1yr</small>
                                                <div class="progress progress-bar-success mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100" style="width:90%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
           
            </div>
                  <div class="row">
       
                  <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Orders Recieved weekly</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="line-area-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Orders recieved monthly</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="line-chart"></div>
                                    </div>
                                </div>
                            </div>
                        
            </div>
        </section>
        <!-- Dashboard Ecommerce ends -->

    </div>
</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT
            &copy; 2019<a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">Pixinvent,</a>All
            rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/components.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<!-- END: Page JS-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('/app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('/app-assets/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('/app-assets/js/scripts/charts/chart-apex.js')}}"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>