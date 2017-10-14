<?php
	
	include 'Connections/koneksi.php';

	$customer		= $_POST['customer'];
	$barang			= $_POST['barang'];
	$lama			= $_POST['lama'];
	$angsuran 		= $_POST['angsuran'];
	$tanggal		= $_POST['tanggal'];


	$query		= "INSERT INTO tbl_pengajuan (id_pengajuan,id_customer,id_user,id_barang,status,lama_angsuran,jml_angs,tgl_pengajuan) VALUES ('','$customer','1','$barang','Baru','$angsuran','$angsuran','$tanggal')";

	$input=mysql_query($query) or die (mysql_error());

if ($input){
	echo "Berhasil menambahkan data";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=data-pengajuan.php">';
}   





?>