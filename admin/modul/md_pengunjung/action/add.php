<?php 
include "../../../lib/database.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$kelas = $_POST['kelas'];
$keperluan = $_POST['keperluan'];
$tgl = $_POST['date'];
mysqli_query($koneksi, "INSERT INTO pengunjung VALUES('$id', '$nama', '$kelas', '$jenis', '$keperluan', '$tgl')");

echo json_encode("ok");
 ?>