<?php
	include 'Connections/koneksi.php';
	
    $id_customer    = $_POST['id_customer'];
	$nama	        = $_POST['nama_customer'];
    $alamat         = $_POST['alamat'];
    $no_hp          = $_POST['no_hp'];
    $umur           = $_POST['umur'];
    $pekerjaan      = $_POST['pekerjaan'];
    $penghasilan    = $_POST['penghasilan'];
    $jml_ang_kel    = $_POST['jml_ang_kel'];
	$status_rumah	= $_POST['rumah'];

	$update 	    = "UPDATE data_customer SET nama_cust='$nama', alamat='$alamat', no_hp='$no_hp', umur='$umur', pekerjaan='$pekerjaan', penghasilan='$penghasilan', jml_ang_kel='$jml_ang_kel', status_rumah='$status_rumah' WHERE id_customer='$id_customer'";
	$updatecustomer	= mysql_query($update)or die(mysql_error());
if ($updatecustomer)
    {
    	echo "<strong><center>Data Berhasil Diubah";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=data-customer.php">';
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