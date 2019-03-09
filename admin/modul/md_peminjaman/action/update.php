<?php 
include "../../../lib/database.php";
$id = $_POST['id'];
$tglpinjam = $_POST['tglpinjam'];
$tglkembali = $_POST['tglkembali'];
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$id_pengunjung = $_POST['id_pengunjung'];
$nama_peminjam = $_POST['namapeminjam'];
$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['namapetugas'];

mysqli_query($koneksi, "UPDATE peminjaman SET tgl_pinjam='$tglpinjam', tgl_kembali='$tglkembali', id_buku='$id_buku', judul='$judul', id_pengunjung='$id_pengunjung', nama_pengunjung='$nama_peminjam', id_petugas='$id_petugas', nama_petugas='$nama_petugas' WHERE  id_peminjaman='$id'");

echo json_encode("ok");
 ?>