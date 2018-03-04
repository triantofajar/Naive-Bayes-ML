<?php
	
	include 'Connections/koneksi.php';

	$customer		= $_POST['customer'];
	$barang			= $_POST['barang'];
	$lama			= $_POST['lama'];
	$angsuran 		= $_POST['angsuran'];
	$tanggal		= $_POST['tanggal'];

	// var_dump($customer);

	$sql = mysql_query("SELECT * FROM data_customer WHERE id_customer = '$customer'");
	$data = mysql_fetch_array($sql);

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

		// echo $min;


	//bayes rules 
	  $bayes = $max * $mean / $min;
		if($bayes >= 8){
			$res = "1";
		}else{
			$res = "0";
		}	

		// echo $res;


	$cek = "SELECT * FROM tbl_pengajuan WHERE id_customer = '$customer'";
	$qr = mysql_query($cek) or die(mysql_error());
	$exist = mysql_num_rows($qr);
	// echo $exist;

	if($exist == 0){
		$query		= "INSERT INTO tbl_pengajuan (id_pengajuan,id_customer,id_user,id_barang,status,lama_angsuran,jml_angs,tgl_pengajuan) VALUES ('','$customer','1','$barang','$res','$lama','$angsuran','$tanggal')";

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