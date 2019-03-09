<?php 
include "../../../lib/database.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi, "INSERT INTO barang VALUES('$id', '$nama', '$jumlah')");

echo json_encode("ok");
 ?>