<?php 

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$id_odp = $_POST['id_odp'];
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$alamat = $_POST['alamat'];
	$suhu = $_POST['suhu'];
	$keluhan = $_POST['keluhan'];

	$sql = "UPDATE odp SET nama='$nama', umur=$umur, alamat='$alamat', suhu=$suhu, keluhan='$keluhan' where id_odp = $id_odp";

	$res = mysqli_query($koneksi, $sql);

	$count = mysqli_affected_rows($koneksi);

	if($count){
		echo "<script>alert('Data berhasil diganti');window.location='index.php';</script>";
	}

	
}else{
	header("location: tambah.php");
}
if(isset($_POST["kembali"])){
	header("location: index.php");
}
?>
