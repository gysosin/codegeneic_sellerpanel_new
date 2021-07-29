<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="PIXINVENT">
<title>@yield('title')</title>
<link rel="apple-touch-icon" href="{{url('/app-assets/images/ico/apple-icon-120.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{url('/app-assets/images/ico/favicon.ico')}}">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/charts/apexcharts.css')}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/themes/semi-dark-layout.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/pages/data-list-view.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/pages/app-chat.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/pages/dashboard-analytics.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/pages/dashboard-ecommerce.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/pages/card-analytics.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/pages/authentication.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/plugins/forms/wizard.css')}}">

<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{url('/assets/css/style.css')}}">
<!-- END: Custom CSS-->


<link rel="stylesheet" href="https://demo.6amtech.com/6valley/public/assets/back-end/css/custom.css">

<link href="https://demo.6amtech.com/6valley/public/assets/back-end/css/tags-input.min.css" rel="stylesheet">
<link href="https://demo.6amtech.com/6valley/public/assets/select2/css/select2.min.css" rel="stylesheet">
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

    input:checked+.slider {
        background-color: #4af3ce;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #60f3ca;
    }

    input:checked+.slider:before {
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

    #product-images-modal .modal-content {
        width: 1116px !important;
        margin-left: -264px !important;
    }

    #thumbnail-image-modal .modal-content {
        width: 1116px !important;
        margin-left: -264px !important;
    }

    @media(max-width:768px) {
        #product-images-modal .modal-content {
            width: 698px !important;
            margin-left: -75px !important;
        }

        #thumbnail-image-modal .modal-content {
            width: 698px !important;
            margin-left: -75px !important;
        }
    }

    @media(max-width:375px) {
        #product-images-modal .modal-content {
            width: 367px !important;
            margin-left: 0 !important;
        }

        #thumbnail-image-modal .modal-content {
            width: 367px !important;
            margin-left: 0 !important;
        }
    }

    @media(max-width:500px) {
        #product-images-modal .modal-content {
            width: 400px !important;
            margin-left: 0 !important;
        }

        #thumbnail-image-modal .modal-content {
            width: 400px !important;
            margin-left: 0 !important;
        }

        .btn-for-m {
            margin-bottom: 10px;
        }

        .parcent-margin {
            margin-left: 0px !important;
        }
    }
</style>
<script src="https://demo.6amtech.com/6valley/public/assets/back-end/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>