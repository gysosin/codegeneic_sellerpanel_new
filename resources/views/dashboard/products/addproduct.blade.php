@extends('layouts.master')
@section('title', 'dashboard')
@section('body')

<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Dashboard Ecommerce Starts -->
        <div class="row">
            <div class="col-md-12">
                <form class="product-form" action="https://demo.6amtech.com/6valley/seller/product/add-new" method="post" enctype="multipart/form-data" id="product_form">
                    <input type="hidden" name="_token" value="z0A9b5ABacGZORl4n8Fa5qF1BRAzdsur2ERiYbZ4">
                    <div class="card">
                       
                        <div class="card-body">
                            <div class=" lang_form" id="en-form">
                                <div class="form-group">
                                    <label class="input-label" for="en_name">Name
                                        (EN)</label>
                                    <input type="text" required name="name[]" id="en_name" class="form-control" placeholder="New Product" required>
                                </div>
                                <input type="hidden" name="lang[]" value="en">
                                <div class="form-group pt-4">
                                    <label class="input-label" for="en_description">Description
                                        (EN)</label>
                                    <textarea name="description[]" class="editor" cols="30" rows="10" required></textarea>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="card mt-2 rest-part">
                        <div class="card-header">
                            <h4>General Info</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name">Category</label>
                                        <select class="js-example-basic-multiple form-control" name="category_id" onchange="getRequest('https://demo.6amtech.com/6valley/seller/product/get-categories?parent_id='+this.value,'sub-category-select','select')" required>
                                            <option value="" selected disabled>---Select---</option>
                                            <option value="37">
                                                Women&#039;s Fashion
                                            </option>
                                            <option value="38">
                                                Men&#039;s Fashion
                                            </option>
                                            <option value="39">
                                                Phones &amp; Telecom
                                            </option>
                                            <option value="40">
                                                Computer, Office &amp; Security
                                            </option>
                                            <option value="43">
                                                Jewelry &amp; Watches
                                            </option>
                                            <option value="44">
                                                Home, Pet &amp; Appliances
                                            </option>
                                            <option value="45">
                                                Bags &amp; Shoes
                                            </option>
                                            <option value="46">
                                                Toys , Kids &amp; Babies
                                            </option>
                                            <option value="47">
                                                Outdoor Fun &amp; Sports
                                            </option>
                                            <option value="114">
                                                Home Improvement &amp; Tools
                                            </option>
                                            <option value="116">
                                                Beauty, Health &amp; Hair
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="name">Sub Category</label>
                                        <select class="js-example-basic-multiple form-control" name="sub_category_id" id="sub-category-select" onchange="getRequest('https://demo.6amtech.com/6valley/seller/product/get-categories?parent_id='+this.value,'sub-sub-category-select','select')">
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="name">Sub Sub Category</label>
                                        <select class="js-example-basic-multiple form-control" name="sub_sub_category_id" id="sub-sub-category-select">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">Brand</label>
                                        <select class="js-example-basic-multiple js-states js-example-responsive form-control" name="brand_id" required>
                                            <option value="" selected disabled>---Select---</option>
                                            <option value="10">123</option>
                                            <option value="9">Apple</option>
                                            <option value="8">Bata</option>
                                            <option value="3">Dove</option>
                                            <option value="6">Kodak</option>
                                            <option value="1">Ledger</option>
                                            <option value="5">Samsung</option>
                                            <option value="2">Subrtex</option>
                                            <option value="4">Timex</option>
                                            <option value="7">Yellow</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Unit</label>
                                        <select class="js-example-basic-multiple form-control" name="unit">
                                            <option value="kg">kg</option>
                                            <option value="pc">pc</option>
                                            <option value="gms">gms</option>
                                            <option value="ltrs">ltrs</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2 rest-part">
                        <div class="card-header">
                            <h4>Variations</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="colors">
                                            Colors :
                                        </label>
                                        <label class="switch">
                                            <input type="checkbox" class="status" name="colors_active" value="">
                                            <span class="slider round"></span>
                                        </label>
                                        <select class="form-control js-select2-custom" name="colors[]" multiple="multiple" id="colors-selector" disabled>
                                            <option value="#F0F8FF">
                                                AliceBlue
                                            </option>
                                            <option value="#9966CC">
                                                Amethyst
                                            </option>
                                            <option value="#FAEBD7">
                                                AntiqueWhite
                                            </option>
                                            <option value="#00FFFF">
                                                Aqua
                                            </option>
                                            <option value="#7FFFD4">
                                                Aquamarine
                                            </option>
                                            <option value="#F0FFFF">
                                                Azure
                                            </option>
                                            <option value="#F5F5DC">
                                                Beige
                                            </option>
                                            <option value="#FFE4C4">
                                                Bisque
                                            </option>
                                            <option value="#000000">
                                                Black
                                            </option>
                                            <option value="#FFEBCD">
                                                BlanchedAlmond
                                            </option>
                                            <option value="#0000FF">
                                                Blue
                                            </option>
                                            <option value="#8A2BE2">
                                                BlueViolet
                                            </option>
                                            <option value="#A52A2A">
                                                Brown
                                            </option>
                                            <option value="#DEB887">
                                                BurlyWood
                                            </option>
                                            <option value="#5F9EA0">
                                                CadetBlue
                                            </option>
                                            <option value="#7FFF00">
                                                Chartreuse
                                            </option>
                                            <option value="#D2691E">
                                                Chocolate
                                            </option>
                                            <option value="#FF7F50">
                                                Coral
                                            </option>
                                            <option value="#6495ED">
                                                CornflowerBlue
                                            </option>
                                            <option value="#FFF8DC">
                                                Cornsilk
                                            </option>
                                            <option value="#DC143C">
                                                Crimson
                                            </option>
                                            <option value="#00FFFF">
                                                Cyan
                                            </option>
                                            <option value="#00008B">
                                                DarkBlue
                                            </option>
                                            <option value="#008B8B">
                                                DarkCyan
                                            </option>
                                            <option value="#B8860B">
                                                DarkGoldenrod
                                            </option>
                                            <option value="#A9A9A9">
                                                DarkGray
                                            </option>
                                            <option value="#006400">
                                                DarkGreen
                                            </option>
                                            <option value="#BDB76B">
                                                DarkKhaki
                                            </option>
                                            <option value="#8B008B">
                                                DarkMagenta
                                            </option>
                                            <option value="#556B2F">
                                                DarkOliveGreen
                                            </option>
                                            <option value="#FF8C00">
                                                DarkOrange
                                            </option>
                                            <option value="#9932CC">
                                                DarkOrchid
                                            </option>
                                            <option value="#8B0000">
                                                DarkRed
                                            </option>
                                            <option value="#E9967A">
                                                DarkSalmon
                                            </option>
                                            <option value="#8FBC8F">
                                                DarkSeaGreen
                                            </option>
                                            <option value="#483D8B">
                                                DarkSlateBlue
                                            </option>
                                            <option value="#2F4F4F">
                                                DarkSlateGray
                                            </option>
                                            <option value="#00CED1">
                                                DarkTurquoise
                                            </option>
                                            <option value="#9400D3">
                                                DarkViolet
                                            </option>
                                            <option value="#FF1493">
                                                DeepPink
                                            </option>
                                            <option value="#00BFFF">
                                                DeepSkyBlue
                                            </option>
                                            <option value="#696969">
                                                DimGray
                                            </option>
                                            <option value="#1E90FF">
                                                DodgerBlue
                                            </option>
                                            <option value="#B22222">
                                                FireBrick
                                            </option>
                                            <option value="#FFFAF0">
                                                FloralWhite
                                            </option>
                                            <option value="#228B22">
                                                ForestGreen
                                            </option>
                                            <option value="#FF00FF">
                                                Fuchsia
                                            </option>
                                            <option value="#DCDCDC">
                                                Gainsboro
                                            </option>
                                            <option value="#F8F8FF">
                                                GhostWhite
                                            </option>
                                            <option value="#FFD700">
                                                Gold
                                            </option>
                                            <option value="#DAA520">
                                                Goldenrod
                                            </option>
                                            <option value="#808080">
                                                Gray
                                            </option>
                                            <option value="#008000">
                                                Green
                                            </option>
                                            <option value="#ADFF2F">
                                                GreenYellow
                                            </option>
                                            <option value="#F0FFF0">
                                                Honeydew
                                            </option>
                                            <option value="#FF69B4">
                                                HotPink
                                            </option>
                                            <option value="#CD5C5C">
                                                IndianRed
                                            </option>
                                            <option value="#4B0082">
                                                Indigo
                                            </option>
                                            <option value="#FFFFF0">
                                                Ivory
                                            </option>
                                            <option value="#F0E68C">
                                                Khaki
                                            </option>
                                            <option value="#E6E6FA">
                                                Lavender
                                            </option>
                                            <option value="#FFF0F5">
                                                LavenderBlush
                                            </option>
                                            <option value="#7CFC00">
                                                LawnGreen
                                            </option>
                                            <option value="#FFFACD">
                                                LemonChiffon
                                            </option>
                                            <option value="#ADD8E6">
                                                LightBlue
                                            </option>
                                            <option value="#F08080">
                                                LightCoral
                                            </option>
                                            <option value="#E0FFFF">
                                                LightCyan
                                            </option>
                                            <option value="#FAFAD2">
                                                LightGoldenrodYellow
                                            </option>
                                            <option value="#90EE90">
                                                LightGreen
                                            </option>
                                            <option value="#D3D3D3">
                                                LightGrey
                                            </option>
                                            <option value="#FFB6C1">
                                                LightPink
                                            </option>
                                            <option value="#FFA07A">
                                                LightSalmon
                                            </option>
                                            <option value="#FFA07A">
                                                LightSalmon
                                            </option>
                                            <option value="#20B2AA">
                                                LightSeaGreen
                                            </option>
                                            <option value="#87CEFA">
                                                LightSkyBlue
                                            </option>
                                            <option value="#778899">
                                                LightSlateGray
                                            </option>
                                            <option value="#B0C4DE">
                                                LightSteelBlue
                                            </option>
                                            <option value="#FFFFE0">
                                                LightYellow
                                            </option>
                                            <option value="#00FF00">
                                                Lime
                                            </option>
                                            <option value="#32CD32">
                                                LimeGreen
                                            </option>
                                            <option value="#FAF0E6">
                                                Linen
                                            </option>
                                            <option value="#FF00FF">
                                                Magenta
                                            </option>
                                            <option value="#800000">
                                                Maroon
                                            </option>
                                            <option value="#66CDAA">
                                                MediumAquamarine
                                            </option>
                                            <option value="#0000CD">
                                                MediumBlue
                                            </option>
                                            <option value="#BA55D3">
                                                MediumOrchid
                                            </option>
                                            <option value="#9370DB">
                                                MediumPurple
                                            </option>
                                            <option value="#3CB371">
                                                MediumSeaGreen
                                            </option>
                                            <option value="#7B68EE">
                                                MediumSlateBlue
                                            </option>
                                            <option value="#7B68EE">
                                                MediumSlateBlue
                                            </option>
                                            <option value="#00FA9A">
                                                MediumSpringGreen
                                            </option>
                                            <option value="#48D1CC">
                                                MediumTurquoise
                                            </option>
                                            <option value="#C71585">
                                                MediumVioletRed
                                            </option>
                                            <option value="#191970">
                                                MidnightBlue
                                            </option>
                                            <option value="#F5FFFA">
                                                MintCream
                                            </option>
                                            <option value="#FFE4E1">
                                                MistyRose
                                            </option>
                                            <option value="#FFE4B5">
                                                Moccasin
                                            </option>
                                            <option value="#FFDEAD">
                                                NavajoWhite
                                            </option>
                                            <option value="#000080">
                                                Navy
                                            </option>
                                            <option value="#FDF5E6">
                                                OldLace
                                            </option>
                                            <option value="#808000">
                                                Olive
                                            </option>
                                            <option value="#6B8E23">
                                                OliveDrab
                                            </option>
                                            <option value="#FFA500">
                                                Orange
                                            </option>
                                            <option value="#FF4500">
                                                OrangeRed
                                            </option>
                                            <option value="#DA70D6">
                                                Orchid
                                            </option>
                                            <option value="#EEE8AA">
                                                PaleGoldenrod
                                            </option>
                                            <option value="#98FB98">
                                                PaleGreen
                                            </option>
                                            <option value="#AFEEEE">
                                                PaleTurquoise
                                            </option>
                                            <option value="#DB7093">
                                                PaleVioletRed
                                            </option>
                                            <option value="#FFEFD5">
                                                PapayaWhip
                                            </option>
                                            <option value="#FFDAB9">
                                                PeachPuff
                                            </option>
                                            <option value="#CD853F">
                                                Peru
                                            </option>
                                            <option value="#FFC0CB">
                                                Pink
                                            </option>
                                            <option value="#DDA0DD">
                                                Plum
                                            </option>
                                            <option value="#B0E0E6">
                                                PowderBlue
                                            </option>
                                            <option value="#800080">
                                                Purple
                                            </option>
                                            <option value="#FF0000">
                                                Red
                                            </option>
                                            <option value="#BC8F8F">
                                                RosyBrown
                                            </option>
                                            <option value="#4169E1">
                                                RoyalBlue
                                            </option>
                                            <option value="#8B4513">
                                                SaddleBrown
                                            </option>
                                            <option value="#FA8072">
                                                Salmon
                                            </option>
                                            <option value="#F4A460">
                                                SandyBrown
                                            </option>
                                            <option value="#2E8B57">
                                                SeaGreen
                                            </option>
                                            <option value="#FFF5EE">
                                                Seashell
                                            </option>
                                            <option value="#A0522D">
                                                Sienna
                                            </option>
                                            <option value="#C0C0C0">
                                                Silver
                                            </option>
                                            <option value="#87CEEB">
                                                SkyBlue
                                            </option>
                                            <option value="#6A5ACD">
                                                SlateBlue
                                            </option>
                                            <option value="#708090">
                                                SlateGray
                                            </option>
                                            <option value="#FFFAFA">
                                                Snow
                                            </option>
                                            <option value="#00FF7F">
                                                SpringGreen
                                            </option>
                                            <option value="#4682B4">
                                                SteelBlue
                                            </option>
                                            <option value="#D2B48C">
                                                Tan
                                            </option>
                                            <option value="#008080">
                                                Teal
                                            </option>
                                            <option value="#D8BFD8">
                                                Thistle
                                            </option>
                                            <option value="#FF6347">
                                                Tomato
                                            </option>
                                            <option value="#40E0D0">
                                                Turquoise
                                            </option>
                                            <option value="#EE82EE">
                                                Violet
                                            </option>
                                            <option value="#F5DEB3">
                                                Wheat
                                            </option>
                                            <option value="#FFFFFF">
                                                White
                                            </option>
                                            <option value="#F5F5F5">
                                                WhiteSmoke
                                            </option>
                                            <option value="#FFFF00">
                                                Yellow
                                            </option>
                                            <option value="#9ACD32">
                                                YellowGreen
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="attributes" style="padding-bottom: 3px">
                                            Attributes :
                                        </label>
                                        <select class="form-control js-select2-custom" name="choice_attributes[]" id="choice_attributes" multiple="multiple">
                                            <option value="1">
                                                Size
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-2 mb-2">
                                        <div class="customer_choice_options" id="customer_choice_options">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2 rest-part">
                        <div class="card-header">
                            <h4>Product price &amp; stock</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Unit price</label>
                                        <input type="number" min="0" value="0" step="0.01" placeholder="Unit price" name="unit_price" value="" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Purchase price</label>
                                        <input type="number" min="0" value="0" step="0.01" placeholder="Purchase price" name="purchase_price" value="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="col-md-6">
                                        <label class="control-label">Tax</label>
                                        <label class="badge badge-info">Percent ( % )</label>
                                        <input type="number" min="0" value="0" step="0.01" placeholder="Tax}" name="tax" value="" class="form-control">
                                        <input name="tax_type" value="percent" style="display: none">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">Discount</label>
                                        <input type="number" min="0" value="0" step="0.01" placeholder="Discount" name="discount" value="" class="form-control">
                                    </div>
                                    <div class="col-md-2" style="padding-top: 30px;">
                                        <select class="form-control js-select2-custom" name="discount_type">
                                            <option value="flat">Flat</option>
                                            <option value="percent">Percent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sku_combination" id="sku_combination">
                                </div>
                                <div class="row pt-4">
                                    <div class="col-md-6" id="quantity">
                                        <label class="control-label">Total Quantity</label>
                                        <input type="number" min="0" value="0" step="1" placeholder="Quantity" name="current_stock" value="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2 rest-part">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label class="control-label">Youtube video link</label>
                                    <small class="badge badge-soft-danger"> ( optional, please provide embed link not direct link. )</small>
                                    <input type="text" name="video_link" placeholder="EX : https://www.youtube.com/embed/5R06LRdUCSE" class="form-control" required>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Upload product images</label><small style="color: red">* ( ratio 1:1 )</small>
                                    </div>
                                    <div class="p-2 border border-dashed" style="max-width:430px;">
                                        <div class="row" id="coba"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Upload thumbnail</label><small style="color: red">* ( ratio 1:1 )</small>
                                    </div>
                                    <div style="max-width:200px;">
                                        <div class="row" id="thumbnail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-footer">
                        <div class="row">
                            <div class="col-md-12" style="padding-top: 20px">
                                <button type="button" onclick="check()" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Dashboard Ecommerce ends -->

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
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://demo.6amtech.com/6valley/public/assets/back-end/js/custom.js"></script>

