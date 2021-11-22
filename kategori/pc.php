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
<!-- Tampilan Produkk-->
<div class="container mt-3">
    <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
        <h5 class="text-center" style="margin-top: 5px;">Kategori: Aksesoris PC</h5>
    </div>
    <div class="row">
        <div class="col-lg-2 col-sm-4 col-6 mt-2">
            <div class="card text-center">
                <img src="../assets/produk/pc/hset-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nexus Headset</h5>
                    <div class="icon-bintang">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>
                    <p class="card-text mt-2">Rp 250.500</p>
                    <a href="../produk/pc/hset-1.php" class="btn btn-dark d-grid">Beli</a>
                </div>
            </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="../assets/produk/pc/hset-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Joyseus JM B3 HIFI</h5>
                        <div class="icon-bintang">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            </div>
                        <p class="card-text mt-2">Rp 120.500</p>
                        <a href="../produk/pc/hset-2\.php" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
                </div>

                <div class="col-lg-2 col-sm-4 col-6 mt-2">
                    <div class="card text-center">
                        <img src="../assets/produk/pc/hset-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Joyseus Headset</h5>
                            <div class="icon-bintang">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                </div>
                            <p class="card-text mt-2">Rp 159.000</p>
                            <a href="../produk/pc/hset-3.php" class="btn btn-dark d-grid">Beli</a>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-6 mt-2">
                        <div class="card text-center">
                            <img src="../assets/produk/pc/hset-4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Joyseus JH01</h5>
                                <div class="icon-bintang">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    </div>
                                <p class="card-text mt-2">Rp 205.000</p>
                                <a href="../produk/pc/hset-4.php" class="btn btn-dark d-grid">Beli</a>
                            </div>
                        </div>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mt-2">
                            <div class="card text-center">
                                <img src="../assets/produk/pc/hset-5.jpg" class="card-img-top" style="height: 163px" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Logitech G733</h5>
                                    <div class="icon-bintang">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        </div>
                                    <p class="card-text mt-2">Rp 1.980.000</p>
                                    <a href="../produk/pc/hset-5.php" class="btn btn-dark d-grid">Beli</a>
                                </div>
                            </div>
                        </div> 

                        <div class="col-lg-2 col-sm-4 col-6 mt-2">
                            <div class="card text-center">
                                <img src="../assets/produk/pc/keyboard-1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">MSI Keyboard</h5>
                                    <div class="icon-bintang">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        </div>
                                    <p class="card-text mt-2">Rp 185.000</p>
                                    <a href="../produk/pc/keyboard-1.php" class="btn btn-dark d-grid">Beli</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mt-2">
                            <div class="card text-center">
                                <img src="../assets/produk/pc/keyboard-2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">NYK K01 RGB TKL Keyboard</h5>
                                    <div class="icon-bintang">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        </div>
                                    <p class="card-text mt-2">Rp 185.000</p>
                                    <a href="../produk/pc/keyboard-2.php" class="btn btn-dark d-grid">Beli</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mt-2">
                            <div class="card text-center">
                                <img src="../assets/produk/pc/keyboard-3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">NYK K-02 Black Keyboard</h5>
                                    <div class="icon-bintang">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        </div>
                                    <p class="card-text mt-2">Rp 140.000</p>
                                    <a href="../produk/pc/keyboard-3.php" class="btn btn-dark d-grid">Beli</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mt-2">
                            <div class="card text-center">
                                <img src="../assets/produk/pc/mouse-1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div>
                                    <h5 class="card-title">Joyseus MS-0002 Wireless</h5></div>
                                    <div class="icon-bintang">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        </div>
                                    <p class="card-text mt-2">Rp 85.000</p>
                                    <a href="../produk/pc/mouse-1.php" class="btn btn-dark d-grid">Beli</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mt-2">
                            <div class="card text-center">
                                <img src="../assets/produk/pc/mouse-2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div>
                                    <h5 class="card-title">Joyseus MS-0007 USB Wired </h5></div>
                                    <div class="icon-bintang">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        </div>
                                    <p class="card-text mt-2">Rp 85.000</p>
                                    <a href="../produk/pc/mouse-2.php" class="btn btn-dark d-grid">Beli</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 mt-2">
                                <div class="card text-center">
                                    <img src="../assets/produk/pc/vga-1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">MSI GeForce RTX 3090  </h5>
                                        <div class="icon-bintang">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            </div>
                                        <p class="card-text mt-2">Terjual</p>
                                        <a href="../produk/pc/vga-1.php" class="btn btn-dark d-grid">Habis</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                                <div class="card text-center">
                                    <img src="../assets/produk/pc/vga-3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Gigabyte GTX 1660 </h5>
                                        <div class="icon-bintang">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            </div>
                                            <a href="../produk/pc/vga-3.php" class="btn btn-dark d-grid">Habis</a>
                                        <p class="card-text mt-2">Terjual</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-4 col-6 mt-2">
                                <div class="card text-center">
                                    <img src="../assets/produk/pc/vga-2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">GeForce RTX 1050 2GB</h5>
                                        <div class="icon-bintang">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            </div>
                                        <p class="card-text mt-2">Rp 3.420.000</p>
                                        <a href="../produk/pc/vga-2.php" class="btn btn-dark d-grid">Beli</a>
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