<?php 
include '../../../lib/database.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id'");

echo json_encode("ok");
 ?>