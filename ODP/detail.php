<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_odp = $_GET['id_odp'];

$sql = "SELECT * FROM odp where id_odp = $id_odp";
$res = mysqli_query($koneksi,$sql);
$detail = mysqli_fetch_assoc($res);


?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Buku</h2>
			<hr class="bg-light">
			<table><tr><th>
				<table class="table table-bordered">
					<tr>
						<td width="100px"><strong>Nama</strong></td>
						<td width="500px"><?= $detail['nama'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Umur</strong></td>
						<td width="500px"><?= $detail['umur'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Alamat</strong></td>
						<td width="500px"><?= $detail['alamat'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Suhu</strong></td>
						<td width="500px"><?= $detail['suhu'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Keluhan</strong></td>
						<td width="500px"><?= $detail['keluhan'] ?></td>
					</tr>
					<tr>
						<td></td>
						<td>
						<a href="edit.php?id_odp=<?= $detail['id_odp']?>" class="badge badge-warning" style="width:80px">Edit</a>&nbsp&nbsp
						<a href="hapus.php?id_odp=<?= $detail['id_odp']?>" class="badge badge-danger" style="width:80px">Hapus</a></td>
					</tr>
				</table>
				</th></tr></table>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>