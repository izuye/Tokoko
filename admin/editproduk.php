<?php include('../config/config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data Produk</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['pid'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$pid = $_GET['pid'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($conn, "SELECT * FROM product WHERE productid='$pid'") or die(mysqli_error($conn));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$productname	= $_POST['productname'];
			$productprice	= $_POST['productprice'];
			$productstock    	= $_POST['productstock'];
			$productimage = $_POST['productimage'];
			$status = $_POST['status'];
			

			$sql = mysqli_query($conn, "UPDATE product SET productname='$productname', productprice='$productprice', productstock='$productstock', productimage='$productimage', status='$status' WHERE productid='$pid'") or die(mysqli_error($id));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_user";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="index.php?page=edit_user&id=<?php echo $id; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Produk</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="productname" class="form-control" size="4" value="<?php echo $data['productname']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Harga</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="productprice" class="form-control" value="<?php echo $data['productprice']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Stok</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="productstock" class="form-control" value="<?php echo $data['productstock']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Image</label>
				<div class="col-md-6 col-sm-6">
					<input type="email" name="productimage" class="form-control" value="<?php echo $data['productimage']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
				<div class="col-md-6 col-sm-6">
					<input type="email" name="status" class="form-control" value="<?php echo $data['status']; ?>" required>
				</div>
			</div>

			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=tampil_user" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
