<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="icon" href="./assets/img/LOGO HMP 2.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/style.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        .ftco-section {
            padding: 3em 0;
        }

        .topnav a.active {
            background-color: red;
            color: white;
        }

        .topnav {
            overflow: hidden;
            background-color: #336;
        }
        
        .topnav {
        overflow: hidden;
    }

    .topnav a {
        float: right; /* Mengatur elemen ke kanan */
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .topnav a.active {
        background-color: #4CAF50;
        color: white;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark topnav">
      <a class="navbar-brand" style="color:#ffffff; bg-color:red" href="#">Marketing Student Creatifity</a>
       <div >
            <a class="active" href="<?= base_url('Visitor/index') ?>">Home</a>
            <a href="<?= base_url('Visitor/documentation') ?>">Documentation</a>
            <a href="<?= base_url('Visitor/work') ?>">Work</a>
            <a href="<?= base_url('Visitor/vport') ?>">Video Portrait</a>
            <a href="<?= base_url('Visitor/vlan') ?>">Video Landscape</a>
            <a href="http://studio.politekniklp3i-tasikmalaya.ac.id/" target="_blank">Peminjaman Studio</a>
        </div>
    </nav>
   
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero featured-carousel owl-carousel">
                        <?php
                        foreach ($read as $r) {
                        ?>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(../foto/dokumentasi/<?= $r->foto_dokumentasi ?>); background-size: cover;">

                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url('assets/home/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/home/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets/home/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/home/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/home/') ?>js/main.js"></script>
</body>

</html>