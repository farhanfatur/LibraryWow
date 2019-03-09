<?php 
include "../../../lib/database.php";
$id = $_GET['id'];
$qr = mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE id_pengunjung='$id'");
$list = mysqli_fetch_array($qr);

echo json_encode($list);
 ?>