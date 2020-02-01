@extends('master_trax')
@section('content')
<!-- header -->
<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg transparent-bg darkcolor static-nav">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="logo" class="logo-default">
                <img src="images/logo.png" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item dropdown static">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pages </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <h5 class="dropdown-title bottom10"> General </h5>
                                            <a class="dropdown-item" href="about.html">About Us</a>
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
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span class="bg-dark"></span> <span class="bg-dark"></span> <span class="bg-dark"></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
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
                                    <a class="nav-link active" href="index-innovative.html">Innovative Layout</a>
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
                        <a class="nav-link" href="about.html">About</a>
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
<!--Main Slider-->
<!--slider-->
<section id="home" class="p-0 dark-slider single-slide">
    <h2 class="d-none">hidden</h2>
    <div id="rev_single_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="trax_slider_01">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_single" class="rev_slider fullwidthabanner" data-version="5.4.8.1">
            <ul>
                <!-- slide -->
                <li data-index="rs-layers" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- main image -->
                    <img src="images/transparent-bg.png" data-bgcolor="#e0e0e0" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- layers -->
                    <!-- layer nr. 1 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-12 z-index-5 border-0"
                         id="layers-one"
                         data-x="['left','left','left','left']" data-hoffset="['-200','-200','-200','-150']"
                         data-y="['top','top','top','top']" data-voffset="['70','70','60','55']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="image"
                         data-basealign="slide"
                         data-responsive_offset="on"
                         data-frames='[{"from":"x:left;rZ:-90deg;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        <img src="images/top-left.png" alt="" data-ww="['650px','600px','650px','450px']" data-hh="['500px','450px','500px','300px']" data-no-retina>
                    </div>
                    <!-- layer nr. 2 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-15 z-index-6 border-0"
                         id="layers-two"
                         data-x="['right','right','right','right']" data-hoffset="['-5','-30','-90','-120']"
                         data-y="['top','top','top','top']" data-voffset="['-40','-40','-40','-40']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="image"
                         data-basealign="slide"
                         data-responsive_offset="on"
                         data-frames='[{"from":"x:right;y:-500px;rZ:90deg;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        <img src="images/top-right.png" alt="" data-ww="['550px','550px','550px','450px']" data-hh="['471px','471px','471px','371px']" data-no-retina>
                    </div>
                    <!-- layer nr. 3 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-10 z-index-7 border-0"
                         id="layers-three"
                         data-x="['left','left','left','left']" data-hoffset="['-392','-392','-540','-638']"
                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-484','-484','-520','-522']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="image"
                         data-basealign="slide"
                         data-responsive_offset="on"
                         data-frames='[{"from":"x:left;rZ:45deg;","speed":2500,"to":"o:1;","delay":650,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        <img src="images/papers.png" alt="" data-ww="['900px','900px','900px','900px']" data-hh="['1000px','1000px','1000px','1000px']" data-no-retina>
                    </div>
                    <!-- layer nr. 4 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-12 z-index-8 border-0"
                         id="layers-four"
                         data-x="['left','left','left','left']" data-hoffset="['134','134','-2','-40']"
                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['67','67','50','-40']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="image"
                         data-basealign="slide"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:bottom;rZ:90deg;","speed":1500,"to":"o:1;","delay":1050,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        <img src="images/pencil.png" alt="" data-ww="['200px','200px','200px','150px']" data-hh="['300px','300px','300px','250px']" data-no-retina>
                    </div>
                    <!-- layer nr. 5 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-15 z-index-9 border-0"
                         id="layers-five"
                         data-x="['left','left','left','left']" data-hoffset="['181','181','30','-20']"
                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-170','-170','-190','-90']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="image"
                         data-basealign="slide"
                         data-responsive_offset="on"
                         data-frames='[{"from":"y:bottom;rZ:-90deg;","speed":1500,"to":"o:1;","delay":1250,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        <img src="images/header-edding.png" alt="" data-ww="['300px','300px','300px','250px']" data-hh="['400px','400px','400px','300px']" data-no-retina>
                    </div>
                    <!-- layer nr. 8 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-11 z-index-12"
                         id="layers-six"
                         data-x="['right','right','right','right']" data-hoffset="['-78','-100','-200','-130']"
                         data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-35','-50','-60','-90']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="image"
                         data-basealign="slide"
                         data-responsive_offset="on"
                         data-frames='[{"from":"x:right;rZ:-65deg;","speed":1500,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">
                        <img src="images/bottom-right.png" alt="" data-ww="['520px','520px','520px','400px']" data-hh="['520px','520px','520px','400px']" data-no-retina>
                    </div>
                    <div class="tp-caption tp-resizeme z-index-15"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-140','-140','-140','-130']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-start="1000" data-splitin="none" data-splitout="none">
                        <h2 class="font-xlight">We're Design Master</h2>
                    </div>
                    <div class="tp-caption tp-resizeme z-index-15"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-44','-44','-40','-40']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-start="900" data-splitin="none" data-splitout="none">
                        <h2 class="font-bold">Believes In</h2>
                    </div>
                    <div class="tp-caption tp-resizeme z-index-15"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['45','45','45','45']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']" data-fontsize="['24','24','20','20']"
                         data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-start="1600" data-splitin="none" data-splitout="none">
                        <h2 class="font-xlight">A Great Innovation</h2>
                    </div>
                    <div class="tp-caption tp-resizeme z-index-15"
                         data-x="['center','center','center','center']" data-hoffset="['10','10','10','10']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['140','140','140','140']"
                         data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="1800" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a class="transition-3 button btn-primary button-padding font-13" href="javascript:void(0)">Learn More</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <!--scroll down-->
    <a href="#our-feature" class="scroll-down pagescroll darkcolor hover-default">Scroll Down <i class="fas fa-long-arrow-alt-down"></i></a>
