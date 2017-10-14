<?php

	include "Connections/koneksi.php";

	$username=$_POST['username'];
	$password=$_POST['password'];
	$level=$_POST['level'];
	$nama=$_POST['nama'];

	$query = "INSERT INTO tbl_user (id_user, username, password, level, nama) VALUES ('','$username','$password','$level','$nama')";
	$input = mysql_query($query) or die (mysql_error());

	if ($input) {
		echo "BERHASIL MENAMBAH DATA USER";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=manage-user.php">';
	}

?>