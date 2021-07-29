@extends('layouts.master')
@section('title', 'dashboard')
<style>
        .switch {
            position: relative;
            display: inline-block;
            width: 48px;
            height: 23px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 15px;
            width: 15px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #377dff;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #377dff;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

    </style>
@section('body')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">List View</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Data List</a>
                            </li>
                            <li class="breadcrumb-item active">List View
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
        <section id="data-list-view" class="data-list-view-header">
           
<div class="d-md-flex_ align-items-center justify-content-between mb-2">
<div class="row">
<div class="col-md-8">
<h3 class="h3 mb-0 text-gray-800">Product List</h3>
</div>
<div class="col-md-4">
<a href='/dashboard-addproduct' class="btn btn-primary  float-right">
<i class="tio-add-circle"></i>
<span class="text">Add new product</span>
</a>
</div>
</div>
</div>
            <!-- DataTable starts -->
            <div class="table-responsive">
                <table class="table data-list-view">
                    <thead>
                        <tr>
                            <th>Product id</th>
                            <th>NAME</th>
                          <th>Action</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="product-name">Apple Watch series 4 GPS</td>
                          
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href='/dashboard-editproduct'>
                                    <i class="tio-edit"></i>Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="javascript:" onclick="form_alert('product-13','Want to delete this item ?')">
                                    <i class="tio-add-to-trash"></i> Delete
                                </a>
                                <form action="" method="post" id="product-13">
                                    <input type="hidden" name="_token" value=""> <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>

                            <td class="product-price">$69.99</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" class="status" id="13" checked>
                                    <span class="slider round"></span>
                                </label>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="product-name">Apple Watch series 4 GPS</td>
                          
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href='/dashboard-editproduct'>
                                    <i class="tio-edit"></i>Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="javascript:" onclick="form_alert('product-13','Want to delete this item ?')">
                                    <i class="tio-add-to-trash"></i> Delete
                                </a>
                                <form action="" method="post" id="product-13">
                                    <input type="hidden" name="_token" value=""> <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>

                            <td class="product-price">$69.99</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" class="status" id="13" checked>
                                    <span class="slider round"></span>
                                </label>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="product-name">Apple Watch series 4 GPS</td>
                          
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href='/dashboard-editproduct'>
                                    <i class="tio-edit"></i>Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="javascript:" onclick="form_alert('product-13','Want to delete this item ?')">
                                    <i class="tio-add-to-trash"></i> Delete
                                </a>
                                <form action="" method="post" id="product-13">
                                    <input type="hidden" name="_token" value=""> <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>

                            <td class="product-price">$69.99</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" class="status" id="13" checked>
                                    <span class="slider round"></span>
                                </label>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="product-name">Apple Watch series 4 GPS</td>
                          
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href='/dashboard-editproduct'>
                                    <i class="tio-edit"></i>Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="javascript:" onclick="form_alert('product-13','Want to delete this item ?')">
                                    <i class="tio-add-to-trash"></i> Delete
                                </a>
                                <form action="" method="post" id="product-13">
                                    <input type="hidden" name="_token" value=""> <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>

                            <td class="product-price">$69.99</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" class="status" id="13" checked>
                                    <span class="slider round"></span>
                                </label>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="product-name">Apple Watch series 4 GPS</td>
                          
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href='/dashboard-editproduct'>
                                    <i class="tio-edit"></i>Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="javascript:" onclick="form_alert('product-13','Want to delete this item ?')">
                                    <i class="tio-add-to-trash"></i> Delete
                                </a>
                                <form action="" method="post" id="product-13">
                                    <input type="hidden" name="_token" value=""> <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>

                            <td class="product-price">$69.99</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" class="status" id="13" checked>
                                    <span class="slider round"></span>
                                </label>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="product-name">Apple Watch series 4 GPS</td>
                          
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href='/dashboard-editproduct'>
                                    <i class="tio-edit"></i>Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="javascript:" onclick="form_alert('product-13','Want to delete this item ?')">
                                    <i class="tio-add-to-trash"></i> Delete
                                </a>
                                <form action="" method="post" id="product-13">
                                    <input type="hidden" name="_token" value=""> <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>

                            <td class="product-price">$69.99</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" class="status" id="13" checked>
                                    <span class="slider round"></span>
                                </label>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="product-name">Apple Watch series 4 GPS</td>
                          
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href='/dashboard-editproduct'>
                                    <i class="tio-edit"></i>Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="javascript:" onclick="form_alert('product-13','Want to delete this item ?')">
                                    <i class="tio-add-to-trash"></i> Delete
                                </a>
                                <form action="" method="post" id="product-13">
                                    <input type="hidden" name="_token" value=""> <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>

                            <td class="product-price">$69.99</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" class="status" id="13" checked>
                                    <span class="slider round"></span>
                                </label>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="product-name">Apple Watch series 4 GPS</td>
                          
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href='/dashboard-editproduct'>
                                    <i class="tio-edit"></i>Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="javascript:" onclick="form_alert('product-13','Want to delete this item ?')">
                                    <i class="tio-add-to-trash"></i> Delete
                                </a>
                                <form action="" method="post" id="product-13">
                                    <input type="hidden" name="_token" value=""> <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>

                            <td class="product-price">$69.99</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" class="status" id="13" checked>
                                    <span class="slider round"></span>
                                </label>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="product-name">Apple Watch series 4 GPS</td>
                          
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href='/dashboard-editproduct'>
                                    <i class="tio-edit"></i>Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="javascript:" onclick="form_alert('product-13','Want to delete this item ?')">
                                    <i class="tio-add-to-trash"></i> Delete
                                </a>
                                <form action="" method="post" id="product-13">
                                    <input type="hidden" name="_token" value=""> <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>

                            <td class="product-price">$69.99</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" class="status" id="13" checked>
                                    <span class="slider round"></span>
                                </label>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="product-name">Apple Watch series 4 GPS</td>
                          
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href='/dashboard-editproduct'>
                                    <i class="tio-edit"></i>Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="javascript:" onclick="form_alert('product-13','Want to delete this item ?')">
                                    <i class="tio-add-to-trash"></i> Delete
                                </a>
                                <form action="" method="post" id="product-13">
                                    <input type="hidden" name="_token" value=""> <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>

                            <td class="product-price">$69.99</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" class="status" id="13" checked>
                                    <span class="slider round"></span>
                                </label>
                        </tr>
                        
                        
                        

                    </tbody>
                </table>
            </div>
            <!-- DataTable ends -->

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
                                    <label for="data-status">Order Status</label>
                                    <select class="form-control" id="data-status">
                                        <option>Pending</option>
                                        <option>Canceled</option>
                                        <option>Delivered</option>
                                        <option>On Hold</option>
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
@endsection()