</section>
<!--slider end-->

<!-- Testimonials -->
<section id="our-testimonial" class="bglight padding_bottom">
    <div class="parallax page-header testimonial-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 col-md-12 text-center text-lg-right">
                    <div class="heading-title wow fadeInUp padding_testi" data-wow-delay="300ms">
                        <span class="whitecolor">Quisque tellus risus, adipisci</span>
                        <h2 class="whitecolor font-normal">What People Say</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="owl-carousel" id="testimonial-slider">
            <!--item 1-->
            <div class="item testi-box no-rounded">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="images/testimonial-1.jpg" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">John Smith</a></h4>
                        <p>UPWORK, New York</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">We have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we boast a years and years of service.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
            <!--item 2-->
            <div class="item testi-box no-rounded">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="images/testimonial-2.jpg" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">Hayden Wood</a></h4>
                        <p>FIVERR, Italy</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">Trax’s customer testimonial page is another beauty. Its simple design focuses on videos and standout quotes from customers. This approach is clean, straightforward, text that can be overwhelming and easy to skip.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="far fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
            <!--item 3-->
            <div class="item testi-box no-rounded">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="images/testimonial-3.jpg" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">Kevin Miller</a></h4>
                        <p>ENVATO, Australia</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">Trax is a company that provides tools to help professional event planning and execution, and their customers are very happy folks! The thing I love about their customer testimonial page provides content formats.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
            <!--item 4-->
            <div class="item testi-box no-rounded">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="images/testimonial-4.jpg" alt="">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">Alina Johanson</a></h4>
                        <p>INTEL, Sidney</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-left text-center">
                        <p class="bottom15 top90">Startup Institute is a career accelerator that allows professionals to learn new skills, take their careers in a different direction, and pursue a career they are passionate about that have completed the program.</p>
                        <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i> <i class="far fa-star"></i>
                                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonials Ends-->
