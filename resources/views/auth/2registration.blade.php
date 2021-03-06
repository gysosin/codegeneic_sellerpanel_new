@extends('layouts.auth')
@section('title', 'dashboard')
@section('body')

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="../../../app-assets/images/pages/register.jpg" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Registration</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Fill the below form to create a new account.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form action="index.html">
                                                    <div class="form-label-group">
                                                        <input type="text" id="" class="form-control" placeholder="AAdhar Number" required>
                                                        <label for="">AAdhar Number</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="" class="form-control" placeholder="State" required>
                                                        <label for="">state</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="" class="form-control" placeholder="Country" required>
                                                        <label for="">Country</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="" class="form-control" placeholder="Pincode" required>
                                                        <label for="">pincode</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <textarea class="form-control" aria-label="With textarea" placeholder="Full Address"></textarea>
                                                        <label for="">Full Address</label>
                                                    </div>
                                            </div>
                                        </div>
                                        <button type='' class="btn btn-primary float-right btn-inline mb-50"><a href='/3register' style="color: white;">submit and forward to upload documents</a></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </section>

    </div>
    </div>
    </div>
    <!-- END: Content-->

    @endsection()