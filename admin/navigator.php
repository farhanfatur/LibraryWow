<?php 
$modul = empty($_GET['module']) ? 'beranda' : $_GET['module'];
switch ($modul) {
	case 'beranda':
		include "modul/beranda.php";
		break;
	case 'buku':
		include "modul/md_buku/list.php";
		break;
	case 'tambah-buku':
		include "modul/md_buku/form-add.php";
		break;
	case 'barang':
		include "modul/md_barang/list.php";
		break;
	case 'tambah-barang':
		include "modul/md_barang/form-add.php";
		break;
	case 'pengunjung':
		include "modul/md_pengunjung/list.php";
		break;
	case 'tambah-pengunjung':
		include "modul/md_pengunjung/form-add.php";
		break;
	case 'pinjambuku':
		include "modul/md_peminjaman/list.php";
		break;
	case 'tambah-pinjambuku':
		include "modul/md_peminjaman/form-add.php";
		break;
	case 'kembalibuku':
		include "modul/md_peminjaman/list-kembali.php";
		break;
	case 'petugas':
		include "modul/md_petugas/list.php";
		break;
	case 'tambah-petugas':
		include "modul/md_petugas/form-add.php";
		break;
	default:
		echo "Halaman ada <a href='?module=beranda'>disini</a>";
		break;
}
 ?>