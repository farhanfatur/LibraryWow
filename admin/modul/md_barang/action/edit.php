<?php 
include "../../../lib/database.php";
$id = $_GET['id'];
$list = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id'");
$qrlist = mysqli_fetch_array($list);

echo json_encode($qrlist);
 ?>