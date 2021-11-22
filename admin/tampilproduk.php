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
					<th>Produk id</th>
					<th>Kategori</th>
					<th>Nama Produk</th>
					<th>Harga</th>
					<th>Stok</th>
					<th>Status</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel users urut berdasarkan id yang paling kecil
				$sql = mysqli_query($conn, "SELECT * FROM product ORDER BY productid ASC") or die(mysqli_error($conn));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$data['productid'].'</td>
							<td>'.$data['categoryid'].'</td>
							<td>'.$data['productname'].'</td>
							<td>'.$data['productprice'].'</td>
							<td>'.$data['productstock'].'</td>
							<td>'.$data['status'].'</td>
							<td>
								<a href="index.php?page=edit_produk&pid='.$data['productid'].'" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete.php?pid='.$data['productid'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
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
