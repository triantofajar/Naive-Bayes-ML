<?php
	
	include 'Connections/koneksi.php';

	$customer		= $_POST['customer'];
	$barang			= $_POST['barang'];
	$lama			= $_POST['lama'];
	$angsuran 		= $_POST['angsuran'];
	$tanggal		= $_POST['tanggal'];


	$cek = "SELECT * FROM tbl_pengajuan WHERE id_customer = '$customer'";
	
	$qr = mysql_query($cek) or die(mysql_error());

	$exist = mysql_num_rows($qr);
	// echo $exist;

	if($exist == 0){
		$query		= "INSERT INTO tbl_pengajuan (id_pengajuan,id_customer,id_user,id_barang,status,lama_angsuran,jml_angs,tgl_pengajuan) VALUES ('','$customer','1','$barang','Baru','$lama','$angsuran','$tanggal')";

		$input=mysql_query($query) or die (mysql_error());

		if ($input){
			echo "Berhasil menambahkan data";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=data-pengajuan.php">';
		}   

	}else{

		echo "<script> 
				alert('Maaf anda tidak bisa melakukan pengajuan')
			</script>";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=data-pengajuan.php">';
		   	
	}	
?>