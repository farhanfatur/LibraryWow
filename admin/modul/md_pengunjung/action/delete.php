<?php 
include "../../../lib/database.php";
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM pengunjung WHERE id_pengunjung='$id'");

echo json_encode("ok");
 ?>