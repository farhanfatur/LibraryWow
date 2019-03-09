<?php 
include "../../../lib/database.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$kelas = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO petugas VALUES('$id', '$nama', '$email', '$pass', '$alamat', '$jabatan', '$kelas')");

echo json_encode("ok");
 ?>