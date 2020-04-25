<?php 

include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($koneksi,"SELECT * FROM odp");

?>
<!DOCTYPE html>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-8">
			<div class="card" style="width:70rem">
			<center>
				<div class="card-header">
					<h2 class="card-header"><i class="fas fa-user-plus"></i>&nbspTambah ODP</h2>
				</div>
				<div class="card-body">
					<form method="post" action="proses-tambah.php">
					<table class="table">
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" required></td>
						</tr>
						<tr>
							<td>Umur</td>
							<td><input type="number" name="umur" required></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input type="text" name="alamat" required></td>
						</tr>
						<tr>
							<td>Suhu</td>
							<td><input type="number" name="suhu" required>^o</td>
						</tr>
						<tr>
							<td>Keluhan</td>
							<td>
								<textarea name="keluhan" style="width:170px">
									
								</textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><button type="submit" class="btn btn-primary" name="simpan">Save</button>&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-danger" name="kembali">Kembali</button></td>
						</tr>
					</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<?php 
include '../aset/footer.php';
?>