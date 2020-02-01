<!-- header -->
<header class="site-header">
    <nav class="navbar navbar-expand-lg padding-nav static-nav">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="logo">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto mr-auto">
                <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about">About</a>
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
    @include('partials/_mobileside')
</header>
<!-- header -->