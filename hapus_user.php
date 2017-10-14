<?php
	include 'Connections/koneksi.php';

	$id_user	= $_GET ['id_user'];

	$query 		= "DELETE FROM tbl_user WHERE id_user='$id_user'";
	$hapus 		= mysql_query($query)or die(mysql_error());
	if ($query)
	    {
	    	echo "<strong><center>Data Berhasil Dihapus";
	    	//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=manage_user.php">';
	    }
	else {
	    	echo "<strong><center>Data Gagal Dihapus";
	    	//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
	    	
	    }
	
?>