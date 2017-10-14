<?php
	include 'Connections/koneksi.php';
	
    $id_barang   = $_POST['id_barang'];
	$nama	     = $_POST['nama_barang'];
    $harga       = $_POST['harga'];
    $satuan      = $_POST['satuan'];
    $descr       = $_POST['descr'];
    

	$update 	    = "UPDATE tbl_barang SET nama_barang='$nama', harga='$harga', satuan='$satuan', descr='$descr' WHERE id_barang='$id_barang'";
	$updatebarang	= mysql_query($update)or die(mysql_error());
if ($updatebarang)
    {
    	echo "<strong><center>Data Berhasil Diubah";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=data-barang.php">';
    }
else {
    	//echo "<strong><center>Data Gagal Diubah";
    	//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
    	print"
    		<script>
    			alert(\"Data Gagal Diubah!\");
    			history.back(-1);
    		</script>";
    }
?>