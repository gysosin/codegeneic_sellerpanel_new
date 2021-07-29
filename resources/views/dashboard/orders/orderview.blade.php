@extends('layouts.master')
@section('title', 'dashboard')
<script src="/cdn-cgi/apps/head/aCrVmvXdLd5mk0h4f_Wlo6smF1A.js"></script><link rel="shortcut icon" href="">

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://demo.6amtech.com/6valley/public/assets/back-end/vendor/icon-set/style.css">

<link rel="stylesheet" href="https://demo.6amtech.com/6valley/public/assets/back-end/css/theme.minc619.css?v=1.0">



@section('body')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                
                    <div class="breadcrumb-wrapper col-12">
                    <h1 class="page-header-title">Order #100016</h1>
    <span class="badge badge-soft-danger ml-sm-3">
        <span class="legend-indicator bg-danger"></span>Unpaid
    </span>
    <span class="badge badge-soft-info ml-2 ml-sm-3 text-capitalize" style="color:red;">
        <span class="legend-indicator bg-info text" style="color:red;"></span>pending
    </span>
    <span class="ml-2 ml-sm-3">
<i class="tio-date-range"></i> 08 Jul 2021 00:21:04
</span>
                    </div>
                </div>
            </div>
        </div>
   
    </div>
    <div class="content-body">
    <div class="col-md-12 mt-2 text-right">
    <a class="text-body mr-3" target="_blank" href=https://demo.6amtech.com/6valley/seller/orders/generate-invoice/100016>
        <i class="tio-print mr-1"></i> Print invoice
    </a>
</div>
<div class="row" id="printableArea">
    <div class="col-lg-8 mb-3  mb-lg-0">

        <div class="card mb-3  mb-lg-5">

            <div class="card-header" style="display: block!important;">
                <div class="row">
                    <div class="col-12 pb-2 border-bottom">
                        <h4 class="card-header-title">
                            Order details
                            <span class="badge badge-soft-dark rounded-circle ml-1">1</span>
                        </h4>
                    </div>
                    <div class="col-6 pt-2">
                        <h6 style="color: #8a8a8a;">
                        </h6>
                    </div>
                    <div class="col-6 pt-2">
                        <div class="text-right">
                            <h6 class="" style="color: #8a8a8a;">
                                Payment Method : not choosen yet
                            </h6>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-body">
                <div class="media">
                    <div class="avatar avatar-xl mr-3">
                        <p>Image</p>
                    </div>
                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-3 product-name">
                                <p> Name</p>
                            </div>
                            <div class="col col-md-1 align-self-center p-0 ">
                                <p> Price</p>
                            </div>
                            <div class="col col-md-1 align-self-center">
                                <p>Q</p>
                            </div>
                            <div class="col col-md-1 align-self-center  p-0 product-name">
                                <p> TAX</p>
                            </div>
                            <div class="col col-md-2 align-self-center  p-0 product-name">
                                <p> Discount</p>
                            </div>
                            <div class="col col-md-2 align-self-center  p-0">
                                <p> Status</p>
                            </div>
                            <div class="col col-md-2 align-self-center text-right  ">
                                <p> Subtotal</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media">
                    <div class="avatar avatar-xl mr-3">
                        <img class="img-fluid" onerror="this.src='https://demo.6amtech.com/6valley/public/assets/front-end/img/image-place-holder.png'" src="https://demo.6amtech.com/6valley/storage/app/public/product/thumbnail/2021-06-05-60bb200ef1223.png" alt="Image Description">
                    </div>
                    <div class="media-body">
                        <div class="row">
                            <div class="col-md-3 mb-3 mb-md-0 product-name">
                                <p>
                                    Kodak PIXP...
                                </p>
                                <strong><u>Variation : </u></strong>
                                <div class="font-size-sm text-body">
                                    <span class="font-weight-bold"></span>
                                </div>
                            </div>
                            <div class="col col-md-1 align-self-center p-0 ">
                                <h6>1000</h6>
                            </div>
                            <div class="col col-md-1 align-self-center">
                                <h5>1</h5>
                            </div>
                            <div class="col col-md-1 align-self-center  p-0 product-name">
                                <h5>20</h5>
                            </div>
                            <div class="col col-md-2 align-self-center  p-0 product-name">
                                <h5>
                                    - 100</h5>
                            </div>
                            <div class="col col-md-2 align-self-center  p-0">
                                <select name="delivery_status" class="product_status form-control small" style="padding: 0px;" data-id="18">
                                    <option value="pending" selected>Pending </option>
                                    <option value="processing"> Processing</option>
                                    <option value="delivered">Delivered </option>
                                    <option value="returned"> Returned</option>
                                    <option value="failed"> Failed</option>
                                </select>
                            </div>
                            <div class="col col-md-2 align-self-center text-right  ">
                                <h5>920 $</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row justify-content-md-end mb-3">
                    <div class="col-md-9 col-lg-8">
                        <dl class="row text-sm-right">
                            <dt class="col-sm-6">Shipping</dt>
                            <dd class="col-sm-6">
                                <strong>2 $</strong>
                            </dd>
                            <dt class="col-sm-6">Total</dt>
                            <dd class="col-sm-6">
                                <strong>922 $</strong>
                            </dd>
                        </dl>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="col-lg-4">

        <div class="card">

            <div class="card-header">
                <h4 class="card-header-title">Customer</h4>
            </div>


            <div class="card-body">
                <div class="media align-items-center" href="javascript:">
                    <div class="avatar avatar-circle mr-3">
                        <img class="avatar-img" onerror="this.src='https://demo.6amtech.com/6valley/public/assets/front-end/img/image-place-holder.png'" src="https://demo.6amtech.com/6valley/storage/app/public/profile/def.png" alt="Image Description">
                    </div>
                    <div class="media-body">
                        <span class="text-body text-hover-primary">Anees Kinikar</span>
                    </div>
                    <div class="media-body text-right">
                    </div>
                </div>
                <hr>
                <div class="media align-items-center" href="javascript:">
                    <div class="icon icon-soft-info icon-circle mr-3">
                        <i class="tio-shopping-basket-outlined"></i>
                    </div>
                    <div class="media-body">
                        <span class="text-body text-hover-primary"> 2 orders</span>
                    </div>
                    <div class="media-body text-right">
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Contact info</h5>
                </div>
                <ul class="list-unstyled list-unstyled-py-2">
                    <li>
                        <i class="tio-online mr-2"></i>
                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c1a0afa4a4b2efaaa8afa8aaa0b38186aca0a8adefa2aeac">[email&#160;protected]</a>
                    </li>
                    <li>
                        <i class="tio-android-phone-vs mr-2"></i>
                        9810678872
                    </li>
                </ul>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Shipping Address</h5>
                </div>
                <span class="d-block">
                    Name :
                    <strong></strong><br>
                    City:
                    <strong>belgaum</strong><br>
                    ZIP code :
                    <strong>590001</strong><br>
                    Phone:
                    <strong>0</strong>
                </span>
            </div>

        </div>

    </div>
