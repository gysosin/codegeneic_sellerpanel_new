
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Thumb View - Vuesax - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{asset('/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
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
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/file-uploaders/dropzone.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/data-list-view.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
@include('dashboard.submenus.mainsidebar')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">All Products</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Product list</a>
                            </li>
                            <li class="breadcrumb-item active">Add Delete data
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
                <div class="dropdown">
                    <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Data list view starts -->
        <section id="data-thumb-view" class="data-thumb-view-header">
            <div class="action-btns d-none">
                <div class="btn-dropdown mr-1 mb-1">
                    <div class="btn-group dropdown actions-dropodown">
                        <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Archive</a>
                            <a class="dropdown-item" href="#">Print</a>
                            <a class="dropdown-item" href="#">Another Action</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- dataTable starts -->
            <div class="table-responsive">
                <table class="table data-thumb-view">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Image</th>
                            <th>NAME</th>
                            <th>CATEGORY</th>
                            <th>PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Apple Watch series 4 GPS</td>
                            <td class="product-category">Computers</td>
                            <td class="product-price">$69.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/magic-mouse.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Beats HeadPhones</td>
                            <td class="product-category">Computers</td>
                            
                            <td class="product-price">$69.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/iphone-x.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Altec Lansing - Bluetooth Speaker</td>
                            <td class="product-category">Audio</td>
                           
                            </td>
                            <td class="product-price">$199.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/ipad-pro.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Aluratek - Bluetooth Audio Receiver</td>
                            <td class="product-category">Computers</td>
                            
                            <td class="product-price">$29.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/jbl-speaker.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Aluratek - Bluetooth Audio Transmitter</td>
                            <td class="product-category">Audio</td>
                          
                            <td class="product-price">$199.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/beats-headphones.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Basis - Peak Fitness and Sleep Tracker</td>
                            <td class="product-category">Fitness</td>
                            
                            <td class="product-price">$199.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/homepod.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Antec - Nano Diamond Thermal Compound</td>
                            <td class="product-category">Fitness</td>
                            
                            <td class="product-price">$29.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/macbook-pro.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Antec - SmartBean Bluetooth Adapter</td>
                            <td class="product-category">Computer</td>
                            
                            <td class="product-price">$39.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/beats-headphones.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Beats by Dr. Dre - 3' USB-to-Micro USB Cable</td>
                            <td class="product-category">Computer</td>
                            
                            <td class="product-price">$199.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/jbl-speaker.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Beats by Dr. Dre - Bike Mount for Pill Speakers</td>
                            <td class="product-category">Audio</td>
                            <td>
                                <div class="progress progress-bar-warning">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:40%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">delivered</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$49.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Bose® - SoundLink® Color Bluetooth Speaker</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:90%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-primary">
                                    <div class="chip-body">
                                        <div class="chip-text">pending</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$129.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/macbook-pro.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">BRAVEN - Portable Bluetooth Speaker</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">on hold</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$199.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/homepod.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Craig - Portable Wireless Speaker</td>
                            <td class="product-category">Computers</td>
                            <td>
                                <div class="progress progress-bar-danger">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:20%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-danger">
                                    <div class="chip-body">
                                        <div class="chip-text">canceled</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$199.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Definitive Technology - Wireless Speaker</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:75%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-primary">
                                    <div class="chip-body">
                                        <div class="chip-text">pending</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$399.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/beats-headphones.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Fitbit - Charge HR Activity Tracker + Heart Rate (Large)</td>
                            <td class="product-category">Audio</td>
                            <td>
                                <div class="progress progress-bar-warning">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:60%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-primary">
                                    <div class="chip-body">
                                        <div class="chip-text">pending</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$149.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/magic-mouse.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Fitbit - Flex 1" USB Charging Cable</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">on hold</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$14.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/iphone-x.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Fitbit - Activity Tracker</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-danger">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:35%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-danger">
                                    <div class="chip-body">
                                        <div class="chip-text">canceled</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$99.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/ipad-pro.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Fitbit - Charge Wireless Activity Tracker (Large)</td>
                            <td class="product-category">Computers</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-primary">
                                    <div class="chip-body">
                                        <div class="chip-text">pending</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$129.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Craig - Tower Speaker</td>
                            <td class="product-category">Audio</td>
                            <td>
                                <div class="progress progress-bar-warning">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:68%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">on hold</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$69.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/jbl-speaker.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">BRAVEN - Outdoor Speaker</td>
                            <td class="product-category">Computers</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:97%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-success">
                                    <div class="chip-body">
                                        <div class="chip-text">delivered</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$199.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/homepod.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Bose® - Bluetooth Speaker Travel Bag</td>
                            <td class="product-category">Computers</td>
                            <td>
                                <div class="progress progress-bar-primary">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:89%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-warning">
                                    <div class="chip-body">
                                        <div class="chip-text">on hold</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$44.99</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/beats-headphones.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name">Altec Lansing - Mini H2O Bluetooth Speaker</td>
                            <td class="product-category">Fitness</td>
                            <td>
                                <div class="progress progress-bar-success">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:87%"></div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-success">
                                    <div class="chip-body">
                                        <div class="chip-text">delivered</div>
                                    </div>
                                </div>
                            </td>
                            <td class="product-price">$199.99</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- dataTable ends -->

            <!-- add new sidebar starts -->
            <div class="add-new-data-sidebar">
                <div class="overlay-bg"></div>
                <div class="add-new-data">
                    <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                        <div>
                            <h4>ADD NEW DATA</h4>
                        </div>
                        <div class="hide-data-sidebar">
                            <i class="feather icon-x"></i>
                        </div>
                    </div>
                    <div class="data-items pb-3">
                        <div class="data-fields px-2 mt-3">
                            <div class="row">
                                <div class="col-sm-12 data-field-col">
                                    <label for="data-name">Name</label>
                                    <input type="text" class="form-control" id="data-name">
                                </div>
                                <div class="col-sm-12 data-field-col">
                                    <label for="data-category"> Category </label>
                                    <select class="form-control" id="data-category">
                                        <option>Audio</option>
                                        <option>Computers</option>
                                        <option>Fitness</option>
                                        <option>Appliance</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 data-field-col">
                                    <label for="data-price">Price</label>
                                    <input type="number" class="form-control" id="data-price">
                                </div>
                                <div class="col-sm-12 data-field-col data-list-upload">
                                    <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                        <div class="dz-message">Upload Image</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                        <div class="add-data-btn">
                            <button class="btn btn-primary">Add Data</button>
                        </div>
                        <div class="cancel-data-btn">
                            <button class="btn btn-outline-danger">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add new sidebar ends -->
        </section>
        <!-- Data list view end -->

    </div>
</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
<p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
</p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/components.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('/app-assets/js/scripts/ui/data-list-view.js')}}"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>