<?php 
session_start();
include('../config/config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$id			    = $_POST['id'];
			$username	    = $_POST['username'];
			$password	= $_POST['password'];
			$param_password = password_hash($password, PASSWORD_DEFAULT);
			$email		= $_POST['email'];
			$notelp     = $_POST['notelp'];
			$logintime  = date("Y-m-d H:i:s");

			$cek = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($conn));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($conn, "INSERT INTO users(username, password, email, notelp, last_login) VALUES('".$username."', '".$param_password."', '".$email."', '".$notelp."', '".$logintime."')") or die(mysqli_error($conn));

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
				<label class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="username" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="password" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="email" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">No.HP</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="notelp" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
