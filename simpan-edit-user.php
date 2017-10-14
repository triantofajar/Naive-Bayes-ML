<?php
	include 'Connections/koneksi.php';
	
    $id_user        = $_POST['id_user'];
	$username	    = $_POST['username'];
    $password       = $_POST['password'];
    $level          = $_POST['level'];
    $nama           = $_POST['nama'];
    

	$update 	    = "UPDATE tbl_user SET username='$username', password='$password', level='$level', nama='$nama' WHERE id_user='$id_user'";
	$updatecustomer	= mysql_query($update)or die(mysql_error());
if ($updatecustomer)
    {
    	echo "<strong><center>Data Berhasil Diubah";
    	//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=manage-user.php">';
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