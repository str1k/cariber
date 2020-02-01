@extends('master_trax')
@section('content')
<!-- header -->
<header class="site-header">
    <nav class="navbar navbar-expand-lg padding-nav static-nav">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="logo">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item dropdown static">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Home </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <a class="dropdown-item" href="index.html">Standard Version</a>
                                            <a class="dropdown-item" href="index-creative-agency.html">Creative Agency</a>
                                            <a class="dropdown-item" href="index-light.html">Classic Light</a>
                                            <a class="dropdown-item" href="index-video.html">Video Background</a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <a class="dropdown-item" href="index-modern-agency.html">Modern Agency</a>
                                            <a class="dropdown-item" href="index-classic-startup.html">Classic Startup</a>
                                            <a class="dropdown-item" href="index-flat.html">Flat Version</a>
                                            <a class="dropdown-item" href="index-innovative.html">Innovative Layout</a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <a class="dropdown-item" href="index-one-page.html">One Page Layout</a>
                                            <a class="dropdown-item" href="index-center-logo.html">Center Logo</a>
                                            <a class="dropdown-item" href="index-bottom-nav.html">Bottom Nav</a>
                                            <a class="dropdown-item" href="index-gray.html">Minimal Gray</a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <a class="dropdown-item" href="index-parallax.html">Parallax Version</a>
                                            <a class="dropdown-item" href="index-interactive-classic.html">Interactive Classic</a>
                                            <a class="dropdown-item" href="index-design-studio.html">Design Studio</a>
                                            <a class="dropdown-item" href="index-particles.html">Interactive Particles</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.html">About</a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pages </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <h5 class="dropdown-title bottom10"> General </h5>
                                            <a class="dropdown-item active" href="about.html">About Us</a>
                                            <a class="dropdown-item" href="services.html">Services</a>
                                            <a class="dropdown-item" href="services-detail.html">Service Detail</a>
                                            <a class="dropdown-item" href="testimonial.html">Testimonials</a>
                                            <a class="dropdown-item" href="contact.html">Contact Us</a>
                                            <a class="dropdown-item" href="team.html">Our Team</a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <h5 class="dropdown-title opacity-10"> Others </h5>
                                            <a class="dropdown-item" href="gallery.html">Gallery</a>
                                            <a class="dropdown-item" href="gallery-detail.html">Gallery Detail</a>
                                            <a class="dropdown-item" href="pricing.html">Pricing</a>
                                            <a class="dropdown-item" href="404.html">404 Error</a>
                                            <a class="dropdown-item" href="faq.html">FAQ's</a>
                                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <h5 class="dropdown-title bottom10"> Account </h5>
                                            <a class="dropdown-item" href="login.html">Login</a>
                                            <a class="dropdown-item" href="register.html">Register</a>
                                            <a class="dropdown-item" href="forget-password.html">Reset Password</a>
                                            <a class="dropdown-item" href="support.html">Support</a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <h5 class="dropdown-title bottom10"> Shop Pages </h5>
                                            <a class="dropdown-item" href="shop.html">Shop</a>
                                            <a class="dropdown-item" href="shop-detail.html">Shop Detail</a>
                                            <a class="dropdown-item" href="shop-cart.html">Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Blog </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="blog-1.html">Blog Layout 1</a>
                            <a class="dropdown-item" href="blog-2.html">Blog Layout 2</a>
                            <a class="dropdown-item" href="blog-detail.html">Blog Layout 3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <ul class="social-icons social-icons-simple d-lg-inline-block d-none animated fadeInUp" data-wow-delay="300ms">
                <li><a href="#."><i class="fab fa-facebook-f"></i> </a> </li>
                <li><a href="#."><i class="fab fa-twitter"></i> </a> </li>
                <li><a href="#."><i class="fab fa-linkedin-in"></i> </a> </li>
            </ul>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span class="gradient-bg"></span> <span class="gradient-bg"></span> <span class="gradient-bg"></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages1">
                            Home <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages1" class="collapse sideNavPages">
                            <ul class="navbar-nav mt-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Standard Version</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-creative-agency.html">Creative Agency</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-light.html">Classic Light</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-video.html">Video Background</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-modern-agency.html">Modern Agency</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-classic-startup.html">Classic Startup</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-flat.html">Flat Version</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-innovative.html">Innovative Layout</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-one-page.html">One Page Layout</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-center-logo.html">Center Logo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-bottom-nav.html">Bottom Nav</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-gray.html">Minimal Gray</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-parallax.html">Parallax Version</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-interactive-classic.html">Interactive Classic</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-design-studio.html">Design Studio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-particles.html">Interactive Particles</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages">
                            Pages <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages" class="collapse sideNavPages">
                            <ul class="navbar-nav mt-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="team.html">Our Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services.html">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services-detail.html">Service Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="testimonial.html">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery-detail.html">Gallery Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pricing.html">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="faq.html">FAQ's</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="404.html">Error 404</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="coming-soon.html">Coming Soon</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#inner-2">
                                        Account <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <div id="inner-2" class="collapse sideNavPages sideNavPagesInner">
                                        <ul class="navbar-nav mt-2">
                                            <li class="nav-item">
                                                <a class="nav-link" href="login.html">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="register.html">Register</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="forget-password.html">Forget Password</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="support.html">Support</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#inner-1">
                                        Shops <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <div id="inner-1" class="collapse sideNavPages sideNavPagesInner">
                                        <ul class="navbar-nav mt-2">
                                            <li class="nav-item">
                                                <a class="nav-link" href="shop.html">Shop Products</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="shop-detail.html">Shop Detail</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="shop-cart.html">Shop Cart</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages2">
                            Blogs <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages2" class="collapse sideNavPages">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="blog-1.html">Blog 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog-2.html">Blog 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog-detail.html">Blog Details</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
                <p class="whitecolor">&copy; <span id="year"></span> Trax. Made With Love by ThemesIndustry</p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header -->
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">A New Idea</h2>
                    <h2 class="font-bold">Inspires Us To Make</h2>
                    <h2 class="font-xlight">Great Works</h2>
                    <h3 class="font-light pt-2">The Best Multipurpose Template In Market</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">About Our Company</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item hover-light">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- About us -->
