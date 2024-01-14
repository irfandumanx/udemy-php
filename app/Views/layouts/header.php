<header class="rbt-header rbt-header-10">
    <div class="rbt-sticky-placeholder"></div>
    <div class="rbt-header-wrapper header-space-betwween header-sticky">
        <div class="container-fluid">
            <div class="mainbar-row rbt-navigation-center align-items-center">
                <div class="header-left rbt-header-content">
                    <div class="header-info">
                        <div class="logo">
                            <a href="<?php echo base_url()?>">
                                <img style="margin-right: 16px;" src="<?php echo base_url()?>assets/images/logo/logo.svg" alt="Udemy Logo">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a></a>
                                <!-- Start Mega Menu  -->
                                <div class="rbt-megamenu menu-skin-dark">
                                    <div class="wrapper">
                                        <div class="load-demo-btn text-center">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Mega Menu  -->
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header-right">

                    <!-- Navbar Icons -->
                    <ul class="quick-access">
                        <li class="access-icon">
                            <a class="search-trigger-active rbt-round-btn" href="#">
                                <i class="feather-search"></i>
                            </a>
                        </li>

                        <li class="access-icon rbt-mini-cart">
                            <a class="rbt-cart-sidenav-activation rbt-round-btn" href="#">
                                <i class="feather-shopping-cart"></i>
                            </a>
                        </li>

                        <li class="account-access rbt-user-wrapper d-none d-xl-block">
                            <a href="#"><i class="feather-user"></i><?php if (session()->has('userData')) echo session()->get('userData')['username']; else echo 'Giris Yapin';  ?></a>
                            <div class="rbt-user-menu-list-wrapper">
                                <div <?php if(!session()->has('userData')) echo "style='display:none;'"?> class="inner">
                                    <div class="rbt-admin-profile">
                                        <div class="admin-thumbnail">
                                            <img src="<?php if(isset(session()->get('userData')['photourl']) && session()->get('userData')['photourl'] !== null) echo base_url().'uploads/photos/'.session()->get('userData')['username'].'/'.session()->get('userData')['photourl']; else echo base_url().'assets/images/team/avatar.jpg'?>" alt="User Images">
                                        </div>
                                        <div class="admin-info">
                                            <span class="name"><?php if (session()->has('userData')) echo session()->get('userData')['name'] . ' ' . session()->get('userData')['surname']; ?></span>
                                            <a class="rbt-btn-link color-primary" href="profile.html">Profili Görüntüle</a>
                                        </div>
                                    </div>
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="instructor-dashboard.html">
                                                <i class="feather-home"></i>
                                                <span>Kontrol Paneli</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather-bookmark"></i>
                                                <span>Liste</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-enrolled-courses.html">
                                                <i class="feather-shopping-bag"></i>
                                                <span>Kurslar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-reviews.html">
                                                <i class="feather-star"></i>
                                                <span>Yorumlar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-my-quiz-attempts.html">
                                                <i class="feather-list"></i>
                                                <span>Sınav Denemeleri</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-order-history.html">
                                                <i class="feather-clock"></i>
                                                <span>Satın Alımlar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-quiz-attempts.html">
                                                <i class="feather-message-square"></i>
                                                <span>Soru & Cevap</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <hr class="mt--10 mb--10">
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="<?php echo base_url('settings') ?>">
                                                <i class="feather-settings"></i>
                                                <span>Ayarlar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() . 'auth/logout' ?>">
                                                <i class="feather-log-out"></i>
                                                <span>Çıkış</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="access-icon rbt-user-wrapper d-block d-xl-none">
                            <a class="rbt-round-btn" href="#"><i class="feather-user"></i></a>
                            <div class="rbt-user-menu-list-wrapper">
                                <div class="inner">
                                    <div class="rbt-admin-profile">
                                        <div class="admin-thumbnail">
                                            <img src="<?php if(isset(session()->get('userData')['photourl']) && session()->get('userData')['photourl'] !== null) echo base_url().'uploads/photos/'.session()->get('userData')['username'].'/'.session()->get('userData')['photourl']; else echo base_url().'assets/images/team/avatar.jpg'?>" alt="User Images">
                                        </div>
                                        <div class="admin-info">
                                            <span class="name"><?php if (session()->has('userData')) echo session()->get('userData')['name'] . ' ' . session()->get('userData')['surname']; ?></span>
                                            <a class="rbt-btn-link color-primary" href="profile.html">Profili Görüntüle</a>
                                        </div>
                                    </div>
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="instructor-dashboard.html">
                                                <i class="feather-home"></i>
                                                <span>Kontrol Paneli</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather-bookmark"></i>
                                                <span>Liste</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-enrolled-courses.html">
                                                <i class="feather-shopping-bag"></i>
                                                <span>Kurslar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-reviews.html">
                                                <i class="feather-star"></i>
                                                <span>Yorumlar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-my-quiz-attempts.html">
                                                <i class="feather-list"></i>
                                                <span>Sınav Denemeleri</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-order-history.html">
                                                <i class="feather-clock"></i>
                                                <span>Satın Alımlar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instructor-quiz-attempts.html">
                                                <i class="feather-message-square"></i>
                                                <span>Soru & Cevap</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <hr class="mt--10 mb--10">
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="<?php echo base_url('settings') ?>">
                                                <i class="feather-settings"></i>
                                                <span>Ayarlar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() . 'auth/logout' ?>">
                                                <i class="feather-log-out"></i>
                                                <span>Çıkış</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <div class="rbt-btn-wrapper d-none d-xl-block">
                        <a class="rbt-btn rbt-marquee-btn marquee-auto btn-border-gradient radius-round btn-sm hover-transform-none" href="#">
                            <span data-text="Eğitime Başla 😊">Eğitime Başla 😊</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Start Search Dropdown  -->
        <div class="rbt-search-dropdown">
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="What are you looking for?">
                            <div class="submit-btn">
                                <a class="rbt-btn btn-gradient btn-md" href="#">Search</a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="rbt-separator-mid">
                    <hr class="rbt-separator m-0">
                </div>

                <div class="row g-4 pt--30 pb--60">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h5 class="rbt-title-style-2">Our Top Course</h5>
                        </div>
                    </div>

                    <!-- Start Single Card  -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="<?php echo base_url()?>assets/images/course/course-online-01.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.html">React Js</a>
                                </h5>
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count"> (15 Reviews)</span>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$15</span>
                                        <span class="off-price">$25</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="<?php echo base_url()?>assets/images/course/course-online-02.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.html">Java Program</a>
                                </h5>
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count"> (15 Reviews)</span>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$10</span>
                                        <span class="off-price">$40</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="<?php echo base_url()?>assets/images/course/course-online-03.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.html">Web Design</a>
                                </h5>
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count"> (15 Reviews)</span>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$10</span>
                                        <span class="off-price">$20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="course-details.html">
                                    <img src="<?php echo base_url()?>assets/images/course/course-online-04.jpg" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="course-details.html">Web Design</a>
                                </h5>
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count"> (15 Reviews)</span>
                                </div>
                                <div class="rbt-card-bottom">
                                    <div class="rbt-price">
                                        <span class="current-price">$20</span>
                                        <span class="off-price">$40</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                </div>

            </div>
        </div>
        <!-- End Search Dropdown  -->
    </div>
    <div class="rbt-offcanvas-side-menu rbt-category-sidemenu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="inner-title">
                    <h4 class="title">Course Category</h4>
                </div>
                <div class="rbt-btn-close">
                    <button class="rbt-close-offcanvas rbt-round-btn"><i class="feather-x"></i></button>
                </div>
            </div>
            <nav class="side-nav w-100">
                <ul class="rbt-vertical-nav-list-wrapper vertical-nav-menu">
                    <li class="vertical-nav-item">
                        <a href="#">Course School</a>
                        <div class="vartical-nav-content-menu-wrapper">
                            <div class="vartical-nav-content-menu">
                                <h3 class="rbt-short-title">Course Title</h3>
                                <ul class="rbt-vertical-nav-list-wrapper">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Figma</a></li>
                                    <li><a href="#">Adobe</a></li>
                                </ul>
                            </div>
                            <div class="vartical-nav-content-menu">
                                <h3 class="rbt-short-title">Course Title</h3>
                                <ul class="rbt-vertical-nav-list-wrapper">
                                    <li><a href="#">Photo</a></li>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Math</a></li>
                                    <li><a href="#">Read</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="vertical-nav-item">
                        <a href="#">Online School</a>
                        <div class="vartical-nav-content-menu-wrapper">
                            <div class="vartical-nav-content-menu">
                                <h3 class="rbt-short-title">Course Title</h3>
                                <ul class="rbt-vertical-nav-list-wrapper">
                                    <li><a href="#">Photo</a></li>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Math</a></li>
                                    <li><a href="#">Read</a></li>
                                </ul>
                            </div>
                            <div class="vartical-nav-content-menu">
                                <h3 class="rbt-short-title">Course Title</h3>
                                <ul class="rbt-vertical-nav-list-wrapper">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Figma</a></li>
                                    <li><a href="#">Adobe</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="vertical-nav-item">
                        <a href="#">kindergarten</a>
                        <div class="vartical-nav-content-menu-wrapper">
                            <div class="vartical-nav-content-menu">
                                <h3 class="rbt-short-title">Course Title</h3>
                                <ul class="rbt-vertical-nav-list-wrapper">
                                    <li><a href="#">Photo</a></li>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Math</a></li>
                                    <li><a href="#">Read</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="vertical-nav-item">
                        <a href="#">Classic LMS</a>
                        <div class="vartical-nav-content-menu-wrapper">
                            <div class="vartical-nav-content-menu">
                                <h3 class="rbt-short-title">Course Title</h3>
                                <ul class="rbt-vertical-nav-list-wrapper">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Figma</a></li>
                                    <li><a href="#">Adobe</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="read-more-btn">
                    <div class="rbt-btn-wrapper mt--20">
                        <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="#">
                            <span>Learn More</span>
                        </a>
                    </div>
                </div>
            </nav>
            <div class="rbt-offcanvas-footer">
            </div>
        </div>
    </div>
    <a class="rbt-close_side_menu" href="javascript:void(0);"></a>
