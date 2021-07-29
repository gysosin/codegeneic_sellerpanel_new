@extends('layouts.master')
@section('title', 'dashboard')
@section('body')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Products Review</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Product List</a>
                            </li>
                            <li class="breadcrumb-item active">Reviews
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
           
            <!-- dataTable starts -->
            <div class="table-responsive">
                <table class="table data-thumb-view">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Image</th>
                            <th>NAME</th>
                            <th>Review</th>
                            <th>POPULARITY</th>
                                               </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>
                        <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>  <tr>
                            <td>21/07/21</td>
                            <td class="product-img"><img src="{{asset('/app-assets/images/elements/apple-watch.png')}}" alt="Img placeholder">
                            </td>
                            <td class="product-name"><a href='/dashboard-productoverview' >Apple Watch series 4 GPS</a></td>
                            <td class="product-category">Nice product</td>
                            <td>
                              
                              5<div class="fa fa-star"></div>
                              </div>
                          </td>
                        </tr>
                       
                       
                       
                      
                       
                        
                        
                       
                        
                      
                    </tbody>
                </table>
            </div>
            <!-- dataTable ends -->

            
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