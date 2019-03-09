<?php 
include "../../../lib/database.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
mysqli_query($koneksi, "UPDATE barang SET nama_barang='$nama', jumlah='$jumlah' WHERE id_barang='$id'");

echo json_encode("ok");
 ?>