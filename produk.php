<?php 
session_start();
 error_reporting(0);
?>

<?php 
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
    include "header.php" ;
    } else {
        include "header1.php";
    }
    ?>

    <?php 
    $cid = $_GET['cid'];
    ?>
    
    <!-- Tampilan Produkk-->
    <?php 
    $qry1="SELECT * FROM category WHERE id=$cid";
    $res1=mysqli_query($conn,$qry1);
    $rw1=mysqli_fetch_assoc($res1);
    ?>
    <div class="container mt-3">
        <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
            <h5 class="text-center" style="margin-top: 5px;">Kategori : <?php echo $rw1['categoryname']?></h5>
        </div>
        <div class="row">
        <?php
        $qry="SELECT * FROM product WHERE categoryid=$cid";
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