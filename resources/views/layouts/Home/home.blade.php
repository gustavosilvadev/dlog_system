@include('layouts.components.head')
<!-- 
    <div id="app"></div>

    <script src="{{ asset('js/app.js') }}"></script> 
-->

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
        <div class="navbar-header d-xl-block d-none">
<!--             
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>

                    </a></li>
            </ul> -->

        </div>
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="javascript:void(0);" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="javascript:void(0);" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="javascript:void(0);" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="javascript:void(0);" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-cart mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="shopping-cart"></i><span class="badge badge-pill badge-primary badge-up cart-item-count">6</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">My Cart</h4>
                                <div class="badge badge-pill badge-light-primary">4 Items</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list">
                            <div class="media align-items-center"><img class="d-block rounded mr-1" src="../../../app-assets/images/pages/eCommerce/1.png" alt="donuts" width="62">
                                <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Apple watch 5</a></h6><small class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$374.90</h5>
                                </div>
                            </div>
                            <div class="media align-items-center"><img class="d-block rounded mr-1" src="../../../app-assets/images/pages/eCommerce/7.png" alt="donuts" width="62">
                                <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Google Home Mini</a></h6><small class="cart-item-by">By Google</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="3">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$129.40</h5>
                                </div>
                            </div>
                            <div class="media align-items-center"><img class="d-block rounded mr-1" src="../../../app-assets/images/pages/eCommerce/2.png" alt="donuts" width="62">
                                <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> iPhone 11 Pro</a></h6><small class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="2">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$699.00</h5>
                                </div>
                            </div>
                            <div class="media align-items-center"><img class="d-block rounded mr-1" src="../../../app-assets/images/pages/eCommerce/3.png" alt="donuts" width="62">
                                <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> iMac Pro</a></h6><small class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$4,999.00</h5>
                                </div>
                            </div>
                            <div class="media align-items-center"><img class="d-block rounded mr-1" src="../../../app-assets/images/pages/eCommerce/5.png" alt="donuts" width="62">
                                <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> MacBook Pro</a></h6><small class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$2,999.00</h5>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer">
                            <div class="d-flex justify-content-between mb-1">
                                <h6 class="font-weight-bolder mb-0">Total:</h6>
                                <h6 class="text-primary font-weight-bolder mb-0">$10,999.00</h6>
                            </div><a class="btn btn-primary btn-block" href="app-ecommerce-checkout.html">Checkout</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                                <div class="badge badge-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img src="../../../app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="media d-flex align-items-center">
                                <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                                <div class="custom-control custom-control-primary custom-switch">
                                    <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
                                    <label class="custom-control-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to hight CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">John Doe</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../../../app-assets//images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="mr-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i class="mr-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="mr-50" data-feather="check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="mr-50" data-feather="message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="page-account-settings.html"><i class="mr-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="mr-50" data-feather="credit-card"></i> Pricing</a><a class="dropdown-item" href="page-faq.html"><i class="mr-50" data-feather="help-circle"></i> FAQ</a><a class="dropdown-item" href="page-auth-login-v2.html"><i class="mr-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html"><span class="brand-logo">
                                <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                    <defs>
                                        <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                            <stop stop-color="#000000" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                        <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                    </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                            <g id="Group" transform="translate(400.000000, 178.000000)">
                                                <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                                <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                                <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                                <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                                <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span>
                            <h2 class="brand-text mb-0">Vuexy</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
