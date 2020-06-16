<div class="main-header d-none d-lg-block">
    <!-- header top start -->
    <div class="header-top p-0 black-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="header-social-link">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-9 d-flex justify-content-end">
                            <div class="top-left-navigation pl-0">
                                <ul class="nav align-items-center">
                                    <li class="language">
                                        <img src="shop/assets/img/icon/en.png" alt="flag"> English
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list">
                                            <li><a href="#"><img src="shop/assets/img/icon/en.png" alt="flag"> English</a></li>
                                            <li><a href="#"><img src="shop/assets/img/icon/fr.png" alt="flag"> French</a></li>
                                        </ul>
                                    </li>
                                    <li class="curreny-wrap">
                                        $ Currency
                                        <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list curreny-list">
                                            <li><a href="#">$ USD</a></li>
                                            <li><a href="#">€ EURO</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <ul class="user-info-block">
                                <li><a href="my-account.html"><i class="fa fa-user-circle"></i> My Account</a></li>
                                <li><a href="checkout.html"><i class="fa fa-credit-card"></i> Checkout</a></li>
                                <li><a href="login-register.html"><i class="fa fa-sign-in"></i> Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->

    <!-- header middle area start -->
    <div class="header-middle-area p-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="white-bg">
                        <div class="row">
                            <!-- start logo area -->
                            <div class="col-lg-4">
                                <div class="logo-2">
                                    <a href="/">
                                        <img src="shop/assets/img/logo/logo-2.png" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                            <!-- start logo area -->

                            <!-- mini cart area start -->
                            <div class="col-lg-8">
                                <div class="header-right">
                                    <div class="header-configure-area">
                                        <ul class="nav justify-content-between">
                                            <li class="header-call d-flex align-items-center">
                                                <div class="call-icon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <span>PHONE:<a href="tel:+880123456789">+88 0123456789</a></span>
                                            </li>
                                            <li class="search-wrapper-inner">
                                                <form action="{{ route('shop.search') }}" method="GET" class="search-box-2">
                                                    <input type="text" class="search-field-2" name="tu-khoa" placeholder="Nhập từ khóa tìm kiếm" value="{{ isset($keyword) ? $keyword : '' }}">
                                                    <button type="submit" class="search-btn-2"><i class="fa fa-search"></i></button>
                                                </form>
                                            </li>
                                            <li class="mini-cart-wrap">
                                                <a href="#" class="minicart-btn minicart-btn-style_2">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span class="notification">2</span>
                                                </a>
                                                <div class="cart-list-wrapper">
                                                    <ul class="cart-list">
                                                        <li>
                                                            <div class="cart-img">
                                                                <a href="product-details.html"><img src="shop/assets/img/cart/cart-1.jpg" alt=""></a>
                                                            </div>
                                                            <div class="cart-info">
                                                                <h6 class="product-name"><a href="product-details.html">7th Generation classic</a></h6>
                                                                <span class="cart-qty">Qty: 1</span>
                                                                <span class="item-price">$60.00</span>
                                                            </div>
                                                            <div class="del-icon">
                                                                <i class="fa fa-times"></i>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="cart-img">
                                                                <a href="product-details.html"><img src="shop/assets/img/cart/cart-2.jpg" alt=""></a>
                                                            </div>
                                                            <div class="cart-info">
                                                                <h6 class="product-name"><a href="product-details.html">Digital 8th generation</a></h6>
                                                                <span class="cart-qty">Qty: 2</span>
                                                                <span class="item-price">$70.00</span>
                                                            </div>
                                                            <div class="del-icon">
                                                                <i class="fa fa-times"></i>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="minicart-pricing-box">
                                                        <li>
                                                            <span>Sub-Total</span>
                                                            <span><strong>$300.00</strong></span>
                                                        </li>
                                                        <li>
                                                            <span>Eco Tax (-2.00)</span>
                                                            <span><strong>$10.00</strong></span>
                                                        </li>
                                                        <li>
                                                            <span>VAT (20%)</span>
                                                            <span><strong>$60.00</strong></span>
                                                        </li>
                                                        <li class="total">
                                                            <span>Total</span>
                                                            <span><strong>$370.00</strong></span>
                                                        </li>
                                                    </ul>
                                                    <div class="minicart-button">
                                                        <a href="cart.html"><i class="fa fa-shopping-cart"></i> View Cart</a>
                                                        <a href="cart.html"><i class="fa fa-share"></i> Checkout</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- mini cart area end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header middle area end -->
</div>
