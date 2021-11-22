            <?php
            $qry="SELECT * FROM category";
            $res=mysqli_query($conn,$qry);
            while($rw=mysqli_fetch_assoc($res))
            {
            	?>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href="produk.php?cid=<?php echo $rw['id']?>" class="text-decoration-none"><img src="<?php echo $rw['categoryimg']?>" class="img-kategori mt-4">
                    <p class="mt-1"><?php echo $rw['categoryname']?></p></a>
                </div>
            </div>
            <?php 
        } 
    ?>