<?php
	include 'Connections/koneksi.php';
	
	$id             = $_POST['id_pengajuan'];
    $nama	        = $_POST['nama_cust'];
    $barang         = $_POST['nama_barang'];
    $lama_angsuran  = $_POST['lama'];
    $jumlah_angsuran= $_POST['jml_angs'];

    // var_dump($nama,$barang,$lama_angsuran,$jumlah_angsuran);
    // die();

    // var_dump($nama);

	$update 	    = "UPDATE tbl_pengajuan SET 
                       id_customer = '$nama', id_barang = '$barang', lama_angsuran='$lama_angsuran', jml_angs='$jumlah_angsuran' 
                      WHERE id_pengajuan='$id'";
	
    $updatecustomer	= mysql_query($update)or die(mysql_error());


if ($updatecustomer)
    {
    	echo "<strong><center>Data Berhasil Diubah";
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=data-pengajuan.php">';
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