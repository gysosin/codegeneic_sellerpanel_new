@extends('layouts.master')
@section('title', 'dashboard')
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
            <div class="action-btns d-none">
                <div class="btn-dropdown mr-1 mb-1">
                    <div class="btn-group dropdown actions-dropodown">
                        <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Archive</a>
                            <a class="dropdown-item" href="#">Print</a>
                            <a class="dropdown-item" href="#">Another Action</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DataTable starts -->
            <div class="table-responsive">
                <table class="table data-list-view">
                    <thead>
                        <tr>
                            <th>S.NO.</th>
                            <th>Order ID</th>
                            <th>Customer name</th>
                            <th>Phone No.</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>od12546</td>
                            <td class="product-name">Avinash</td>
                            <td>9586521425</td>
                            <td><div class="chip chip-warning">
                                <div class="chip-body">
                                    <div class="chip-text">unpaid</div>
                                </div>
                            </div>
                            </td>
                            <td><div class="chip chip-warning">
                                <div class="chip-body">
                                    <div class="chip-text">on hold</div>
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle btn mr-1 mb-1 btn-primary btn-sm" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">View</a>
    <a class="dropdown-item" href="#">invoice</a>
  </div>
</div>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>od12546</td>
                            <td class="product-name">Avinash</td>
                            <td>9586521425</td>
                            <td><div class="chip chip-warning">
                                <div class="chip-body">
                                    <div class="chip-text">unpaid</div>
                                </div>
                            </div>
                            </td>
                            <td><div class="chip chip-warning">
                                <div class="chip-body">
                                    <div class="chip-text">on hold</div>
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle btn mr-1 mb-1 btn-primary btn-sm" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">View</a>
    <a class="dropdown-item" href="#">invoice</a>
  </div>
</div>
                            </td>
                        </tr>  <tr>
                            <td>1</td>
                            <td>od12546</td>
                            <td class="product-name">Avinash</td>
                            <td>9586521425</td>
                            <td><div class="chip chip-warning">
                                <div class="chip-body">
                                    <div class="chip-text">unpaid</div>
                                </div>
                            </div>
                            </td>
                            <td><div class="chip chip-warning">
                                <div class="chip-body">
                                    <div class="chip-text">on hold</div>
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle btn mr-1 mb-1 btn-primary btn-sm" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">View</a>
    <a class="dropdown-item" href="#">invoice</a>
  </div>
</div>
                            </td>
                        </tr>  <tr>
                            <td>1</td>
                            <td>od12546</td>
                            <td class="product-name">Avinash</td>
                            <td>9586521425</td>
                            <td><div class="chip chip-warning">
                                <div class="chip-body">
                                    <div class="chip-text">unpaid</div>
                                </div>
                            </div>
                            </td>
                            <td><div class="chip chip-warning">
                                <div class="chip-body">
                                    <div class="chip-text">on hold</div>
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle btn mr-1 mb-1 btn-primary btn-sm" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">View</a>
    <a class="dropdown-item" href="#">invoice</a>
  </div>
</div>
                            </td>
                        </tr>  <tr>
                            <td>1</td>
                            <td>od12546</td>
                            <td class="product-name">Avinash</td>
                            <td>9586521425</td>
                            <td><div class="chip chip-warning">
                                <div class="chip-body">
                                    <div class="chip-text">unpaid</div>
                                </div>
                            </div>
                            </td>
                            <td><div class="chip chip-warning">
                                <div class="chip-body">
                                    <div class="chip-text">on hold</div>
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle btn mr-1 mb-1 btn-primary btn-sm" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">View</a>
    <a class="dropdown-item" href="#">invoice</a>
  </div>
</div>
                            </td>
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