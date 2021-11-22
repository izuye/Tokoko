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
            <h4 class="text-center" style="margin-top: 5px;">Kategori: Jam Tangan</h4>
        </div>
        <div class="row">
            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="../assets/produk/jamtangan/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jam Tangan</h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp 115.000</p>
                        <a href="../produk/jamtangan/jamtangan-1.php" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="https://s0.bukalapak.com/img/59830009152/large/data.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SKMEI Analog Digital</h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp 145.500</p>
                        <a href="../produk/jamtangan/jamtangan-2.php" class="btn btn-dark d-grid">Beli</a>
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