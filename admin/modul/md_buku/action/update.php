<?php 
include "../../../lib/database.php";
$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$jenis = $_POST['jenis_buku'];
$stok = $_POST['stok'];
$tahun = $_POST['tahun_terbit'];
$jumlah = $_POST['jml_halaman'];

mysqli_query($koneksi, "UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', jenis_buku='$jenis', stok='$stok', tahun_terbit='$tahun', jml_halaman='$jumlah' WHERE id_buku='$id'");

echo json_encode("ok");
 ?>