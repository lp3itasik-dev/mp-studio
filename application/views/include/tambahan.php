<div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Kategori</h6>

        <!--  Catagories  -->
        <div class="catagories-menu">
            <ul>
                <li class="<?= $this->session->userdata('document') ?>"><a href="<?= base_url('Admin/documentation') ?>">Dokumentasi</a></li>
                <li class="<?= $this->session->userdata('karya') ?>"><a href="#">karya</a></li>
                <li class="<?= $this->session->userdata('video') ?>">
                    <a href=" #" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">video</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Potrait</a>
                        <a class="dropdown-item" href="#">Landscape</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>