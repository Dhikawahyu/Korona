<?php
include '../koneksi.php';

include '../aset/header.php';

$id_odp = $_GET['id_odp'];
$sql = mysqli_query($koneksi, "SELECT * FROM odp WHERE id_odp = $id_odp");

$a = mysqli_fetch_assoc($sql);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card" style="width:70rem">
            <center>
                <div class="card-header" style="width:70rem">
                    <h2 class="card-header"><i class="fa fa-user-edit"></i>&nbspEdit Buku</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="proses-edit.php">
                    <table class="table">
                        <input type="hidden" name="id_odp" value="<?= $a['id_odp'] ?>">
                            <tr>
                                <td>Nama</td>
                                <td><input type="text" name="nama" value="<?= $a['nama'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td><input type="text" name="umur" value="<?= $a['umur'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" value="<?= $a['alamat'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Suhu</td>
                                <td><input type="number" name="suhu" value="<?= $a['suhu'] ?>"></td>
                            </tr>
                            <tr>
                            <tr>
                                <td>Keluhan</td>
                                <td>
                                    <textarea name="keluhan" style="width:170px"><?= $a['keluhan'] ?>
                                        
                                    </textarea>
                                </td>
                            </tr>
                                <th></th>
                                <td><button type="submit" class="btn btn-primary" name="simpan">Save</button>&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-danger" name="kembali">Kembali</button></td>
                            </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>>

<?php
include '../aset/footer.php';
?>