<!-- Mobile Apps -->
<section id="our-apps" class="padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-12">
                <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <span class="defaultcolor text-center text-md-left">Quisque tellus risus, adipisci viverra</span>
                    <h2 class="darkcolor font-normal text-center text-md-left">Mobile App Designs</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-center text-md-left">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. </p>
            </div>
        </div>
        <div class="row d-flex align-items-center" id="app-feature">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="text-center">
                    <div class="feature-item mt-3 wow fadeInLeft innovative-border arr-left" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
                        <div class="icon"><i class="fas fa-cog"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Theme Options</span>
                            </h3>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                    <div class="feature-item mt-5 wow fadeInLeft innovative-border arr-left" data-wow-delay="350ms" style="visibility: visible; animation-delay: 350ms; animation-name: fadeInLeft;">
                        <div class="icon"><i class="fas fa-edit"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Customization</span>
                            </h3>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="app-image top30">
                    <div class="app-slider-lock-btn"></div>
                    <div class="app-slider-lock">
                        <img src="images/iphone-slide-lock.jpg" alt="">
                    </div>
                    <div id="app-slider" class="owl-carousel owl-theme owl-loaded owl-drag">



                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-470px, 0px, 0px); transition: all 0s ease 0s; width: 1645px;"><div class="owl-item cloned" style="width: 235px;"><div class="item">
                            <img src="images/iphone-slide2.jpg" alt="">
                        </div></div><div class="owl-item cloned" style="width: 235px;"><div class="item">
                            <img src="images/iphone-slide3.jpg" alt="">
                        </div></div><div class="owl-item active" style="width: 235px;"><div class="item">
                            <img src="images/iphone-slide1.jpg" alt="">
                        </div></div><div class="owl-item" style="width: 235px;"><div class="item">
                            <img src="images/iphone-slide2.jpg" alt="">
                        </div></div><div class="owl-item" style="width: 235px;"><div class="item">
                            <img src="images/iphone-slide3.jpg" alt="">
                        </div></div><div class="owl-item cloned" style="width: 235px;"><div class="item">
                            <img src="images/iphone-slide1.jpg" alt="">
                        </div></div><div class="owl-item cloned" style="width: 235px;"><div class="item">
                            <img src="images/iphone-slide2.jpg" alt="">
                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                    <img src="images/iphone.png" alt="image">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="text-center">
                    <div class="feature-item mt-3 wow fadeInRight innovative-border arr-right" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
                        <div class="icon"><i class="fas fa-code"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Powerful Code</span>
                            </h3>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                    <div class="feature-item mt-5 wow fadeInRight innovative-border arr-right" data-wow-delay="350ms" style="visibility: visible; animation-delay: 350ms; animation-name: fadeInRight;">
                        <div class="icon"><i class="far fa-folder-open"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Documentation </span>
                            </h3>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Mobile Apps ends-->
<!--Pricing Start-->
<section id="pricing" class="padding bglight">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title darkcolor wow fadeInUp" data-wow-delay="300ms">
                    <span class="defaultcolor">Quisque tellus risus, adipisci </span>
                    <h2 class="font-normal bottom40"> Pricing Offers </h2>
                </div>
            </div>
            <div class="col-12 text-center ">
                <div class="price-toggle-wrapper heading_space">
                    <span class="Pricing-toggle-button month active">Monthly</span>
                    <span class="Pricing-toggle-button year">Yearly</span>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme no-dots" id="price-slider">
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="300ms" data-sale="60">
                        <h3 class="font-light darkcolor">Basic</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$9.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li class="price-not">40MB of storage space</li>
                            <li class="price-not">Social media integration</li>
                            <li class="price-not">10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item sale wow fadeInUp animated" data-wow-delay="380ms" data-sale="40">
                        <h3 class="font-light darkcolor">Popular</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$19.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li>40MB of storage space</li>
                            <li class="price-not">Social media integration</li>
                            <li class="price-not">10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="460ms" data-sale="30">
                        <h3 class="font-light darkcolor">Enterprise</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$29.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li>40MB of storage space</li>
                            <li>Social media integration</li>
                            <li class="price-not">10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated sale" data-wow-deeay="400ms" data-sale="20">
                        <h3 class="font-light darkcolor">Ultimate</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$49.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li>40MB of storage space</li>
                            <li>Social media integration</li>
                            <li>10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Pricing ends-->
@stop