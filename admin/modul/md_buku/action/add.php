<?php 
include "../../../lib/database.php";
$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$jenis = $_POST['jenis'];
$stok = $_POST['stok'];
$tahun = $_POST['tahun'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi, "INSERT INTO buku VALUES('$id', '$judul', '$pengarang', '$penerbit', '$jenis', '$stok', '$tahun', '$jumlah')");

echo json_encode("ok");
 ?>