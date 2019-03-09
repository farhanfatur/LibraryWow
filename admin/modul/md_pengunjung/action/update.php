<?php 
include "../../../lib/database.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$kelas = $_POST['kelas'];
$keperluan = $_POST['keperluan'];
$tgl = $_POST['date'];

mysqli_query($koneksi, "UPDATE pengunjung SET nama_pengunjung='$nama', kelas='$kelas', jenis_pengunjung='$jenis', keperluan='$keperluan', tgl='$tgl' WHERE  id_pengunjung='$id'");

echo json_encode("ok");
 ?>