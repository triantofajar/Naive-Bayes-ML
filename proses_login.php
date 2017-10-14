<?php

	include 'Connections/koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query	  = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";

	$login	  = mysql_query($query)or die(mysql_error());
	$record	  = mysql_num_rows($login);

	$data	  = mysql_fetch_array($login);

	$username = $data['username'];
	$password = $data['password'];

	if ($record > 0 ) {

		session_start();

		$_SESSION['username'] = $username;
		$_SESSION['level'] 	  = $data['level'];
		$_SESSION['nama'] 	  = $data['nama'];
		$_SESSION['id'] 	  = session_id();

		if ($data['level']=='admin'){
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php">';
		}
		elseif ($data['level']=='owner') {
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=owner.php">';
		}
		elseif ($data['level']=='surveyor') {
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=surveyor.php">';
		}

	}


?>