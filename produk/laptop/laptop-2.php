<?php
session_start() ?>

<?php 
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
    include "../header.php" ;
    } else {
        include "../header1.php";
    }
    ?>

<!---->

<!--Breadcumb-->
<div class="container">
     <nav aria-label="breadcrumb" style="background-color: #fff;" class="mt-3">
        <ol class="breadcrumb p-3">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item"><a href="../../kategori/laptop.html" class="text-decoration-none">Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produk</li>
        </ol>
    </nav>
</div>

<!---->

<!--produk-->
<div class="container">
    <div class="row row-produk">
        <div class="col-lg-5">
            <figure class="figure">
                <img src="../../assets/produk/laptop/laptop-2.png" class="figure-img img-fluid" style="border-radius: 5px; width: 450px;">
             <figcaption class="figure-caption d-flex justify-content-evenly">
                 <a href="#">
                     <img src="../../assets/produk/laptop/laptop-2.png" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
                 </a>
                 <a href="#">
                    <img src="../../assets/produk/laptop/laptop-2.png" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
                </a>
                <a href="#">
                    <img src="../../assets/produk/laptop/laptop-2.png" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
                </a>
             </figcaption>
            </figure>
        </div>
        <div class="col-lg-5">
            <h4>Asus X441 AMD4 4GB</h4>
            <div class="garis-nama"></div>
            <h3 class="text-muted mb-3">Rp 5.849.999</h3>

            <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-minus"></i></button>
            <span class="mx-2">1</span>
            <button type="button" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></button>
            <span class="mx-4">Tersisa 10</span>

            <div class="btn-produk mt-5">
                <a href="#" class="btn btn-dark text-white btn-lg me-2 btn-custom"><i class="fas fa-shopping-cart fs-5 me-2"></i>Masukkan Ke Troli </a>
                <a href="#" class="btn btn-success btn-lg btn-custom">Beli Sekarang</a>
            </div>
        </div>
    </div>
</div>
<!---->

<!--footer-->
        <?php
        include "../footer.php";
        ?>
    <!-- footer end-->