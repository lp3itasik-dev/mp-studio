<style>
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
        background-color: #071651;
        color: #fff;
    }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../assets/img/prodi.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="<?= base_url('Admin/dok') ?>" class="nav-link menu-<?= $this->session->userdata('dok') ?>">
                        <!--<i class="nav-icon fas fa-th" style="color:#e91327;"></i>-->
                        <i class="nav-icon fas fa-book" style="color:#e91327;"></i>
                        <p>
                            Dokumentasi
                            <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/input_product') ?>" class="nav-link <?= $this->session->userdata('work') ?>">
                        <!--<i class="nav-icon fas fa-th" style="color:#e91327;"></i>-->
                        <i class="nav-icon fas fa-briefcase" style="color:#e91327;"></i>
                        <p>
                            Work
                            <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/vport') ?>" class="nav-link <?= $this->session->userdata('vport') ?>">
                        <!--<i class="nav-icon fas fa-th" style="color:#e91327;"></i>-->
                        <i class="nav-icon fas fa-video" style="color:#e91327;"></i>
                        <p>
                            Video Portrait
                            <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/vland') ?>" class="nav-link <?= $this->session->userdata('vlan') ?>">
                        <!--<i class="nav-icon fas fa-th" style="color:#e91327;"></i>-->
                        <i class="nav-icon fas fa-video" style="color:#e91327;"></i>
                        <p>
                            Video Landscape
                            <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/manual_book') ?>" target="_blank" class="nav-link <?= $this->session->userdata('manualbook') ?>">
                        <!--<i class="nav-icon fas fa-chart-pie" style="color:#e91327;"></i>-->
                        <i class="nav-icon fas fa-book" style="color:#e91327;"></i>
                        <p>
                            Manual Book
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://studio.politekniklp3i-tasikmalaya.ac.id/" target="_blank" class="nav-link">
                        <!--<i class="nav-icon fas fa-chart-pie" style="color:#e91327;"></i>-->
                        <i class="nav-icon fas fa-hands" style="color:#e91327;"></i>
                        <p>
                            Peminjaman Studio
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>