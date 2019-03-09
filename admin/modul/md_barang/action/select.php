<?php 
include "../../../lib/database.php";
$qr = mysqli_query($koneksi, "SELECT * FROM barang");
$result = array();
while($qrlist = mysqli_fetch_array($qr)) {
	array_push($result, $qrlist);
} 
echo json_encode(array('success' => true, 'data' => $result));
 ?>