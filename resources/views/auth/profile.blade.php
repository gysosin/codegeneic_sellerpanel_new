@extends('layouts.master')
@section('title', 'dashboard')
<script src="/cdn-cgi/apps/head/aCrVmvXdLd5mk0h4f_Wlo6smF1A.js"></script>
<link rel="shortcut icon" href="">

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://demo.6amtech.com/6valley/public/assets/back-end/css/theme.minc619.css?v=1.0">
<link href="https://demo.6amtech.com/6valley/public/assets/back-end/css/croppie.css" rel="stylesheet">
<meta name="csrf-token" content="YpyxpvXoZnhleRKo4nPbH5O6jG9nYzKHIx5tU4QS">
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
    <main id="content" role="main" class="main pointer-event">
    <div class="col-lg-9">
<form action="https://demo.6amtech.com/6valley/seller/profile/update/1" method="post" enctype="multipart/form-data" id="seller-profile-form">
<input type="hidden" name="_token" value="YpyxpvXoZnhleRKo4nPbH5O6jG9nYzKHIx5tU4QS"> 
<div class="card mb-3 mb-lg-5" id="generalDiv">


<center>
<label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar" for="avatarUploader">
<img id="viewer" onerror="this.src='https://demo.6amtech.com/6valley/public/assets/back-end/img/160x160/img1.jpg'" class="avatar-img" src="https://demo.6amtech.com/6valley/storage/app/public/seller/2021-06-05-60bb11eedfe88.png" alt="Image">
</label>
</center>

</div>


<div class="card mb-3 mb-lg-5">
<div class="card-header">
<h2 class="card-title h4">Basic information</h2>
</div>

<div class="card-body">


<div class="row form-group">
<label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Full Name <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Display name"></i></label>
<div class="col-sm-9 row">
<div class="col-md-6">
<label for="name">First Name <span class="text-danger">*</span></label>
<input type="text" name="f_name" value="John" class="form-control" id="name" required>
</div>
<div class="col-md-6">
<label for="name">Last Name <span class="text-danger">*</span></label>
<input type="text" name="l_name" value="Doe" class="form-control" id="name" required>
</div>
</div>
</div>


<div class="row form-group">
<label for="phoneLabel" class="col-sm-3 col-form-label input-label">Phone <span class="input-label-secondary">(Optional)</span></label>
<div class="col-sm-9">
<input type="text" class="js-masked-input form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+(xxx)xx-xxx-xxxxx" value="+6400000000" data-hs-mask-options='{
                                           "template": "+(880)00-000-00000"
                                         }'>
</div>
</div>

<div class="row form-group">
<label for="newEmailLabel" class="col-sm-3 col-form-label input-label">Email</label>
<div class="col-sm-9">
<input type="email" class="form-control" name="email" id="newEmailLabel" value="test.seller@gmail.com" placeholder="Enter new email address" aria-label="Enter new email address">
</div>
</div>
<div class="row">
<div class="col-md-3 col-form-label">
</div>
<div class="form-group col-md-9" id="select-img">
<div class="custom-file">
<input type="file" name="image" id="customFileUpload" class="custom-file-input" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
<label class="custom-file-label" for="customFileUpload">Image Upload</label>
</div>
</div>
</div>
<div class="d-flex justify-content-end">
<button type="button" onclick="call_demo()" class="btn btn-primary">Save changes</button>
</div>

</div>

</div>

</form>

<div id="passwordDiv" class="card mb-3 mb-lg-5">
<div class="card-header">
<h4 class="card-title">Change your Password</h4>
</div>

<div class="card-body">

<form id="changePasswordForm" action="https://demo.6amtech.com/6valley/seller/profile/settings-password" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="YpyxpvXoZnhleRKo4nPbH5O6jG9nYzKHIx5tU4QS">

<div class="row form-group">
<label for="newPassword" class="col-sm-3 col-form-label input-label"> New
Password</label>
<div class="col-sm-9">
<input type="password" class="js-pwstrength form-control" name="password" id="newPassword" placeholder="Enter new password" aria-label="Enter new password" data-hs-pwstrength-options='{
                                           "ui": {
                                             "container": "#changePasswordForm",
                                             "viewports": {
                                               "progress": "#passwordStrengthProgress",
                                               "verdict": "#passwordStrengthVerdict"
                                             }
                                           }
                                         }'>
<p id="passwordStrengthVerdict" class="form-text mb-2"></p>
<div id="passwordStrengthProgress"></div>
</div>
</div>


<div class="row form-group">
<label for="confirmNewPasswordLabel" class="col-sm-3 col-form-label input-label"> Confirm
Password </label>
<div class="col-sm-9">
<div class="mb-3">
<input type="password" class="form-control" name="confirm_password" id="confirmNewPasswordLabel" placeholder="Confirm your new password" aria-label="Confirm your new password">
</div>
</div>
</div>

<div class="d-flex justify-content-end">
<button type="button" onclick="call_demo()" class="btn btn-primary">Save changes</button>
</div>
</form>

</div>

</div>


<div id="stickyBlockEndPoint"></div>
</div>
</div>

</div>


<style>
    input[type="file"] {
        display: none;
    }

    .custom-file-upload {
        margin-left: 38%;
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }
</style>
<div class="modal fade" id="profile-image-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="width: 582px;margin-left: 0%">
 <div class="modal-header">
