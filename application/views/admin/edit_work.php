<style>
    .responsive-image {
        max-width: 100%;
        height: auto;
        display: block;
        margin-left: 50px;
        margin-bottom: 30px;
    }
</style>
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
            <?php
            foreach ($read as $r) {
            ?>
                <div class="row">
                    <div class="col-md-6">
                        <img src="../foto/karya/<?= $r->foto_karya ?>" alt="" class="rounded responsive-image" style="margin-left: -2px; margin-bottom: 30px;">
                    </div>
                    <div class="col-md-6">
                        <form action="<?= base_url('Admin/actedit_work') ?>" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                            <div class="col-md-12">
                                <input type="text" value="<?= $r->id ?>" name="id" class="form-control" hidden>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Title" value="<?= $r->judul ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?= $r->nama_lengkap ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Class</label>
                                    <input type="text" name="class" class="form-control" placeholder="Enter Class" value="<?= $r->kelas ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Year</label>
                                    <input type="number" name="year" class="form-control" placeholder="Enter Year" value="<?= $r->tahun ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <textarea type="file" name="description" class="form-control" placeholder="Enter Description"><?= $r->keterangan ?></textarea>
                                </div>
                                <div class="form-group" hidden>
                                    <label for="exampleInputEmail1">Foto Lama</label>
                                    <input type="text" name="foto_lama" class="form-control" placeholder="Enter Description" value="<?= $r->foto_karya ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Picture</label>
                                    <input type="file" name="foto_karya" class="form-control" placeholder="Enter Picture">
                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-success btn-sm" value="Simpan">
                                </div>
                                <!-- <a class="btn btn-success" href="<?= base_url('Admin/id_dokumen?id=') ?><?= $r->id ?>" style="margin-bottom: 10px;">Kembali</a> -->
                            </div>
                        </form>
                    </div>
                </div>

            <?php  } ?>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->