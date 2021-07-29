<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  @include('dashboard.dashinclude.header')
</head>

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    @include('dashboard.dashinclude.main_menu')

    <div class="app-content content">

        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        @include('dashboard.dashinclude.nav')
  <!-- Loading ends -->

 
    @yield('body')
    <!-- *************
				************ Main container end *************
				************* -->


  </div>

  <!-- *************
				************ Required JavaScript Files *************
			************* -->
  @include('dashboard.dashinclude.js')

</body>

</html>