<?php
	
	include 'Connections/koneksi.php';

	$id_customer = $_GET['id_customer'];

	$query = "DELETE FROM data_customer WHERE id_customer='$id_customer'";
	$hapus = mysql_query($query)or die(mysql_error());

	if ($query) {
		echo '<strong>Data Berhasil Dihapus</strong>';
	}
	else {
		echo '<strong><center>Data Gagal Dihapus</strong>';

	}
	{
		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=data-customer.php">';
	}



?>