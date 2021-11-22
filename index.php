<?php 
session_start();
error_reporting(0);
?>

<?php 
include "header.php";
?>
    
    <!-- gambar carousel -->
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="bu2tton" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img1.jpg" class="d-block img-fluid">
                    <div class="carousel-caption d-none img-fluid">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img2.jpg" class="d-block img-fluid">
                    <div class="carousel-caption d-none img-fluid">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img3.jpg" class="d-block img-fluid">
                    <div class="carousel-caption d-none img-fluid">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
        </div>
    </div>
    <!-- carousel end -->

    <!-- Kategori -->
    <div class="container mt-5">
        <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
            <h5 class="text-center" style="margin-top: 5px;">KATEGORI</h5>
        </div>
        <div class="row text-center row-container mt-2">
            <?php 
            include "category.php" 
            ?>
        </div>
    </div>
    </div>
    <!--Kategori End-->

    <!-- Tampilan Produkk-->
    <div class="container mt-3">
        <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
            <h5 class="text-center" style="margin-top: 5px;">PRODUK TERLARIS</h5>
        </div>
        <div class="row">
        <?php
        $qry="SELECT * FROM product";
        $res=mysqli_query($conn,$qry);
        while($rw=mysqli_fetch_assoc($res))
        {
        ?>
            <div class="col-lg-2 col-sm-4 col-8 mt-2">
                <div class="card text-center">
                    <img src="<?php echo $rw['productimage']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rw['productname']?></h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp. <?php echo $rw['productprice']?></p>
                        <a href="detail.php?pid=<?php echo $rw['productid']?>" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>
          
      <?php } ?>
    </div>
</div>
</div>
</div>
    <!--Produk end-->

    <!--footer-->
    <?php 
    include "footer.php"
    ?>