<section id="aboutus" class="padding_top padding_bottom">
    <div class="container aboutus">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 padding_bottom_half">
                <div class="image"><img alt="SEO" src="images/aboutus.png"></div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6 padding_bottom_half text-center text-md-left">
                <h2 class="darkcolor font-normal bottom30">Lets take your <span class="defaultcolor">Business</span> to Next Level</h2>
                <p class="bottom35">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus. </p>
                <a href="#our-team" class="button btnsecondary gradient-btn pagescroll">Learn More</a>
            </div>
        </div>
        <div class="row  align-items-center">
            <div class="col-lg-5  col-md-6 padding_top_half text-center text-md-left">
                <h2 class="darkcolor font-normal bottom30">The Best Skillset Available in <span class="defaultcolor">Our Market</span> </h2>
                <p class="bottom35">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus. </p>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6 padding_top_half">
                <div class="progress-bars">
                    <div class="progress">
                        <p>Adobe Photoshop</p>
                        <div class="progress-bar gradient-bg" data-value="94">
                            <span class="gradient-bg whitecolor">94%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <p>HTML / WordPress</p>
                        <div class="progress-bar gradient-bg" data-value="92">
                            <span class="gradient-bg whitecolor">92%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <p>Development</p>
                        <div class="progress-bar gradient-bg" data-value="86">
                            <span class="gradient-bg whitecolor">86%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About us ends -->
<!-- WOrk Process-->
<section id="our-process" class="padding bgdark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                    <span>Quisque tellus risus, adipisci </span>
                    <h2 class="font-normal">Our Work Process </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="process-wrapp">
                <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                    <span class="pro-step bottom20">01</span>
                    <p class="fontbold bottom25">Concept</p>
                    <p>Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                    <span class="pro-step bottom20">02</span>
                    <p class="fontbold bottom25">Plan</p>
                    <p>Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="500ms">
                    <span class="pro-step bottom20">03</span>
                    <p class="fontbold bottom25">Design</p>
                    <p>Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                    <span class="pro-step bottom20">04</span>
                    <p class="fontbold bottom25">Development</p>
                    <p>Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                    <span class="pro-step bottom20">05</span>
                    <p class="fontbold bottom25">Quality Check</p>
                    <p>Quisque tellus risus, adipisci viverra bibendum urna.</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--WOrk Process ends-->
<!-- Our Team-->
<section id="our-team" class="padding_top half-section-alt teams-border">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="heading-title wow fadeInUp text-center text-md-left" data-wow-delay="300ms">
                    <span class="defaultcolor">Quisque tellus risus, adipisci</span>
                    <h2 class="darkcolor bottom30 font-normal">Meet Our Experts</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-left">
                <p class="heading_space">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="ourteam-slider" class="owl-carousel">
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/team-1.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Twain</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/team-2.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jason Wudex </h4>
                                <p>Designer</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box single">
                            <div class="image">
                                <img src="images/team-3.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Twain</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/team-4.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Hayden Wood</h4>
                                <p>Marketing</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/team-1.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Shania Jackson </h4>
                                <p>Print Media</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/team-2.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Twain</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box">
                            <div class="image">
                                <img src="images/team-3.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Twain</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Team ends-->
<!-- Partners-->
<section id="our-partners" class="padding_top padding_bottom bglight">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h2 class="d-none">Carousel Is Here</h2>
                <div id="partners-slider" class="owl-carousel">
                    <div class="item">
                        <div class="logo-item"> <img alt="" src="images/logo-1.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/logo-2.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/logo-3.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/logo-4.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/logo-5.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/logo-1.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/logo-2.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/logo-3.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/logo-4.png"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="images/logo-5.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partners ends-->
@stop