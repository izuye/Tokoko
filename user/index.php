<?php  
include "header.php";
?>
        <div class="container mt-3">
    <div class="row">
        <div class="col-md-12">

            <div class="row-container">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="assets/user.png" />
                    
                    <h3><?php echo  $_SESSION["username"] ?></h3>
                </div>
				<div class="ps-5 mb-3">
				<h5>Username       : <?php echo $_SESSION["username"] ?></h5>
				<h5>Password       : <?php echo $_SESSION["password"] ?></h5>
				<h5>Email          : <?php echo $_SESSION['email'] ?></h5>
                <h5>No.HP          : <?php echo $_SESSION["notelp"] ?></h5>
                <h5>Terakhir Login : <?php echo $_SESSION["last_login"] ?></h5>
				<h5>Terdaftar pada : <?php echo $_SESSION["created_at"] ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>