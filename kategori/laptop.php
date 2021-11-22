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
            <h4 class="text-center" style="margin-top: 5px;">Kategori: Laptop</h4>
        </div>
        <div class="row">
            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="../assets/produk/laptop/laptop-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HP Pavilion Gaming 15 Laptop</h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp 10.999.000</p>
                        <a href="../produk/laptop/laptop-3.php" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="../assets/produk/laptop/laptop-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Asus vivobook M415UA</h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp 9.999.000</p>
                        <a href="../produk/laptop/laptop-1.php" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="../assets/produk/laptop/laptop-2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Asus X441 AMD4 4GB </h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp 5.849.999.</p>
                        <a href="../produk/laptop/laptop-2.php" class="btn btn-dark d-grid">Beli</a>
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