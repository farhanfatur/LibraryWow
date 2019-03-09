<?php 
include "../../../lib/database.php";
$id = $_GET['id'];
$qr = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman='$id'");
$list = mysqli_fetch_array($qr);

echo json_encode($list);
 ?>