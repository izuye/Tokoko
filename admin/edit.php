<?php include('../config/config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id = $_GET['id'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($conn));

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
			$username	= $_POST['username'];
			$password	= $_POST['password'];
			$email    	= $_POST['email'];
			$param_password = password_hash($password, PASSWORD_DEFAULT);

			$sql = mysqli_query($conn, "UPDATE users SET username='$username', password='$param_password', email='$email' WHERE id='$id'") or die(mysqli_error($id));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_user";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="index.php?page=edit_user&id=<?php echo $id; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">id</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="id" class="form-control" size="4" value="<?php echo $data['id']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="password" class="form-control" value="<?php echo $data['password']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
				<div class="col-md-6 col-sm-6">
					<input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>" required>
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
