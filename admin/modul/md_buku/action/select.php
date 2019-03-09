<?php 
include "../../../lib/database.php";
$list = mysqli_query($koneksi, "SELECT * FROM buku");
$result = array();
while($qrlist = mysqli_fetch_array($list)) {
	array_push($result, $qrlist);
}
echo json_encode(array("success" => true, "data" => $result));
 ?>