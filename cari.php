<?php 
session_start();
?>

<?php 
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
    include "header.php" ;
    } else {
        include "header1.php";
    }
    ?>

   
    <!-- Tampilan Produkk-->
    <div class="container mt-3">
        <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
            <h5 class="text-center" style="margin-top: 5px;">Pencarian : <?php echo $_GET['cari']?></h5>
        </div>
        <div class="row">
        <?php 
					if($_GET['cari'] != ''){
						$where = "AND productname LIKE '%".$_GET['cari']."%'";
					}

					$produk = mysqli_query($conn, "SELECT * FROM product WHERE displayorder = 1 $where ORDER BY productid DESC");
					if(mysqli_num_rows($produk) > 0){
						while($rw = mysqli_fetch_array($produk))
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
      <?php }} else{ ?>
      <h4>Produk tidak ditemukan </h4>
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