</header>
<div class="rbt-cart-side-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="title">
                    <h4 class="title mb--0">Your shopping cart</h4>
                </div>
            </div>
        </div>
        <nav class="side-nav w-100">
            <ul class="rbt-minicart-wrapper">
                <li class="minicart-item">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="<?php echo base_url()?>assets/images/product/1.jpg" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <h6 class="title"><a href="single-product.html">Miracle Morning</a></h6>

                        <span class="quantity">1 * <span class="price">$22</span></span>
                    </div>
                    <div class="close-btn">
                        <button class="rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </li>

                <li class="minicart-item">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="<?php echo base_url()?>assets/images/product/7.jpg" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <h6 class="title"><a href="single-product.html">Happy Strong</a></h6>

                        <span class="quantity">1 * <span class="price">$30</span></span>
                    </div>
                    <div class="close-btn">
                        <button class="rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </li>

                <li class="minicart-item">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="<?php echo base_url()?>assets/images/product/3.jpg" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <h6 class="title"><a href="single-product.html">Rich Dad Poor Dad</a></h6>

                        <span class="quantity">1 * <span class="price">$50</span></span>
                    </div>
                    <div class="close-btn">
                        <button class="rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </li>

                <li class="minicart-item">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="<?php echo base_url()?>assets/images/product/4.jpg" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <h6 class="title"><a href="single-product.html">Momentum Theorem</a></h6>

                        <span class="quantity">1 * <span class="price">$50</span></span>
                    </div>
                    <div class="close-btn">
                        <button class="rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="rbt-minicart-footer">
            <hr class="mb--0">
            <div class="rbt-cart-subttotal">
                <p class="subtotal"><strong>Subtotal:</strong></p>
                <p class="price">$121</p>
            </div>
            <hr class="mb--0">
            <div class="rbt-minicart-bottom mt--20">
                <div class="view-cart-btn">
                    <a class="rbt-btn btn-border icon-hover w-100 text-center" href="#">
                        <span class="btn-text">View Cart</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </a>
                </div>
                <div class="checkout-btn mt--20">
                    <a class="rbt-btn btn-gradient icon-hover w-100 text-center" href="#">
                        <span class="btn-text">Checkout</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<a class="close_side_menu" href="javascript:void(0);"></a>