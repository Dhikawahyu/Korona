<?php

include '../koneksi.php';

$id_odp = $_GET['id_odp'];

mysqli_query($koneksi,"DELETE FROM odp WHERE id_odp='$id_odp'");

header("location:index.php");

?>