<?php

include "Connections/koneksi.php";

$id= $_POST['id'];


$sql = mysql_query("SELECT * FROM data_customer WHERE id_customer = '$id'");
$data = mysql_fetch_array($sql);

	$nama 				= $data['nama_cust'];
	$alamat 			= $data['alamat'];
	$no_hp 				= $data['no_hp'];
	$umur 				= $data['umur'];
	$penghasilan		= $data['penghasilan'];
	$pekerjaan 			= $data['pekerjaan'];
	$ang_kel 			= $data['jml_ang_kel'];
	$status_rumah 		= $data['status_rumah'];


	$mean = ($umur + $penghasilan + $pekerjaan + $ang_kel + $status_rumah)/4;


//prepare data on bayes rule

	//max arrange
	if($umur > $pekerjaan && $umur > $penghasilan && $umur > $ang_kel && $umur > $status_rumah){
		$max = $umur;
	}elseif ($pekerjaan > $umur && $pekerjaan > $penghasilan && $pekerjaan > $ang_kel && $pekerjaan > $status_rumah) {
		$max = $pekerjaan;
	}elseif ($ang_kel > $umur && $ang_kel > $penghasilan && $ang_kel > $pekerjaan && $ang_kel > $status_rumah) {
		$max = $ang_kel;
	}elseif($penghasilan > $umur && $penghasilan > $pekerjaan && $penghasilan > $ang_kel && $penghasilan > $status_rumah){
		$max = $penghasilan;
	}else{
		$max = $status_rumah;
	}

	//min arrange
	if($umur < $pekerjaan && $umur < $penghasilan && $umur < $ang_kel && $umur < $status_rumah){
		$min = $umur;
	}elseif ($pekerjaan < $umur && $pekerjaan < $penghasilan && $pekerjaan < $ang_kel && $pekerjaan < $status_rumah) {
		$min = $pekerjaan;
	}elseif ($ang_kel < $umur && $ang_kel < $penghasilan && $ang_kel < $pekerjaan && $ang_kel < $status_rumah) {
		$min = $ang_kel;
	}elseif($penghasilan < $umur && $penghasilan < $pekerjaan && $penghasilan < $ang_kel && $penghasilan < $status_rumah){
		$min = $penghasilan;
	}else{
		$min = $status_rumah;
	}

//bayes rules 
  
  $bayes = $max * $mean / $min;
	if($bayes >= 8){
		$res = "1";
	}else{
		$res = "0";
	}	

//insert to data training
$query="INSERT INTO tbl_data(id_customer,nama_cust,alamat,no_hp,umur,pekerjaan,penghasilan,jml_ang_kel,status_rumah,status_kelayakan) VALUES ('','$nama','$alamat','$no_hp','$umur','$pekerjaan','$penghasilan','$ang_kel','$status_rumah','$res')";

$input=mysql_query($query) or die (mysql_error());

$del = "UPDATE data_customer SET accept = '1' WHERE id_customer = '$id'";
$qr = mysql_query($del);


	echo "Berhasil menambahkan input data";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=input_data_training.php">';
   
?>