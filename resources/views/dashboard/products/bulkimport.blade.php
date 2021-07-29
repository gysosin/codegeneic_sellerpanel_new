@extends('layouts.master')
@section('title', 'dashboard')
@section('body')
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Dashboard Ecommerce Starts -->
        <h1 class="display-4">Instructions : </h1>
        <p> 1. Download the format file and fill it with proper data.</p>
        <p>2. You can download the example file to understand how the data must be filled.</p>
        <p>3. Once you have downloaded and filled the format file, upload it in the form below and
            submit.</p>
        <p> 4. After uploading products you need to edit them and set product's images and choices.</p>
        <p> 5. You can get brand and category id from their list, please input the right ids.</p>
    </div>
</div>
<div class="col-md-12">
    <form class="product-form" action="https://demo.6amtech.com/6valley/seller/product/bulk-import" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="z0A9b5ABacGZORl4n8Fa5qF1BRAzdsur2ERiYbZ4">
        <div class="card mt-2 rest-part">
            <div class="card-header">
                <h4>Import Products File</h4>
                <a href="https://demo.6amtech.com/6valley/public/assets/product_bulk_format.xlsx" download="" class="btn btn-secondary">Download Format</a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="name">Import</label>
                            <input type="file" name="products_file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-footer">
            <div class="row">
                <div class="col-md-12" style="padding-top: 20px">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>


<div class="footer">
    <div class="row justify-content-between align-items-center">
        <div class="col">
        </div>
        <div class="col-auto">
            <div class="d-flex justify-content-end">

                <ul class="list-inline list-separator">
                    <span>Copyright &copy; https://demo.6amtech.com/6valley 2021</span>
                </ul>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="https://demo.6amtech.com/6valley/seller/auth/logout">Logout</a>
            </div>
        </div>
    </div>
</div>
</main>


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