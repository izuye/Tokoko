<?php
//memasukkan file config.php
include('../config/config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Data User</font></center>
		<hr>
		<a href="index.php?page=tambah_user"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>id</th>
					<th>Username</th>
					<th>Password</th>
					<th>Email</th>
					<th>Created at</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel users urut berdasarkan id yang paling besar
				$sql = mysqli_query($conn, "SELECT * FROM users ORDER BY id ASC") or die(mysqli_error($conn));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$data['id'].'</td>
							<td>'.$data['username'].'</td>
							<td>'.$data['password'].'</td>
							<td>'.$data['email'].'</td>
							<td>'.$data['created_at'].'</td>
							<td>
								<a href="index.php?page=edit_user&id='.$data['id'].'" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete.php?id='.$data['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	</div>
