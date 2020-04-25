<?php 

include 'koneksi.php';

if(isset($_POST["register"])){

	$nama	  = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO login (nama, username, password) VALUES ('$nama','$username', '$password')";

	$res = mysqli_query($koneksi, $sql);

	$count = mysqli_affected_rows($koneksi);

	if($count){
		echo "<script>alert('Register berhasil.');window.location='index.php';</script>";
	}

	
}else{
	header("location: register.php");
}
if(isset($_POST["kembali"])){
	header("location: index.php");
}
?>
