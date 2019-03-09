<?php 
include "../../../lib/database.php";
mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$_GET[id]'");

echo json_encode("Delelete");
 ?>