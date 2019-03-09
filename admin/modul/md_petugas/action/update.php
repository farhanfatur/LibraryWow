<?php 
include "../../../lib/database.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$kelas = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$nama', email='$email', password='$pass', alamat='$alamat', jabatan='$jabatan', kelas='$kelas' WHERE id_petugas='$id'");

echo json_encode("ok");
 ?>