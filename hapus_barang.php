<?php

	include 'Connections/koneksi.php';

	$id_barang = $_GET['id_barang'];

	$query = "DELETE FROM tbl_barang WHERE id_barang='$id_barang'";
	$hapus = mysql_query($query)or die(mysql_error());

	if ($query) {
		echo '<strong>Data Berhasil Dihapus</strong>';
	}
	else {
		echo '<strong>Data Gagal Dihapus</strong>';
	}
	{
		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=data-barang.php">';
	}





?>