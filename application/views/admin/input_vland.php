<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Input Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Input Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Input <small>Video Lanscape</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url('Admin/actinput_vland') ?>" id="workinput" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Class</label>
                                    <input type="class" name="class" class="form-control" placeholder="Enter Class">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Year</label>
                                    <input type="number" name="year" class="form-control" placeholder="Enter Year">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea type="text" name="description" class="form-control" placeholder="Description"></textarea>
                                </div>
                                <div class="alert alert-info" role="alert">
                                    Silakan masukkan tautan video YouTube yang ingin Anda sematkan (embed). Hanya tautan YouTube yang dapat diterima contoh <b>https://www.youtube.com/embed/wG1xB1KbnGs</b>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Link</label>
                                    <textarea type="text" name="link" class="form-control" placeholder="Enter Link"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-success btn-sm" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->