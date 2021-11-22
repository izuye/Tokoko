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
    <!---->
    <div class="container mt-3">
        <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
            <h4 class="text-center" style="margin-top: 5px;">Kategori: Handphone</h4>
        </div>
        <div class="row">
            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="../assets/produk/handphone/hp-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Black Shark</h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp 9.899.000</p>
                        <a href="../produk/hp/hp-1.php" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//101/MTA-6687443/vivo_vivo_y12_3-32_gb_smartphone_full04_b8yq7qg8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vivo Y12 Ram 3Gb/64Gb</h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp 1.890.000</p>
                        <a href="../produk/hp/hp-2.php" class="btn btn-dark d-grid">Beli</a>
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