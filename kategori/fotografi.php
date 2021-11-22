<?php
session_start() ?>

<?php 
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
    include "header.php" ;
    } else {
        include "header1.php";
    }
    ?>
    <!---->
    <div class="container mt-3">
        <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
            <h4 class="text-center" style="margin-top: 5px;">Kategori: Fotografi</h4>
        </div>
        <div class="row">
            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="../assets/produk/fotografi/kamera-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kamera Canon</h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp 2.300.000</p>
                        <a href="../produk/fotografi/kamera-1.php" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>
             <div class="col-lg-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="https://www.sony.co.id/image/a9bd3d4cc0dac35199d6d92078bfe331?fmt=pjpeg&wid=330&bgcolor=FFFFFF&bgc=FFFFFF" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sony DSC-H300</h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp 3.900.000</p>
                        <a href="../produk/fotografi/kamera-2.php" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="https://www.sony.co.id/image/9179835e50d48589408a5d9c54c5a990?fmt=pjpeg&wid=330&bgcolor=FFFFFF&bgc=FFFFFF" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sony WX50 Compact</h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp 4.299.000</p>
                        <a href="../produk/fotografi/kamera-3.php" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="http://i1.adis.ws/i/canon/eos-r6-rf24-105mm-f4_7.1_is_stm_front-on_square_6412568cc0e7484b96bd55e43069a56c" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Canon EOS R6 RF24</h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp 3.249.000</p>
                        <a href="../produk/fotografi/kamera-4.php" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>     
        </div>
    </div>

       <!--footer-->
    <?php
        include "footer.php";
    ?>
<!-- footer end-->