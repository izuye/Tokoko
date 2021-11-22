<?php
session_start();
error_reporting(0);
?>
<?php
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
    <link rel="stylesheet" type="text/css" href="css/produk/itemdesc.css">
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
                <?php //Jika user belum login
                if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) 
                    { ?>
                <!-- class="nav-link active" aria-current="page" -->
                <!-- buat page active -->
                <li class="nav-item">
                    <a class="nav-link active">Home</a>
                </li>
                    <a class="nav-link" href="user/register.php">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user/login.php">Masuk</a>
                </li>
            <?php } else{ ?> <!--JIka user udah login-->
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="troli.php">Troli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user">Hai, <?php echo $_SESSION["username"]?></a>
                </li>
            <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!---->

    <?php
    if(!empty($_GET['addtroli']))
    {
        $pid=$_GET['pid'];
        $qty=$_GET['qty'];
        $qry="INSERT INTO troli (username,productid,quantity) VALUES('".$_SESSION['username']."','".$pid."','".$qty."')";
        if(mysqli_query($conm,$qry))
        {
            header("location: troli.php");
        }
    }
    ?>

<!--Breadcumb-->
<div class="container">
     <nav aria-label="breadcrumb" style="background-color: #fff;" class="mt-3">
        <ol class="breadcrumb p-3">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produk</li>
        </ol>
    </nav>
</div>

<!---->
    <?php 
    $pid = $_GET['pid'];
    $qry="SELECT * FROM product WHERE productid=$pid";
    $res=mysqli_query($conn,$qry);
    $rw=mysqli_fetch_assoc($res);
    ?>
<!--produk-->
<div class="container">
    <div class="row row-produk">
        <div class="col-lg-5">
            <figure class="figure">
                <img src="<?php echo $rw['productimage']?>" class="figure-img img-fluid" style="border-radius: 5px; width: 450px;">
             <figcaption class="figure-caption d-flex justify-content-evenly">
                 <a href="#">
                     <img src="<?php echo $rw['productimage']?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
                 </a>
                 <a href="#">
                    <img src="<?php echo $rw['productimage']?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
                </a>
                <a href="#">
                    <img src="<?php echo $rw['productimage']?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
                </a>
             </figcaption>
            </figure>
        </div>
        <div class="col-lg-5">
            <h4><?php echo $rw['productname']?></h4>
            <div class="garis-nama"></div>
            <h3 class="text-muted mb-3">Rp. <?php echo $rw['productprice']?></h3>
            <h6><?php echo $rw['status']?></h6>
            <h6 class="">Stock: <?php echo $rw['productstock']?></h6>


            <form>
            <input type="hidden" name="pid" value="<?php echo $_GET['pid']?>">
            <input type="number" name="qty" class="form-control2" placeholder="Jumlah">
            </form>


            <div class="btn-produk mt-5">
            <?php
            if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) 
                { ?>
                <p>Anda harus Login terlebih dahulu</p>
            <?php }else{?>
                <input type="submit" class="btn btn-dark text-white btn-lg me-2 btn-custom" id="addtroli" name="addtroli" value="Tambah Ke Troli" />
            <?php } ?>
            </div>
        </div>
    </div>
</div>
<!---->

<!--footer-->
        <?php
        include "footer.php";
        ?>
    <!-- footer end-->