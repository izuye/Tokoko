<?php
error_reporting(0);
include 'config/config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/troli.css">
    <!---->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- favico -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/izuye/image/upload/v1635379458/prakerin.izzdevs.tk/favicon_pc2sgm.png">

    <title>Tokoko</title>
</head>

<body class="body">
<!--Navbar nya-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <!-- Logonya -->
            <img src="assets/logo.png" alt="" width="50" height="50" class="me-2">
            <strong>Tokoko</strong>
        </a>
        <!---->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!--Search-->
            <form action="cari.php" class="d-flex ms-auto my-4 my-lg-0" method="GET">
                <input class="form-control me-2" type="text" name="cari" placeholder="Cari produk..." aria-label="Search">
                <input type="submit" value="Cari">
            </form>
            <ul class="navbar-nav ms-auto">
                <!-- class="nav-link active" aria-current="page" -->
                <!-- buat page active -->
                <!---->
                <?php if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) 
                { ?>
                <li class="nav-item">
                    <a class="nav-link active">Home</a>
                </li>
                    <a class="nav-link" href="user/register.php">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user/login.php">Masuk</a>
                </li>
                <?php } else {?>
                <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="troli.php">Troli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user">Hai, <?php echo $_SESSION["username"]?></a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>
<!---->
<!--Breadcumb-->
<div class="container">
     <nav aria-label="breadcrumb" style="background-color: #fff;" class="mt-3">
        <ol class="breadcrumb p-3">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Troli</li>
        </ol>
    </nav>
</div>

<!---->
<!---->
    <div class="container">
    	<div class="row row-produk">
    		<div class="col table-responsive mt-4 mx-3">
    			<table class="table">
    				<thead class="table-secondary">
    					<tr class="th-header">
					      <th scope="col">Hapus</th>
					      <th scope="col">Gambar</th>
					      <th scope="col">Produk</th>
					      <th scope="col">Harga</th>
					      <th scope="col">Jumlah</th>
					      <th scope="col">Subtotal</th>
					    </tr>
					  </thead>
					  
					  <tbody class="align-midle">
					  <?php
					$qry1="SELECT * FROM product WHERE productid=$rw['productid']";
					$res1=mysqli_query($conn,$qry1);
					$rw1= mysqli_fetch_assoc($res1));
					?>
					  <?php
					 $qry="SELECT * FROM troli WHERE username=$_SESSION['username']";
					 $res=mysqli_query($conn,$qry);
					 while($rw=mysqli_fetch_assoc($res))
					 {
					 ?>
					    <tr>
					      <th scope="row"><i class="far fa-times-circle text-dark fs-4"></i></th>
					      <td><img src="<? php echo $rw1['productimage']?>" class="img-troli"></td>
					      <td><?php echo $rw1['productimage']?></td>
					      <td><?php echo $rw1['productprice']?></td>
					      <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-minus"></i></button>
					            <span class="mx-2"><?php echo $rw['quantity']?></span>
					            <button type="button" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></button>
					        </td>
					        <td>Rp.</td>
					    </tr>
					 <?php } ?>
					    </tbody>
					</table>
				</div>
			</div>



		    <div class="row row-produk">
		    	<div class="col">
		    		<table class="table ms-auto text-center mb-5 mt-3" id="table-checkout">
		    			<thead class="table-secondary"> 
						    <tr>
						      <th class="th-header" scope="col" colspan="2">Total</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td class="fw-bold th-header">Total Harga</td>
						      <td class="th-header">Rp. 192.168.100</td>
						    </tr>
						    <tr>
						    	<td colspan="2">
						    		<div class="btn-checkout d-grid">
						    			<button class="btn btn-dark btn-sm mx-5">Checkout</button>
						    		</div>
						    	</td>
						    </tr>
						  </tbody>
						</table>
		    	</div>
		    </div>
		</div>
<?php
include "footer.php";
?>