<h5 class="modal-title text-capitalize" id="">profile image modal</h5>
</div>
<div class="modal-body">
<div class="alert alert-block alert-success" id="img-suc-profile-image-modal" style="display: none;">
<i class="ace-icon fa fa-check green"></i>
<strong class="green">
Image uploaded successfully.
</strong>
</div>
<div class="alert alert-block alert-danger" id="img-err-profile-image-modal" style="display: none;">
<strong class="red">
Error , Something went wrong !
</strong>
</div>
<div class="row" id="show-images-profile-image-modal">
</div>
<form>
<div class="form-group" style="display: none" id="crop-profile-image-modal">
<div id="upload-image-div-profile-image-modal"></div>
</div>
<div class="form-group" id="select-img-profile-image-modal">
<label for="image-set-profile-image-modal" class="custom-file-upload">
Choose Image <i class="fa fa-plus-circle"></i>
</label>
<input type="file" name="image" onchange="cropView('profile-image-modal')" id="image-set-profile-image-modal" required>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">
Close
</button>
<button type="button" class="btn btn-primary btn-upload-image-profile-image-modal" style="display: none">
Add
</button>
</div>
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






<div class="content container-fluid">

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://demo.6amtech.com/6valley/public/assets/back-end/js/custom.js"></script>
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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#viewer').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#customFileUpload").change(function () {
            readURL(this);
        });
    </script>
<script>
        $("#generalSection").click(function() {
            $("#passwordSection").removeClass("active");
            $("#generalSection").addClass("active");
            $('html, body').animate({
                scrollTop: $("#generalDiv").offset().top
            }, 2000);
        });

        $("#passwordSection").click(function() {
            $("#generalSection").removeClass("active");
            $("#passwordSection").addClass("active");
            $('html, body').animate({
                scrollTop: $("#passwordDiv").offset().top
            }, 2000);
        });
    </script>

<script src="https://demo.6amtech.com/6valley/public/assets/back-end/js/croppie.js"></script>
<script src="https://demo.6amtech.com/6valley/public/assets/back-end/js/croppie.js"></script>
<script>
    function Validate(file) {
        var x;
        var le = file.length;
        var poin = file.lastIndexOf(".");
        var accu1 = file.substring(poin, le);
        var accu = accu1.toLowerCase();
        if ((accu != '.png') && (accu != '.jpg') && (accu != '.jpeg')) {
            x = 1;
            return x;
        } else {
            x = 0;
            return x;
        }
    }

    function cropView(id) {
        $("#crop-" + id).show();
    }

    function removeImage(route, id) {
        $(function () {
            $.ajax({
                type: 'get',
                url: route,
                dataType: 'json',
                success: function (data) {
                    if (data.success === 1) {
                        $("#img-suc-" + id).hide();
                        $("#img-err-" + id).hide();
                        $("#crop-" + id).hide();
                        $("#show-images-" + id).html(data.images);
                        $("#image-count-" + id).text('( ' + data.count + ' )');
                    } else if (data.success === 0) {
                        $("#img-suc-" + id).hide();
                        $("#img-err-" + id).show();
                    }
                },
            });
        });
    }
</script>
<script>
    var resize_profile_image_modal = $('#upload-image-div-profile-image-modal').croppie({
        enableExif: true,
        enableOrientation: true,
        viewport: { // Default { width: 100, height: 100, type: 'square' }//1340 X 595
            width: '200',
            height: '200',
            type: 'square' //square
        },
        boundary: {
            width: '210',
            height: '210',
        }
    });

    $('#image-set-profile-image-modal').on('change', function () {

        var file = $('#image-set-profile-image-modal').val();
        var file1 = Validate(file);
        if (file1 == 1) {
            $("#crop-profile-image-modal").hide();
            $(this).val('');
            toastr.error('This is not an image file.', {
                CloseButton: true,
                ProgressBar: true
            });
        } else {
            $("#crop-profile-image-modal").show();
            $('.image-set-profile-image-modal').hide();
            $('.btn-upload-image-profile-image-modal').show();
            var reader_profile_image_modal = new FileReader();
            reader_profile_image_modal.onload = function (e) {
                resize_profile_image_modal.croppie('bind', {
                    url: e.target.result
                }).then(function () {
                    /*console.log('jQuery bind complete');*/
                });
            }
            reader_profile_image_modal.readAsDataURL(this.files[0]);
        }

    });

    $('.btn-upload-image-profile-image-modal').on('click', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        resize_profile_image_modal.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (img) {
            $.ajax({
                type: 'post',
                url: 'https://demo.6amtech.com/6valley/image-upload',
                data: {
                    "image": img,
                    "folder": 'profile_image_modal',
                    "multi_image": ''
                },
                dataType: 'JSON',
                beforeSend: function () {
                    $("#loading").show();
                },
                success: function (data) {
                    if (data.success === 1) {
                        $("#img-suc-profile-image-modal").show();
                        $("#img-err-profile-image-modal").hide();
                        $("#crop-profile-image-modal").hide();
                        $(".btn-upload-image-profile-image-modal").hide();
                        $("#show-images-profile-image-modal").html(data.images);
                        $("#image-count-profile-image-modal").text(data.count + ' ' + 'image selected.');
                    } else if (data.success === 0) {
                        $("#img-suc-profile-image-modal").hide();
                        $("#img-err-profile-image-modal").show();
                        $(".btn-upload-image-profile-image-modal").hide();
                    }
                },
                error: function () {
                    $("#img-suc-profile-image-modal").hide();
                    $("#img-err-profile-image-modal").show();
                },
                complete: function () {
                    $("#loading").hide();
                    $("#loading-profile-image-modal").hide();
                },
            });
        });
    });

</script>
<script src="https://demo.6amtech.com/6valley/public/assets/back-end/js/bootstrap.min.js"></script>
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
<script src="https://demo.6amtech.com/6valley/public/ckeditor/ckeditor.js"></script>
<script>CKEDITOR.replace('editor');</script>
<script>
    initSample();
</script>

    </div>



@endsection()