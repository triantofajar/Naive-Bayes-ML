<?php

	include 'Connections/koneksi.php';

	$id_pengajuan = $_GET['id_pengajuan'];
	$query = "DELETE FROM tbl_pengajuan WHERE id_pengajuan='$id_pengajuan'";
	$hapus = mysql_query($query)or die(mysql_error());

	if ($query) {
		echo '<strong>Data Berhasil Dihapus</strong>';
	}
	else {
		echo '<b>GAGAL</b>';

	}
	{
		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=data-pengajuan.php">';
	}





?>