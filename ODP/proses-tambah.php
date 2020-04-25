<?php 

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$alamat = $_POST['alamat'];
	$suhu = $_POST['suhu'];
	$keluhan = $_POST['keluhan'];

	$sql = "INSERT INTO odp (nama, umur, alamat, suhu, keluhan) VALUES ('$nama', '$umur', '$alamat', '$suhu', '$keluhan')";

	$res = mysqli_query($koneksi, $sql);

	$count = mysqli_affected_rows($koneksi);

	if($count){
		echo "<script>alert('Data berhasil ditambahkan.');window.location='index.php';</script>";
	}

	
}else{
	header("location: tambah.php");
}
if(isset($_POST["kembali"])){
	header("location: index.php");
}
?>
