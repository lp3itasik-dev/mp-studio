<style>
    .line {
        width: 80px;
        height: 3px;
        background-color: #071651;
        margin-bottom: 5px;
        display: block;
    }

    .tahun {
        color: #e91327;
        font-weight: bold;
    }

    h4 {
        color: #071651;
        font-weight: bold;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- <div class="card">
                <div class="card-header">
                </div>
            </div> -->
            <a class="btn btn-primary btn-sm mb-4" href="<?= base_url('Admin/input_dokumentasi') ?>"><i class="fas fa-plus"></i></a>

            <div class="row">
                <?php
                foreach ($read as $r) {
                ?>
                    <div class="col-md-2">
                        <div class="single-product-wrapper">
                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <!-- <p class="product-price">$180</p> -->
                                    <a href="<?= base_url('Admin/id_dokumen?id=') ?><?= $r->id ?>">
                                        <img src="../foto/dokumentasi/<?= $r->foto_dokumentasi ?>" alt="" width="200px" class="rounded">
                                        <div class="line"></div>
                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- <div class="line"></div> -->
                                            <p class="tahun" style="margin-bottom: 0px;"><?= $r->tahun ?></p>
                                            <h4 style="margin-top: 0px;"><?= $r->judul ?></h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->