<!--                 
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="index.html" data-toggle="dropdown"><i data-feather="home"></i><span data-i18n="Dashboards">Dashboards</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="dashboard-analytics.html" data-toggle="dropdown" data-i18n="Analytics"><i data-feather="activity"></i><span data-i18n="Analytics">Analytics</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="dashboard-ecommerce.html" data-toggle="dropdown" data-i18n="eCommerce"><i data-feather="shopping-cart"></i><span data-i18n="eCommerce">eCommerce</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i data-feather="package"></i><span data-i18n="Apps">Apps</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-email.html" data-toggle="dropdown" data-i18n="Email"><i data-feather="mail"></i><span data-i18n="Email">Email</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-chat.html" data-toggle="dropdown" data-i18n="Chat"><i data-feather="message-square"></i><span data-i18n="Chat">Chat</span></a>
                            </li>
                            <li class="active" data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-todo.html" data-toggle="dropdown" data-i18n="Todo"><i data-feather="check-square"></i><span data-i18n="Todo">Todo</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-calendar.html" data-toggle="dropdown" data-i18n="Calendar"><i data-feather="calendar"></i><span data-i18n="Calendar">Calendar</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-kanban.html" data-toggle="dropdown" data-i18n="Kanban"><i data-feather="grid"></i><span data-i18n="Kanban">Kanban</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Invoice"><i data-feather="file-text"></i><span data-i18n="Invoice">Invoice</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-invoice-list.html" data-toggle="dropdown" data-i18n="List"><i data-feather="circle"></i><span data-i18n="List">List</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-invoice-preview.html" data-toggle="dropdown" data-i18n="Preview"><i data-feather="circle"></i><span data-i18n="Preview">Preview</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-invoice-edit.html" data-toggle="dropdown" data-i18n="Edit"><i data-feather="circle"></i><span data-i18n="Edit">Edit</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-invoice-add.html" data-toggle="dropdown" data-i18n="Add"><i data-feather="circle"></i><span data-i18n="Add">Add</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-file-manager.html" data-toggle="dropdown" data-i18n="File Manager"><i data-feather="save"></i><span data-i18n="File Manager">File Manager</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="eCommerce"><i data-feather="shopping-cart"></i><span data-i18n="eCommerce">eCommerce</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-ecommerce-shop.html" data-toggle="dropdown" data-i18n="Shop"><i data-feather="circle"></i><span data-i18n="Shop">Shop</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-ecommerce-details.html" data-toggle="dropdown" data-i18n="Details"><i data-feather="circle"></i><span data-i18n="Details">Details</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-ecommerce-wishlist.html" data-toggle="dropdown" data-i18n="Wishlist"><i data-feather="circle"></i><span data-i18n="Wishlist">Wishlist</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-ecommerce-checkout.html" data-toggle="dropdown" data-i18n="Checkout"><i data-feather="circle"></i><span data-i18n="Checkout">Checkout</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="User"><i data-feather="user"></i><span data-i18n="User">User</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-user-list.html" data-toggle="dropdown" data-i18n="List"><i data-feather="circle"></i><span data-i18n="List">List</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-user-view.html" data-toggle="dropdown" data-i18n="View"><i data-feather="circle"></i><span data-i18n="View">View</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-user-edit.html" data-toggle="dropdown" data-i18n="Edit"><i data-feather="circle"></i><span data-i18n="Edit">Edit</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i data-feather="layers"></i><span data-i18n="User Interface">User Interface</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ui-typography.html" data-toggle="dropdown" data-i18n="Typography"><i data-feather="type"></i><span data-i18n="Typography">Typography</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ui-colors.html" data-toggle="dropdown" data-i18n="Colors"><i data-feather="droplet"></i><span data-i18n="Colors">Colors</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ui-feather.html" data-toggle="dropdown" data-i18n="Feather"><i data-feather="eye"></i><span data-i18n="Feather">Feather</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Cards"><i data-feather="credit-card"></i><span data-i18n="Cards">Cards</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="card-basic.html" data-toggle="dropdown" data-i18n="Basic"><i data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="card-advance.html" data-toggle="dropdown" data-i18n="Advance"><i data-feather="circle"></i><span data-i18n="Advance">Advance</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="card-statistics.html" data-toggle="dropdown" data-i18n="Statistics"><i data-feather="circle"></i><span data-i18n="Statistics">Statistics</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="card-analytics.html" data-toggle="dropdown" data-i18n="Analytics"><i data-feather="circle"></i><span data-i18n="Analytics">Analytics</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="card-actions.html" data-toggle="dropdown" data-i18n="Card Actions"><i data-feather="circle"></i><span data-i18n="Card Actions">Card Actions</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Components"><i data-feather="briefcase"></i><span data-i18n="Components">Components</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-alerts.html" data-toggle="dropdown" data-i18n="Alerts"><i data-feather="circle"></i><span data-i18n="Alerts">Alerts</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-avatar.html" data-toggle="dropdown" data-i18n="Avatar"><i data-feather="circle"></i><span data-i18n="Avatar">Avatar</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-badges.html" data-toggle="dropdown" data-i18n="Badges"><i data-feather="circle"></i><span data-i18n="Badges">Badges</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-breadcrumbs.html" data-toggle="dropdown" data-i18n="Breadcrumbs"><i data-feather="circle"></i><span data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-buttons.html" data-toggle="dropdown" data-i18n="Buttons"><i data-feather="circle"></i><span data-i18n="Buttons">Buttons</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-carousel.html" data-toggle="dropdown" data-i18n="Carousel"><i data-feather="circle"></i><span data-i18n="Carousel">Carousel</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-collapse.html" data-toggle="dropdown" data-i18n="Collapse"><i data-feather="circle"></i><span data-i18n="Collapse">Collapse</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-divider.html" data-toggle="dropdown" data-i18n="Divider"><i data-feather="circle"></i><span data-i18n="Divider">Divider</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-dropdowns.html" data-toggle="dropdown" data-i18n="Dropdowns"><i data-feather="circle"></i><span data-i18n="Dropdowns">Dropdowns</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-list-group.html" data-toggle="dropdown" data-i18n="List Group"><i data-feather="circle"></i><span data-i18n="List Group">List Group</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-media-objects.html" data-toggle="dropdown" data-i18n=""><i data-feather="circle"></i><span data-i18n="">Media Objects</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-modals.html" data-toggle="dropdown" data-i18n="Modals"><i data-feather="circle"></i><span data-i18n="Modals">Modals</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-navs-component.html" data-toggle="dropdown" data-i18n="Navs Component"><i data-feather="circle"></i><span data-i18n="Navs Component">Navs Component</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-pagination.html" data-toggle="dropdown" data-i18n="Pagination"><i data-feather="circle"></i><span data-i18n="Pagination">Pagination</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-pill-badges.html" data-toggle="dropdown" data-i18n="Pill Badges"><i data-feather="circle"></i><span data-i18n="Pill Badges">Pill Badges</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-pills-component.html" data-toggle="dropdown" data-i18n="Pills Component"><i data-feather="circle"></i><span data-i18n="Pills Component">Pills Component</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-popovers.html" data-toggle="dropdown" data-i18n="Popovers"><i data-feather="circle"></i><span data-i18n="Popovers">Popovers</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-progress.html" data-toggle="dropdown" data-i18n="Progress"><i data-feather="circle"></i><span data-i18n="Progress">Progress</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-spinner.html" data-toggle="dropdown" data-i18n="Spinner"><i data-feather="circle"></i><span data-i18n="Spinner">Spinner</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-tabs-component.html" data-toggle="dropdown" data-i18n="Tabs Component"><i data-feather="circle"></i><span data-i18n="Tabs Component">Tabs Component</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-timeline.html" data-toggle="dropdown" data-i18n="Timeline"><i data-feather="circle"></i><span data-i18n="Timeline">Timeline</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-bs-toast.html" data-toggle="dropdown" data-i18n="Toasts"><i data-feather="circle"></i><span data-i18n="Toasts">Toasts</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="component-tooltips.html" data-toggle="dropdown" data-i18n="Tooltips"><i data-feather="circle"></i><span data-i18n="Tooltips">Tooltips</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Extensions"><i data-feather="box"></i><span data-i18n="Extensions">Extensions</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-sweet-alerts.html" data-toggle="dropdown" data-i18n="Sweet Alert"><i data-feather="circle"></i><span data-i18n="Sweet Alert">Sweet Alert</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-blockui.html" data-toggle="dropdown" data-i18n="Block UI"><i data-feather="circle"></i><span data-i18n="Block UI">BlockUI</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-toastr.html" data-toggle="dropdown" data-i18n="Toastr"><i data-feather="circle"></i><span data-i18n="Toastr">Toastr</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-sliders.html" data-toggle="dropdown" data-i18n="Sliders"><i data-feather="circle"></i><span data-i18n="Sliders">Sliders</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-drag-drop.html" data-toggle="dropdown" data-i18n="Drag &amp; Drop"><i data-feather="circle"></i><span data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-tour.html" data-toggle="dropdown" data-i18n="Tour"><i data-feather="circle"></i><span data-i18n="Tour">Tour</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-clipboard.html" data-toggle="dropdown" data-i18n="Clipboard"><i data-feather="circle"></i><span data-i18n="Clipboard">Clipboard</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-media-player.html" data-toggle="dropdown" data-i18n="Media player"><i data-feather="circle"></i><span data-i18n="Media player">Media Player</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-context-menu.html" data-toggle="dropdown" data-i18n="Context Menu"><i data-feather="circle"></i><span data-i18n="Context Menu">Context Menu</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-swiper.html" data-toggle="dropdown" data-i18n="swiper"><i data-feather="circle"></i><span data-i18n="swiper">Swiper</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-tree.html" data-toggle="dropdown" data-i18n="Tree"><i data-feather="circle"></i><span data-i18n="Tree">Tree</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-ratings.html" data-toggle="dropdown" data-i18n="Ratings"><i data-feather="circle"></i><span data-i18n="Ratings">Ratings</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="ext-component-i18n.html" data-toggle="dropdown" data-i18n="l18n"><i data-feather="circle"></i><span data-i18n="l18n">l18n</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Page Layouts"><i data-feather="layout"></i><span data-i18n="Page Layouts">Page Layouts</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="layout-boxed.html" data-toggle="dropdown" data-i18n="Layout Boxed"><i data-feather="circle"></i><span data-i18n="Layout Boxed">Layout Boxed</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="layout-without-menu.html" data-toggle="dropdown" data-i18n="Without Menu"><i data-feather="circle"></i><span data-i18n="Without Menu">Without Menu</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="layout-empty.html" data-toggle="dropdown" data-i18n="Layout Empty"><i data-feather="circle"></i><span data-i18n="Layout Empty">Layout Empty</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="layout-blank.html" data-toggle="dropdown" data-i18n="Layout Blank"><i data-feather="circle"></i><span data-i18n="Layout Blank">Layout Blank</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i data-feather="edit"></i><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Form Elements"><i data-feather="copy"></i><span data-i18n="Form Elements">Form Elements</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-input.html" data-toggle="dropdown" data-i18n="Input"><i data-feather="circle"></i><span data-i18n="Input">Input</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-input-groups.html" data-toggle="dropdown" data-i18n="Input Groups"><i data-feather="circle"></i><span data-i18n="Input Groups">Input Groups</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-input-mask.html" data-toggle="dropdown" data-i18n="Input Mask"><i data-feather="circle"></i><span data-i18n="Input Mask">Input Mask</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-textarea.html" data-toggle="dropdown" data-i18n="Textarea"><i data-feather="circle"></i><span data-i18n="Textarea">Textarea</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-checkbox.html" data-toggle="dropdown" data-i18n="Checkbox"><i data-feather="circle"></i><span data-i18n="Checkbox">Checkbox</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-radio.html" data-toggle="dropdown" data-i18n="Radio"><i data-feather="circle"></i><span data-i18n="Radio">Radio</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-switch.html" data-toggle="dropdown" data-i18n="Switch"><i data-feather="circle"></i><span data-i18n="Switch">Switch</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-select.html" data-toggle="dropdown" data-i18n="Select"><i data-feather="circle"></i><span data-i18n="Select">Select</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-number-input.html" data-toggle="dropdown" data-i18n="Number Input"><i data-feather="circle"></i><span data-i18n="Number Input">Number Input</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-file-uploader.html" data-toggle="dropdown" data-i18n="File Uploader"><i data-feather="circle"></i><span data-i18n="File Uploader">File Uploader</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-quill-editor.html" data-toggle="dropdown" data-i18n="Quill Editor"><i data-feather="circle"></i><span data-i18n="Quill Editor">Quill Editor</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-date-time-picker.html" data-toggle="dropdown" data-i18n="Date &amp; Time Picker"><i data-feather="circle"></i><span data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-layout.html" data-toggle="dropdown" data-i18n="Form Layout"><i data-feather="box"></i><span data-i18n="Form Layout">Form Layout</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-wizard.html" data-toggle="dropdown" data-i18n="Form Wizard"><i data-feather="package"></i><span data-i18n="Form Wizard">Form Wizard</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-validation.html" data-toggle="dropdown" data-i18n="Form Validation"><i data-feather="check-circle"></i><span data-i18n="Form Validation">Form Validation</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="form-repeater.html" data-toggle="dropdown" data-i18n="Form Repeater"><i data-feather="rotate-cw"></i><span data-i18n="Form Repeater">Form Repeater</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="table-bootstrap.html" data-toggle="dropdown" data-i18n="Table"><i data-feather="server"></i><span data-i18n="Table">Table</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Datatable"><i data-feather="grid"></i><span data-i18n="Datatable">Datatable</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="table-datatable-basic.html" data-toggle="dropdown" data-i18n="Basic"><i data-feather="circle"></i><span data-i18n="Basic">Basic</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="table-datatable-advanced.html" data-toggle="dropdown" data-i18n="Advanced"><i data-feather="circle"></i><span data-i18n="Advanced">Advanced</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="table-ag-grid.html" data-toggle="dropdown" data-i18n="agGrid Table"><i data-feather="grid"></i><span data-i18n="agGrid Table">agGrid Table</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i data-feather="file-text"></i><span data-i18n="Pages">Pages</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Authentication"><i data-feather="unlock"></i><span data-i18n="Authentication">Authentication</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-auth-login-v1.html" data-toggle="dropdown" data-i18n="LoginV1" target="_blank"><i data-feather="circle"></i><span data-i18n="LoginV1">Login v1</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-auth-login-v2.html" data-toggle="dropdown" data-i18n="LoginV2" target="_blank"><i data-feather="circle"></i><span data-i18n="LoginV2">Login v2</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-auth-register-v1.html" data-toggle="dropdown" data-i18n="RegisterV1" target="_blank"><i data-feather="circle"></i><span data-i18n="RegisterV1">Register v1</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-auth-register-v2.html" data-toggle="dropdown" data-i18n="RegisterV2" target="_blank"><i data-feather="circle"></i><span data-i18n="RegisterV2">Register v2</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-auth-forgot-password-v1.html" data-toggle="dropdown" data-i18n="ForgotPasswordV1" target="_blank"><i data-feather="circle"></i><span data-i18n="ForgotPasswordV1">Forgot Password v1</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-auth-forgot-password-v2.html" data-toggle="dropdown" data-i18n="ForgotPasswordV2" target="_blank"><i data-feather="circle"></i><span data-i18n="ForgotPasswordV2">Forgot Password v2</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-auth-reset-password-v1.html" data-toggle="dropdown" data-i18n="ResetPasswordV1" target="_blank"><i data-feather="circle"></i><span data-i18n="ResetPasswordV1">Reset Password v1</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-auth-reset-password-v2.html" data-toggle="dropdown" data-i18n="ResetPasswordV2" target="_blank"><i data-feather="circle"></i><span data-i18n="ResetPasswordV2">Reset Password v2</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-account-settings.html" data-toggle="dropdown" data-i18n="Account Settings"><i data-feather="settings"></i><span data-i18n="Account Settings">Account Settings</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-profile.html" data-toggle="dropdown" data-i18n="Profile"><i data-feather="user"></i><span data-i18n="Profile">Profile</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-faq.html" data-toggle="dropdown" data-i18n="FAQ"><i data-feather="help-circle"></i><span data-i18n="FAQ">FAQ</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-knowledge-base.html" data-toggle="dropdown" data-i18n="Knowledge Base"><i data-feather="info"></i><span data-i18n="Knowledge Base">Knowledge Base</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-pricing.html" data-toggle="dropdown" data-i18n="Pricing"><i data-feather="dollar-sign"></i><span data-i18n="Pricing">Pricing</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Blog"><i data-feather="clipboard"></i><span data-i18n="Blog">Blog</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-blog-list.html" data-toggle="dropdown" data-i18n="List"><i data-feather="circle"></i><span data-i18n="List">List</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-blog-detail.html" data-toggle="dropdown" data-i18n="Detail"><i data-feather="circle"></i><span data-i18n="Detail">Detail</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-blog-edit.html" data-toggle="dropdown" data-i18n="Edit"><i data-feather="circle"></i><span data-i18n="Edit">Edit</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Mail Template"><i data-feather="mail"></i><span data-i18n="Mail Template">Mail Template</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-welcome.html" data-toggle="dropdown" data-i18n="Welcome" target="_blank"><i data-feather="circle"></i><span data-i18n="Welcome">Welcome</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-reset-password.html" data-toggle="dropdown" data-i18n="Reset Password" target="_blank"><i data-feather="circle"></i><span data-i18n="Reset Password">Reset Password</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-verify-email.html" data-toggle="dropdown" data-i18n="Verify Email" target="_blank"><i data-feather="circle"></i><span data-i18n="Verify Email">Verify Email</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-deactivate-account.html" data-toggle="dropdown" data-i18n="Deactivate Account" target="_blank"><i data-feather="circle"></i><span data-i18n="Deactivate Account">Deactivate Account</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-invoice.html" data-toggle="dropdown" data-i18n="Invoice" target="_blank"><i data-feather="circle"></i><span data-i18n="Invoice">Invoice</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-promotional.html" data-toggle="dropdown" data-i18n="Promotional" target="_blank"><i data-feather="circle"></i><span data-i18n="Promotional">Promotional</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Miscellaneous"><i data-feather="file"></i><span data-i18n="Miscellaneous">Miscellaneous</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-misc-coming-soon.html" data-toggle="dropdown" data-i18n="Coming Soon" target="_blank"><i data-feather="circle"></i><span data-i18n="Coming Soon">Coming Soon</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-misc-not-authorized.html" data-toggle="dropdown" data-i18n="Not Authorized" target="_blank"><i data-feather="circle"></i><span data-i18n="Not Authorized">Not Authorized</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-misc-under-maintenance.html" data-toggle="dropdown" data-i18n="Maintenance" target="_blank"><i data-feather="circle"></i><span data-i18n="Maintenance">Maintenance</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="page-misc-error.html" data-toggle="dropdown" data-i18n="Error" target="_blank"><i data-feather="circle"></i><span data-i18n="Error">Error</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i data-feather="bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Charts"><i data-feather="pie-chart"></i><span data-i18n="Charts">Charts</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="chart-apex.html" data-toggle="dropdown" data-i18n="Apex"><i data-feather="circle"></i><span data-i18n="Apex">Apex</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="chart-chartjs.html" data-toggle="dropdown" data-i18n="Chartjs"><i data-feather="circle"></i><span data-i18n="Chartjs">Chartjs</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="maps-leaflet.html" data-toggle="dropdown" data-i18n="Leaflet Maps"><i data-feather="map"></i><span data-i18n="Leaflet Maps">Leaflet Maps</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i data-feather="box"></i><span data-i18n="Misc">Misc</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Menu Levels"><i data-feather="menu"></i><span data-i18n="Menu Levels">Menu Levels</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Second Level"><i data-feather="circle"></i><span data-i18n="Second Level">Second Level 2.1</span></a>
                                    </li>
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Second Level"><i data-feather="circle"></i><span data-i18n="Second Level">Second Level 2.2</span></a>
                                        <ul class="dropdown-menu">
                                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span data-i18n="Third Level">Third Level 3.1</span></a>
                                            </li>
                                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span data-i18n="Third Level">Third Level 3.2</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="disabled" data-menu=""><a class="dropdown-item d-flex align-items-center" href="" data-toggle="dropdown" data-i18n="Disabled Menu"><i data-feather="eye-off"></i><span data-i18n="Disabled Menu">Disabled Menu</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation" data-toggle="dropdown" data-i18n="Documentation" target="_blank"><i data-feather="folder"></i><span data-i18n="Documentation">Documentation</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="https://pixinvent.ticksy.com/" data-toggle="dropdown" data-i18n="Raise Support" target="_blank"><i data-feather="life-buoy"></i><span data-i18n="Raise Support">Raise Support</span></a>
                            </li>
                        </ul>
                    </li>
                </ul> 
