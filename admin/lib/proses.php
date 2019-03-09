<?php 
ob_start();
session_start();
include "database.php";
$email = $_POST['email'];
$pass = $_POST['password'];

$qr = mysqli_query($koneksi, "SELECT * FROM petugas WHERE email='$email' AND password='$pass'");
$row = mysqli_num_rows($qr);
$data = mysqli_fetch_array($qr);

if($row == 1){
	$_SESSION['name_ses']=$data['nama_petugas'];
	$_SESSION['position']=$data['jabatan'];
	
	echo json_encode(array('success' => true, 'message' => 'Login Successfully!'));
 }else {
 	echo json_encode(array('error' => false, 'message' => 'Email and Password doesn\'t match!'));
 }
 ?>