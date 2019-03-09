<?php 
include "../../../lib/database.php";
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang='$id'");

echo json_encode("ok");
 ?>