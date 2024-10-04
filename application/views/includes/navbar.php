<style>
    .main-content-wrapper .header-area .amado-nav li a::after {
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        width: 30px;
        height: 3px;
        position: absolute;
        top: 50%;
        margin-top: -1.5px;
        left: -150px;
        background-color: #e91327;
        z-index: 10;
        content: '';
    }
</style>
<body>
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
                            <button type="submit"><img src="../assets/img/prodi.png" alt=""></button>
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
                <a href="index.html"><img src="../assets/img/prodi.png" alt=""></a>
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
            <div class="logo">
                <a href="index.html"><img src="../assets/img/prodi.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class=""><a href="<?= base_url('Visitor/index') ?>">Home</a></li>
                    <li class="<?= $this->session->userdata('documentation') ?>"><a href="<?= base_url('Visitor/documentation') ?>">Documentation</a></li>
                    <li class="<?= $this->session->userdata('work') ?>"><a href="<?= base_url('Visitor/work') ?>">Work</a></li>
                    <li class="<?= $this->session->userdata('vport') ?>"><a href="<?= base_url('Visitor/vport') ?>">Video Portrait</a></li>
                    <li class="<?= $this->session->userdata('vlan') ?>"><a href="<?= base_url('Visitor/vlan') ?>">Video Landscape</a></li>
                    <li class="<?= $this->session->userdata('vlan') ?>"><a href="http://studio.politekniklp3i-tasikmalaya.ac.id/" target="_blank">Peminjaman Studio</a></li>
                    <li class="<?= $this->session->userdata('manualbook') ?>"><a href="<?= base_url('Visitor/manual_book') ?>">Manual Book</a></li>
                </ul>
            </nav>

        </header>
        <!-- Header Area End -->