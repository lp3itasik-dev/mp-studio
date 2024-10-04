        <style>
            .section-padding-100 {
                padding-top: 44px;
                padding-bottom: 100px;
            }
            .main-content-wrapper .single-product-area .single_product_desc .product-meta-data .line {
                width: 80px;
                height: 3px;
                background-color: #e91327;
                margin-bottom: 15px;
                display: block;
            }
            .main-content-wrapper .single-product-area .single_product_desc .product-meta-data .product-price {
                font-size: 24px;
                font-weight: 400;
                color: #e91327;
                line-height: 1;
                margin-bottom: 10px;
            }
            .main-content-wrapper .single-product-area .single_product_thumb .carousel-indicators li.active {
                border: 2px solid #e91327;
            }
        </style>
        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <?php
                                    foreach ($read as $r) {
                                    ?>
                                        <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(../foto/dokumentasi/<?= $r->foto_dokumentasi ?>);">
                                        </li>
                                        <!-- <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(<?= base_url('assets/tmplts/') ?>img/product-img/pro-big-2.jpg);">
                                        </li>
                                        <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(<?= base_url('assets/tmplts/') ?>img/product-img/pro-big-3.jpg);">
                                        </li>
                                        <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(<?= base_url('assets/tmplts/') ?>img/product-img/pro-big-4.jpg);">
                                        </li> -->
                                    <?php
                                    }
                                    ?>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="../foto/dokumentasi/<?= $r->foto_dokumentasi ?>">
                                            <img class="d-block w-100" src="../foto/dokumentasi/<?= $r->foto_dokumentasi ?>" alt="First slide">
                                        </a>
                                    </div>
                                    <!-- <div class="carousel-item">
                                        <a class="gallery_img" href="<?= base_url('assets/tmplts/') ?>img/product-img/pro-big-2.jpg">
                                            <img class="d-block w-100" src="<?= base_url('assets/tmplts/') ?>img/product-img/pro-big-2.jpg" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="<?= base_url('assets/tmplts/') ?>img/product-img/pro-big-3.jpg">
                                            <img class="d-block w-100" src="<?= base_url('assets/tmplts/') ?>img/product-img/pro-big-3.jpg" alt="Third slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="<?= base_url('assets/tmplts/') ?>img/product-img/pro-big-4.jpg">
                                            <img class="d-block w-100" src="<?= base_url('assets/tmplts/') ?>img/product-img/pro-big-4.jpg" alt="Fourth slide">
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price"><?= $r->tahun ?></p>
                                <a href="product-details.html">
                                    <h6><?= $r->judul ?></h6>
                                </a>
                                <!-- Ratings & Review -->
                                <!-- <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="review">
                                        <a href="#">Write A Review</a>
                                    </div>
                                </div> -->
                                <!-- Avaiable -->
                                <!-- <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p> -->
                            </div>

                            <div class="short_overview my-5">
                                <p><?= $r->keterangan ?></p>
                            </div>
                            <a href="http://mp-studio.politekniklp3i-tasikmalaya.ac.id/Visitor/ket_dokumentasi?id=<?= $r->id ?>" id="copyLink" hidden>Kunjungi Dokumentasi</a>
                            <button id="copyButton" class="btn btn-primary"><i class="fa-solid fa-copy"></i> Copy Link</button>

                            <!-- Add to Cart Form -->
                            <!-- <form class="cart clearfix" method="post">
                                <div class="cart-btn d-flex mb-50">
                                    <p>Qty</p>
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                            </form> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->
        </div>
        <!-- ##### Main Content Wrapper End ##### -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#copyButton").click(function() {
                    var copyLink = document.getElementById("copyLink");
                    var tempInput = document.createElement("input");
                    tempInput.value = copyLink.getAttribute("href");
                    document.body.appendChild(tempInput);
                    tempInput.select();
                    document.execCommand("copy");
                    document.body.removeChild(tempInput);
                    // You can also provide some visual feedback to the user that the link has been copied
                    alert("Link copied to clipboard!");
                });
            });
        </script>

        <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
        <script src="<?= base_url('assets/tmplts/') ?>js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="<?= base_url('assets/tmplts/') ?>js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="<?= base_url('assets/tmplts/') ?>js/bootstrap.min.js"></script>
        <!-- Plugins js -->
        <script src="<?= base_url('assets/tmplts/') ?>js/plugins.js"></script>
        <!-- Active js -->
        <script src="<?= base_url('assets/tmplts/') ?>js/active.js"></script>

        </body>

        </html>