    <style>
        .main-content-wrapper .header-area {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            position: relative;
            z-index: 1;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 320px;
            flex: 0 0 320px;
            width: 320px;
            max-width: 320px;
            background-color: #fff;
            padding: 40px 10px 10px 72px;
        }
    </style>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="<?= base_url('assets/tmplts/') ?>img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="<?= base_url('assets/') ?>img/LOGO HMP.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <!-- <div class="logo">
                <a href="index.html"><img src="<?= base_url('assets/tmplts/') ?>img/core-img/logo.png" alt=""></a>
            </div> -->
            <div class="logo" style="margin-left:30px;">
                <a href="index.html"><img src="<?= base_url('assets/img/') ?>hmp.png" alt="" width="90px"></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="<?= $this->session->userdata('home_status') ?>"><a href="index.html">Home</a></li>
                    <li class="<?= $this->session->userdata('product_status') ?>"><a href="<?= base_url('Admin/product') ?>">Product</a></li>
                    <li><a href="http://studio.politekniklp3i-tasikmalaya.ac.id/" target="_blank">Peminjaman</a></li>
                    <li><a href="#">Keluar</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <!-- <div class="amado-btn-group mt-30 mb-100">
                <a href="#" class="btn amado-btn mb-15">%Discount%</a>
                <a href="#" class="btn amado-btn active">New this week</a>
            </div> -->
            <!-- Cart Menu -->
            <!-- <div class="cart-fav-search mb-100">
                <a href="cart.html" class="cart-nav"><img src="<?= base_url('assets/tmplts/') ?>img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
                <a href="#" class="fav-nav"><img src="<?= base_url('assets/tmplts/') ?>img/core-img/favorites.png" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="<?= base_url('assets/tmplts/') ?>img/core-img/search.png" alt=""> Search</a>
            </div> -->
            <!-- Social Button -->
            <!-- <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div> -->
        </header>
        <!-- Header Area End -->