<script src="https://demo.6amtech.com/6valley/public/assets/select2/js/select2.min.js"></script>
<script>
        $(function () {
            $("#coba").spartanMultiImagePicker({
                fieldName: 'images[]',
                maxCount: 4,
                rowHeight: 'auto',
                groupClassName: 'col-6',
                maxFileSize: '',
                placeholderImage: {
                    image: 'https://demo.6amtech.com/6valley/public/assets/back-end/img/400x400/img2.jpg',
                    width: '100%',
                },
                dropFileLabel: "Drop Here",
                onAddRow: function (index, file) {

                },
                onRenderedPreview: function (index) {

                },
                onRemoveRow: function (index) {

                },
                onExtensionErr: function (index, file) {
                    toastr.error('Please only input png or jpg type file', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                },
                onSizeErr: function (index, file) {
                    toastr.error('File size too big', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                }
            });

            $("#thumbnail").spartanMultiImagePicker({
                fieldName: 'image',
                maxCount: 1,
                rowHeight: 'auto',
                groupClassName: 'col-12',
                maxFileSize: '',
                placeholderImage: {
                    image: 'https://demo.6amtech.com/6valley/public/assets/back-end/img/400x400/img2.jpg',
                    width: '100%',
                },
                dropFileLabel: "Drop Here",
                onAddRow: function (index, file) {

                },
                onRenderedPreview: function (index) {

                },
                onRemoveRow: function (index) {

                },
                onExtensionErr: function (index, file) {
                    toastr.error('Please only input png or jpg type file', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                },
                onSizeErr: function (index, file) {
                    toastr.error('File size too big', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                }
            });
        });

        $(".js-example-theme-single").select2({
            theme: "classic"
        });

        $(".js-example-responsive").select2({
            width: 'resolve'
        });
    </script>
<script>
        function getRequest(route, id, type) {
            $.get({
                url: route,
                dataType: 'json',
                success: function (data) {
                    if (type == 'select') {
                        $('#' + id).empty().append(data.select_tag);
                    }
                },
            });
        }

        $('input[name="colors_active"]').on('change', function () {
            if (!$('input[name="colors_active"]').is(':checked')) {
                $('#colors-selector').prop('disabled', true);
            } else {
                $('#colors-selector').prop('disabled', false);
            }
        });

        $('#choice_attributes').on('change', function () {
            $('#customer_choice_options').html(null);
            $.each($("#choice_attributes option:selected"), function () {
                //console.log($(this).val());
                add_more_customer_choice_option($(this).val(), $(this).text());
            });
        });

        function add_more_customer_choice_option(i, name) {
            let n = name.split(' ').join('');
            $('#customer_choice_options').append('<div class="row"><div class="col-md-3"><input type="hidden" name="choice_no[]" value="' + i + '"><input type="text" class="form-control" name="choice[]" value="' + n + '" placeholder="Choice Title" readonly></div><div class="col-lg-9"><input type="text" class="form-control" name="choice_options_' + i + '[]" placeholder="Enter choice values" data-role="tagsinput" onchange="update_sku()"></div></div>');

            $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
        }
        $('#colors-selector').on('change', function () {
            update_sku();
        });

        $('input[name="unit_price"]').on('keyup', function () {
            update_sku();
        });


        function update_sku() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: 'https://demo.6amtech.com/6valley/seller/product/sku-combination',
                data: $('#product_form').serialize(),
                success: function (data) {
                    $('#sku_combination').html(data.view);
                    $('#sku_combination').addClass('pt-4');
                    if (data.length > 1) {
                        $('#quantity').hide();
                    } else {
                        $('#quantity').show();
                    }
                }
            });
        };

        $(document).ready(function () {
            // color select select2
            $('.color-var-select').select2({
                templateResult: colorCodeSelect,
                templateSelection: colorCodeSelect,
                escapeMarkup: function (m) {
                    return m;
                }
            });

            function colorCodeSelect(state) {
                var colorCode = $(state.element).val();
                if (!colorCode) return state.text;
                return "<span class='color-preview' style='background-color:" + colorCode + ";'></span>" + state.text;
            }
        });
    </script>
<script>
        function check(){
            for ( instance in CKEDITOR.instances ) {
                CKEDITOR.instances[instance].updateElement();
            }
            var formData = new FormData(document.getElementById('product_form'));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post({
                url: 'https://demo.6amtech.com/6valley/seller/product/add-new',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data.errors) {
                        for (var i = 0; i < data.errors.length; i++) {
                            toastr.error(data.errors[i].message, {
                                CloseButton: true,
                                ProgressBar: true
                            });
                        }
                    } else {
                        toastr.success('product updated successfully!', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                        $('#product_form').submit();
                    }
                }
            });
        };
    </script>
