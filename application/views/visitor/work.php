<style>
    .single-products-catagory .hover-content .line {
        width: 80px;
        height: 3px;
        background-color: #e91327;
        display: block;
        margin-bottom: 15px;
    }
</style>
       <!-- Product Catagories Area Start -->
       <div class="products-catagories-area clearfix">
           <div class="amado-pro-catagory clearfix">
               <?php
                foreach ($read as $r) {
                ?>
                   <!-- Single Catagory -->
                   <div class="single-products-catagory clearfix">
                       <a href="<?= base_url('Visitor/ket_work?id=') ?><?= $r->id ?>">
                           <img src="../foto/karya/<?= $r->foto_karya ?>" alt="">
                           <!-- Hover Content -->
                           <div class="hover-content">
                               <div class="line"></div>
                               <p><?= $r->nama_lengkap ?> - <?= $r->kelas ?></p>
                               <h4><?= $r->judul ?></h4>
                           </div>
                       </a>
                   </div>
               <?php } ?>

           </div>
       </div>
       <!-- Product Catagories Area End -->
       </div>
       <!-- ##### Main Content Wrapper End ##### -->