</div>

    </div>
</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>



<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://demo.6amtech.com/6valley/public/assets/back-end/js/custom.js"></script>

<script>


        $(document).on('change', '.product_status', function () {
            var id = $(this).attr("data-id");
            var value = $(this).val();
            Swal.fire({
                title: 'Are you sure Change this?',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonColor: 'primary',
                cancelButtonColor: 'secondary',
                confirmButtonText: 'Yes, Change it!'
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "https://demo.6amtech.com/6valley/seller/orders/productStatus",
                        method: 'POST',
                        data: {
                            "id": id,
                            "delivery_status": value
                        },
                        success: function (data) {
                            if (data.success == 0) {
                                toastr.warning(data.message);
                            } else {
                                toastr.success('Product Status updated successfully');
                                location.reload();
                            }
                        }
                    });
                }
            })
        });
    </script>

<script type="text/javascript"></script>

<script>
    $(document).on('ready', function () {
        // ONLY DEV
        // =======================================================
        if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show')
                .on('shown.bs.popover', function () {
                    $('.popover').last().addClass('popover-dark')
                });

            $(document).on('click', '#closeBuilderPopover', function () {
                window.localStorage.setItem('hs-builder-popover', true);
                $('#builderPopover').popover('dispose');
            });
        } else {
            $('#builderPopover').on('show.bs.popover', function () {
                return false
            });
        }
        // END ONLY DEV
        // =======================================================

        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
            $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });

        // INITIALIZATION OF MEGA MENU
        // =======================================================
        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
                position: 'left'
            }
        }).init();


        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();


        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({boundary: 'window'})

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function (e) {
            if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
                return false;
            }
        });


        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
            var unfold = new HSUnfold($(this)).init();
        });


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
            new HSFormSearch($(this)).init()
        });


        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
            var select2 = $.HSCore.components.HSSelect2.init($(this));
        });


        // INITIALIZATION OF DATERANGEPICKER
        // =======================================================
        $('.js-daterangepicker').daterangepicker();

        $('.js-daterangepicker-times').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            }
        });

        var start = moment();
        var end = moment();

        function cb(start, end) {
            $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
        }

        $('#js-daterangepicker-predefined').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        $('.js-clipboard').each(function () {
            var clipboard = $.HSCore.components.HSClipboard.init(this);
        });
    });
</script>

<script>
    $("#search-bar-input").keyup(function () {
        $("#search-card").css("display", "block");
        let key = $("#search-bar-input").val();
        if (key.length > 0) {
            $.get({
                url: 'https://demo.6amtech.com/6valley/admin/search-function/',
                dataType: 'json',
                data: {
                    key: key
                },
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (data) {
                    $('#search-result-box').empty().html(data.result)
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        } else {
            $('#search-result-box').empty();
        }
    });

    $(document).mouseup(function (e) {
        var container = $("#search-card");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide();
        }
    });

    function form_alert(id, message) {
        Swal.fire({
            title: 'Are you sure?',
            text: message,
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: 'default',
            confirmButtonColor: '#377dff',
            cancelButtonText: 'No',
            confirmButtonText: 'Yes',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $('#' + id).submit()
            }
        })
    }
</script>
<script>
    function call_demo() {
        toastr.info('Update option is disabled for demo!', {
            CloseButton: true,
            ProgressBar: true
        });
    }
</script>

<script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="https://demo.6amtech.com/6valley/public/assets/back-end/vendor/babel-polyfill/polyfill.min.js"><\/script>');
</script>
<script>


        $(document).on('change', '.product_status', function () {
            var id = $(this).attr("data-id");
            var value = $(this).val();
            Swal.fire({
                title: 'Are you sure Change this?',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonColor: 'primary',
                cancelButtonColor: 'secondary',
                confirmButtonText: 'Yes, Change it!'
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "https://demo.6amtech.com/6valley/seller/orders/productStatus",
                        method: 'POST',
                        data: {
                            "id": id,
                            "delivery_status": value
                        },
                        success: function (data) {
                            if (data.success == 0) {
                                toastr.warning(data.message);
                            } else {
                                toastr.success('Product Status updated successfully');
                                location.reload();
                            }
                        }
                    });
                }
            })
        });
    </script>
<script>
    initSample();
</script>
@endsection()
