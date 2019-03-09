<?php
function autonumber($tabel, $kolom, $lebar=0, $awalan='') {
	$konek = mysqli_connect("localhost", "root", "", "perpustakaan_w");

	$auto = mysqli_query($konek, "SELECT $kolom FROM $tabel ORDER BY $kolom DESC LIMIT 1");
	$jml_record = mysqli_num_rows($auto);

	if($jml_record == 0) {
		$nomor = 1;
	}else {
		$row = mysqli_fetch_array($auto);
		$nomor = intval(substr($row[0], strlen($awalan)))+1;
	}

	if($lebar > 0) {
		$angka = $awalan.str_pad($nomor, $lebar, "0", STR_PAD_LEFT);
	}else{ 
		$angka = $awalan.$nomor;
	}
	return $angka;
} 
 ?>