<script>
        $(".lang_link").click(function (e) {
            e.preventDefault();
            $(".lang_link").removeClass('active');
            $(".lang_form").addClass('d-none');
            $(this).addClass('active');

            let form_id = this.id;
            let lang = form_id.split("-")[0];
            console.log(lang);
            $("#" + lang + "-form").removeClass('d-none');
            if (lang == 'en') {
                $(".rest-part").removeClass('d-none');
            } else {
                $(".rest-part").addClass('d-none');
            }
        })
    </script>
<script src="https://demo.6amtech.com/6valley/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>$('textarea').ckeditor();</script>

<script src="https://demo.6amtech.com/6valley/public/assets/back-end/js/vendor.min.js"></script>
<script src="https://demo.6amtech.com/6valley/public/assets/back-end/js/toastr.js"></script>
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
<script src="https://demo.6amtech.com/6valley/public/assets/back-end/js/tags-input.min.js"></script>
<script src="https://demo.6amtech.com/6valley/public/assets/back-end/js/spartan-multi-image-picker.js"></script>
<script>
        $(function () {
            $("#coba").spartanMultiImagePicker({
                fieldName: 'images[]',
                maxCount: 4,
                rowHeight: 'auto',
                groupClassName: 'col-6',
                maxFileSize: '',
                placeholderImage: {
                    image: 'https://demo.6amtech.com/6valley/public/assets/back-end/img/400x400/img2.jpg',
                    width: '100%',
                },
                dropFileLabel: "Drop Here",
                onAddRow: function (index, file) {

                },
                onRenderedPreview: function (index) {

                },
                onRemoveRow: function (index) {

                },
                onExtensionErr: function (index, file) {
                    toastr.error('Please only input png or jpg type file', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                },
                onSizeErr: function (index, file) {
                    toastr.error('File size too big', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                }
            });

            $("#thumbnail").spartanMultiImagePicker({
                fieldName: 'image',
                maxCount: 1,
                rowHeight: 'auto',
                groupClassName: 'col-12',
                maxFileSize: '',
                placeholderImage: {
                    image: 'https://demo.6amtech.com/6valley/public/assets/back-end/img/400x400/img2.jpg',
                    width: '100%',
                },
                dropFileLabel: "Drop Here",
                onAddRow: function (index, file) {

                },
                onRenderedPreview: function (index) {

                },
                onRemoveRow: function (index) {

                },
                onExtensionErr: function (index, file) {
                    toastr.error('Please only input png or jpg type file', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                },
                onSizeErr: function (index, file) {
                    toastr.error('File size too big', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                }
            });
        });

        $(".js-example-theme-single").select2({
            theme: "classic"
        });

        $(".js-example-responsive").select2({
            width: 'resolve'
        });
    </script>
<script>
        function getRequest(route, id, type) {
            $.get({
                url: route,
                dataType: 'json',
                success: function (data) {
                    if (type == 'select') {
                        $('#' + id).empty().append(data.select_tag);
                    }
                },
            });
        }

        $('input[name="colors_active"]').on('change', function () {
            if (!$('input[name="colors_active"]').is(':checked')) {
                $('#colors-selector').prop('disabled', true);
            } else {
                $('#colors-selector').prop('disabled', false);
            }
        });

        $('#choice_attributes').on('change', function () {
            $('#customer_choice_options').html(null);
            $.each($("#choice_attributes option:selected"), function () {
                //console.log($(this).val());
                add_more_customer_choice_option($(this).val(), $(this).text());
            });
        });

        function add_more_customer_choice_option(i, name) {
            let n = name.split(' ').join('');
            $('#customer_choice_options').append('<div class="row"><div class="col-md-3"><input type="hidden" name="choice_no[]" value="' + i + '"><input type="text" class="form-control" name="choice[]" value="' + n + '" placeholder="Choice Title" readonly></div><div class="col-lg-9"><input type="text" class="form-control" name="choice_options_' + i + '[]" placeholder="Enter choice values" data-role="tagsinput" onchange="update_sku()"></div></div>');

            $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
        }
        $('#colors-selector').on('change', function () {
            update_sku();
        });

        $('input[name="unit_price"]').on('keyup', function () {
            update_sku();
        });


        function update_sku() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: 'https://demo.6amtech.com/6valley/seller/product/sku-combination',
                data: $('#product_form').serialize(),
                success: function (data) {
                    $('#sku_combination').html(data.view);
                    $('#sku_combination').addClass('pt-4');
                    if (data.length > 1) {
                        $('#quantity').hide();
                    } else {
                        $('#quantity').show();
                    }
                }
            });
        };

        $(document).ready(function () {
            // color select select2
            $('.color-var-select').select2({
                templateResult: colorCodeSelect,
                templateSelection: colorCodeSelect,
                escapeMarkup: function (m) {
                    return m;
                }
            });

            function colorCodeSelect(state) {
                var colorCode = $(state.element).val();
                if (!colorCode) return state.text;
                return "<span class='color-preview' style='background-color:" + colorCode + ";'></span>" + state.text;
            }
        });
    </script>
<script>
        function check(){
            for ( instance in CKEDITOR.instances ) {
                CKEDITOR.instances[instance].updateElement();
            }
            var formData = new FormData(document.getElementById('product_form'));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post({
                url: 'https://demo.6amtech.com/6valley/seller/product/add-new',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data.errors) {
                        for (var i = 0; i < data.errors.length; i++) {
                            toastr.error(data.errors[i].message, {
                                CloseButton: true,
                                ProgressBar: true
                            });
                        }
                    } else {
                        toastr.success('product updated successfully!', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                        $('#product_form').submit();
                    }
                }
            });
        };
    </script>
<script>
        $(".lang_link").click(function (e) {
            e.preventDefault();
            $(".lang_link").removeClass('active');
            $(".lang_form").addClass('d-none');
            $(this).addClass('active');

            let form_id = this.id;
            let lang = form_id.split("-")[0];
            console.log(lang);
            $("#" + lang + "-form").removeClass('d-none');
            if (lang == 'en') {
                $(".rest-part").removeClass('d-none');
            } else {
                $(".rest-part").addClass('d-none');
            }
        })
    </script>
<script src="https://demo.6amtech.com/6valley/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>$('textarea').ckeditor();</script>
<script src="https://demo.6amtech.com/6valley/public/ckeditor/ckeditor.js"></script>
<script>CKEDITOR.replace('editor');</script>
<script>
    initSample();
</script>
@endsection()