@include('dashboard.dashinclude.header')
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Dashboard</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li class="active"><a href='/dashboard-analytics'><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a href='/dashboard-ecommerce'><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Orders</span>
                </li>
                <li class=" nav-item"><a href='/dashboard-allorders'><i class="feather icon-list"></i><span class="menu-title" data-i18n="Email">All</span></a>
                </li>
                <li class=" nav-item"><a href='/dashboard-pendingorders'><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">Pending</span></a>
                </li>
                <li class=" nav-item"><a href='/dashboard-processingorders'><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Todo">processing</span></a>
                </li>
                <li class=" nav-item"><a href='/dashboard-deliveredorders'><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">Delivered</span></a>
                </li>
                <li class=" nav-item"><a href='/dashboard-returnorders'><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">Returned</span></a>
                </li>
                <li class=" nav-item"><a href='/dashboard-failedorders'><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">Failed</span></a>
                </li>
              
                <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">none</span></a>
                    <ul class="menu-content">
                        <li><a href="app-ecommerce-shop.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Shop</span></a>
                        </li>
                        <li><a href="app-ecommerce-wishlist.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Wish List</span></a>
                        </li>
                        <li><a href="app-ecommerce-checkout.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Checkout</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Product Management</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Products</span></a>
                    <ul class="menu-content">
                    <li><a href='/dashboard-allproducts'><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Products</span></a>
                        </li>
                        <li><a href="app-ecommerce-shop.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Bulk Import</span></a>
                        </li>
                        <li><a href="app-ecommerce-wishlist.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Bulk Export</span></a>
                        </li>
                    </ul>
                </li>
               
                <li class=" navigation-header"><span>User realted utility</span>
                </li>
              
                    <li><a href="app-ecommerce-shop.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Cancellations</span></a>
                        </li>
                        <li><a href="app-ecommerce-shop.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Contact Issue</span></a>
                        </li>
                        <li><a href="app-ecommerce-wishlist.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Settlement Report</span></a>
                        </li>
                        <li><a href="app-ecommerce-wishlist.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Purchase history</span></a>
                        </li>
                        <li class=" navigation-header"><span>Apps</span>
                </li>
                <li class=" nav-item"><a href="app-email.html"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">Email</span></a>
                </li>
                <li class="active nav-item"><a href="app-chat.html"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
                </li>
                <li class=" navigation-header"><span>Transactions</span>
                </li>
              
                    <li><a href="app-ecommerce-shop.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Selling History</span></a>
                        </li>
                        <li><a href="app-ecommerce-shop.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">All Transactions</span></a>
                        </li>
                        <li><a href="app-ecommerce-wishlist.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Pending Amount</span></a>
                        </li>
                        
               
                    </ul>
                </li>
         
               
               
               
              
               
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    @include('dashboard.submenus.maintopbar')