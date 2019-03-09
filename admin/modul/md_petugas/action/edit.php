<?php 
include "../../../lib/database.php";
$id = $_GET['id'];
$list = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$id'");

$qrlist = mysqli_fetch_array($list);

echo json_encode($qrlist);
 ?>