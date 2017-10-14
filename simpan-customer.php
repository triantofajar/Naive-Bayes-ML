<?php

include "Connections/koneksi.php";

$Nama=$_POST['Nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$umur=$_POST['umur'];
$pekerjaan=$_POST['pekerjaan'];
$penghasilan=$_POST['penghasilan'];
$jml=$_POST['jml'];
$rumah=$_POST['rumah'];

$query="INSERT INTO data_customer(id_customer,nama_cust,alamat,no_hp,umur,pekerjaan,penghasilan,jml_ang_kel,status_rumah) VALUES ('','$Nama','$alamat','$no_hp','$umur','$pekerjaan','$penghasilan','$jml','$rumah')";
$input=mysql_query($query) or die (mysql_error());

if ($input){
	echo "Berhasil menambahkan data";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=data-customer.php">';
}   
?>