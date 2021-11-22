<?php 
session_start();
include('../config/config.php'); ?>

		<center><font size="6">Tambah Produk</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$productname = $_POST['productname'];
			$categoryid = $_POST['categoryid'];
			$productprice = $_POST['productprice'];
			$productstock = $_POST['productstock'];
			$productimage = $_POST['productimage'];
			$displayorder = $_POST['displayorder'];
			
			$cek = mysqli_query($conn, "SELECT * FROM product WHERE productname='$productname'") or die(mysqli_error($conn));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($conn, "INSERT INTO product( categoryid, productname, productprice, productstock, productimage, displayorder, status) VALUES('".$categoryid."', '".$productname."', '".$productprice."', '".$productstock."', '".$productimage."', '".$displayorder."', '".$status."')") or die(mysqli_error($conn));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_user";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}
		}
		?>

		<form action="index.php?page=tambah_user" method="post">
		
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Produk</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="productname" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kategori</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="categoryid" value="7" required>Baju
						</label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="categoryid" value="8" required>Celana
						</label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="categoryid" value="3" required>Elektronik
						</label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="categoryid" value="4" required>Fotografi
						</label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="categoryid" value="6" required>Games
						</label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="categoryid" value="5" required>Handphone
						</label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="categoryid" value="11" required>Jam Tangan
						</label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="categoryid" value="1" required>Laptop
						</label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="categoryid" value="12" required>Otomotif
						</label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="categoryid" value="2" required>PC
						</label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="categoryid" value="9" required>Sepatu
						</label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="categoryid" value="10" required>Tas
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Harga</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="productprice" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Stock</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="productstock" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Gambar</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="productimage" class="form-control" required>
				</div>
			</div>	
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align"></label>
				<div class="col-md-6 col-sm-6">
					<input type="hidden" name="displayorder" class="form-control" value="1" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="status" value="Tersedia" required>Tersedia
						</label>
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="status" value="Habis" required>Habis
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
