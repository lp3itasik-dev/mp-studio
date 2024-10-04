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
                    <div class="col-md-6 text-center">
                        <iframe width="385" height="515" src="<?= $r->link ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <h1><?= $r->judul ?></h1>
                        <p style="color: red;"><?= $r->tahun ?></p>
                        <p style="font-style: italic; font-weight: bold;"><?= $r->nama_lengkap ?></p>
                        <p style="font-style: italic; font-weight: bold; margin-top: -20px;"><?= $r->kelas ?></p>
                        <h6 style="text-align: justify; margin-bottom: 20px;">
                            <?= $r->keterangan ?> </h6>

                        <a class="btn btn-primary" href="<?= base_url('Admin/edit_vport?id=') ?><?= $r->id ?>" style="margin-bottom: 10px;"><i class="fas fa-edit"></i> Ubah</a>
                        <a onclick="return hapus(`<?= $r->id ?>`,`<?= $r->judul ?>`)" class="btn btn-danger" style="margin-bottom: 10px;"><i class="fas fa-trash"></i> Hapus</a>
                    </div>
                </div>

            <?php  } ?>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Ubah dan Tambah -->
<form name="form" action="" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
    <div id="Modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modal-header" class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-d-none="true">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="text" name="id" hidden>
                    <span id="modal-body-update-or-create">

                    </span>
                    <span id="modal-body-delete">
                        <input type="text" name="foto_karya" hidden>
                        Yakin untuk menghapus <b id="name-delete"></b> dari tabel ini?
                    </span>
                    <span id="modal-body-tambahin">
                    </span>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-block" id="modal-button" style="color: #fff;">Hapus</button>
                    <button type="button" class="btn btn-block" data-dismiss="modal" id="batal" aria-d-none="true" style="color: #fff;">Batal</button>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    function hapus(id, judul) {
        $('#Modal').modal('show');
        $('#modal-header').html('Hapus');
        $('#batal').removeClass('bg-gradient-danger').addClass('bg-gradient-success');
        $('#modal-button').removeClass('bg-gradient-success').addClass('bg-gradient-danger');
        $('#modal-body-update-or-create').addClass('d-none');
        $('#modal-body-delete').removeClass('d-none');
        $('#modal-body-tambahin').addClass('d-none');
        $('[name="id"]').val(id);
        $('#name-delete').html(judul);
        document.form.action = '<?= base_url('Admin/acthapus_vport'); ?>';
    }
</script>