-->
<!-- INICIO NOVA INTEGRAÇÃO -->
<div class="todo-app-menu">
    <div class="add-task">
        <!-- <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#new-task-modal"> -->
        <a href="/criarapi" >
            <button type="button" class="btn btn-primary btn-block" >
                Nova integração
            </button>
        </a>
    </div>
    <div class="sidebar-menu-list"></div>
</div>
<!-- FIM NOVA INTEGRAÇÃO -->


            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content todo-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-area-wrapper">
            
            <div class="content-right">
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <div class="body-content-overlay"></div>
                        <div class="todo-app-list">
                            <!-- Todo search starts -->
                            <div class="app-fixed-search d-flex align-items-center">
                                <div class="sidebar-toggle d-block d-lg-none ml-1">
                                    <i data-feather="menu" class="font-medium-5"></i>
                                </div>
                                <div class="d-flex align-content-center justify-content-between w-100">
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="todo-search" placeholder="Pesquisar" aria-label="Search..." aria-describedby="todo-search" />
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle hide-arrow mr-1" id="todoActions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-vertical" class="font-medium-2 text-body"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoActions">
                                        <a class="dropdown-item sort-asc" href="javascript:void(0)">Sort A - Z</a>
                                        <a class="dropdown-item sort-desc" href="javascript:void(0)">Sort Z - A</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Sort Assignee</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Sort Due Date</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Sort Today</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Sort 1 Week</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Sort 1 Month</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Todo search ends -->

                            <!-- Todo List starts -->
                            <div class="todo-task-list-wrapper list-group">
                                <ul class="todo-task-list media-list" id="todo-task-list">
                                    <li class="todo-item">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                    <span class="todo-title">Fix Responsiveness for new structure 💻</span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-primary">Team</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Aug 08</small>
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-4.jpg" alt="user-avatar" height="32" width="32" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                                        <label class="custom-control-label" for="customCheck2"></label>
                                                    </div>
                                                    <span class="todo-title">Plan a party for development team 🎁</span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-primary">Team</div>
                                                    <div class="badge badge-pill badge-light-danger">High</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Aug 30</small>
                                                <div class="avatar bg-light-warning">
                                                    <div class="avatar-content">MB</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck3" />
                                                        <label class="custom-control-label" for="customCheck3"></label>
                                                    </div>
                                                    <span class="todo-title">Hire 5 new Fresher or Experienced, frontend and backend developers </span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-info">Update</div>
                                                    <div class="badge badge-pill badge-light-warning">Medium</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Aug 28</small>
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="user-avatar" height="32" width="32" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item completed">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck4" checked />
                                                        <label class="custom-control-label" for="customCheck4"></label>
                                                    </div>
                                                    <span class="todo-title">Skype Tommy for project status & report</span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-danger">High</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Aug 18</small>
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="user-avatar" height="32" width="32" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck5" />
                                                        <label class="custom-control-label" for="customCheck5"></label>
                                                    </div>
                                                    <span class="todo-title">Send PPT with real-time reports</span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-warning">Medium</div>
                                                    <div class="badge badge-pill badge-light-success">Low</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Aug 22</small>
                                                <div class="avatar bg-light-danger">
                                                    <div class="avatar-content">LM</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck6" />
                                                        <label class="custom-control-label" for="customCheck6"></label>
                                                    </div>
                                                    <span class="todo-title">Submit quotation for Abid's ecommerce website and admin project </span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-primary">Team</div>
                                                    <div class="badge badge-pill badge-light-success">Low</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Aug 24</small>
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="user-avatar" height="32" width="32" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item completed">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck7" checked />
                                                        <label class="custom-control-label" for="customCheck7"></label>
                                                    </div>
                                                    <span class="todo-title">Reminder to mail clients for holidays</span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-primary">Team</div>
                                                    <div class="badge badge-pill badge-light-warning">Medium</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Aug 27</small>
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-4.jpg" alt="user-avatar" height="32" width="32" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck8" />
                                                        <label class="custom-control-label" for="customCheck8"></label>
                                                    </div>
                                                    <span class="todo-title">Refactor Code and fix the bugs and test it on server </span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-success">Low</div>
                                                    <div class="badge badge-pill badge-light-warning">Medium</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Aug 27</small>
                                                <div class="avatar bg-light-success">
                                                    <div class="avatar-content">KL</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck9" />
                                                        <label class="custom-control-label" for="customCheck9"></label>
                                                    </div>
                                                    <span class="todo-title">List out all the SEO resources and send it to new SEO team. </span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <small class="text-nowrap text-muted mr-1">Sept 15</small>
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="user-avatar" height="32" width="32" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck10" />
                                                        <label class="custom-control-label" for="customCheck10"></label>
                                                    </div>
                                                    <span class="todo-title">Finish documentation and make it live</span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-success">Low</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Aug 28</small>
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="user-avatar" height="32" width="32" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item completed">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck11" checked />
                                                        <label class="custom-control-label" for="customCheck11"></label>
                                                    </div>
                                                    <span class="todo-title">Pick up Nats from her school and drop at dance class😁 </span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <small class="text-nowrap text-muted mr-1">Aug 17</small>
                                                <div class="avatar bg-light-primary">
                                                    <div class="avatar-content">PK</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck12" />
                                                        <label class="custom-control-label" for="customCheck12"></label>
                                                    </div>
                                                    <span class="todo-title">Plan new dashboard design with design team for Google app store. </span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-info">Update</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Sept 02</small>
                                                <div class="avatar bg-light-danger">
                                                    <div class="avatar-content">LO</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck13" />
                                                        <label class="custom-control-label" for="customCheck13"></label>
                                                    </div>
                                                    <span class="todo-title">Conduct a mini awareness meeting regarding health care. </span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <small class="text-nowrap text-muted mr-1">Sept 05</small>
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-17.jpg" alt="user-avatar" height="32" width="32" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item completed">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck14" checked />
                                                        <label class="custom-control-label" for="customCheck14"></label>
                                                    </div>
                                                    <span class="todo-title">Test functionality of apps developed by dev team for enhancements. </span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-danger">High</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Sept 07</small>
                                                <div class="avatar bg-light-info">
                                                    <div class="avatar-content">VB</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck15" />
                                                        <label class="custom-control-label" for="customCheck15"></label>
                                                    </div>
                                                    <span class="todo-title">Answer the support tickets and close completed tickets. </span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-primary">Frontend</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Sept 12</small>
                                                <div class="avatar bg-light-success">
                                                    <div class="avatar-content">SW</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="todo-item">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck16" />
                                                        <label class="custom-control-label" for="customCheck16"></label>
                                                    </div>
                                                    <span class="todo-title">Meet Jane and ask for coffee ❤️</span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    <div class="badge badge-pill badge-light-info">Update</div>
                                                    <div class="badge badge-pill badge-light-warning">Medium</div>
                                                    <div class="badge badge-pill badge-light-success">Low</div>
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">Aug 10</small>
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="user-avatar" height="32" width="32" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="no-results">
                                    <h5>No Items Found</h5>
                                </div>
                            </div>
                            <!-- Todo List ends -->
                        </div>

                        <!-- Right Sidebar starts -->
                        <div class="modal modal-slide-in sidebar-todo-modal fade" id="new-task-modal">
                            <div class="modal-dialog sidebar-lg" style="width:50%">
                                <div class="modal-content p-0">
                                    <form id="form-modal-todo" class="todo-modal needs-validation invoice-repeater" novalidate onsubmit="return false">
                                        <div class="modal-header align-items-center mb-1">
                                            <h5 class="modal-title">Nova Integração</h5>
                                            <div class="todo-item-action d-flex align-items-center justify-content-between ml-auto">
                                                <span class="todo-item-favorite cursor-pointer mr-75"><i data-feather="star" class="font-medium-2"></i></span>
                                                <button type="button" class="close font-large-1 font-weight-normal py-0" data-dismiss="modal" aria-label="Close">
                                                    ×
                                                </button>
                                            </div>
                                        </div>
                                        <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                                            <div class="action-tags">
                                                <div class="form-group">
                                                    <label for="todoTitleAdd" class="form-label">URL</label>
                                                    <input type="text" id="todoTitleAdd" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="URL" />
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="form-label d-block">Metodo</label>
                                                    <select class="form-control" id="" name="task-assigned">
                                                        <option value="GET">GET</option>
                                                        <option value="POST">POST</option>
                                                        <option value="PUT">PUT</option>
                                                        <option value="DELETE">DELETE</option>

                                                    </select>

                                                </div>


                                                <div class="form-group">
                                                    <label for="" class="form-label d-block">Parâmetro</label>
                                                    <div data-repeater-list="invoice">
                                                        <div data-repeater-item>
                                                            <div class="row d-flex align-items-end">
                                                                <div class="col-md-4 col-12">
                                                                    <div class="form-group">
                                                                        <label for="itemname">Nome</label>
                                                                        <input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="Nome" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="itemname">Valor</label>
                                                                        <input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="Valor" />
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-2 col-12">
                                                                    <div class="form-group">
                                                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                                                            <i data-feather="x" class="mr-25"></i>
                                                                            <span>Delete</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="row"> -->
                                                    <!-- <div class="col-12"> -->
                                                        <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                                            <i data-feather="plus" class="mr-25"></i>
                                                            <span>Adicionar Parâmetro</span>
                                                        </button>
                                                    <!-- </div> -->
                                                <!-- </div>                                                 -->

                                            </div>
                                            <div class="form-group my-1">
                                                <button type="submit" class="btn btn-primary d-none add-todo-item mr-1">Add</button>
                                                <button type="button" class="btn btn-outline-secondary add-todo-item d-none" data-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <button type="button" class="btn btn-primary d-none update-btn update-todo-item mr-1">Update</button>
                                                <button type="button" class="btn btn-outline-danger update-btn d-none" data-dismiss="modal">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Right Sidebar ends -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->




@include('layouts.components.footer')