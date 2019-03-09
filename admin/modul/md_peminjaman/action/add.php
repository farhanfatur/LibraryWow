<?php 
include "../../../lib/database.php";
$id = $_POST['id'];
$tglpinjam = $_POST['tglpinjam'];
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$id_pengunjung = $_POST['id_pengunjung'];
$nama_peminjam = $_POST['namapeminjam'];
$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['namapetugas'];

mysqli_query($koneksi, "INSERT INTO peminjaman VALUES('$id', '$tglpinjam', '$id_buku', '$judul', '$id_pengunjung', '$nama_peminjam', '$id_petugas', '$nama_petugas')");

echo json_encode("ok");
 ?>