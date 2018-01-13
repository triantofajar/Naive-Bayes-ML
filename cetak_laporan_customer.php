<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cetak Laporan</title>
<link rel="stylesheet" href="css/print.css"/>
<style type="text/css">
body,td,th {
	font-family: "Courier New", Courier, monospace;
}
</style>
</head>
<body>
<center>
<h3>LAPORAN DATA CUSTOMER</h3>
</center>
<hr>
<center>
  <thead>
    <tr>
        <th>No</th>
        <th>Nama customer</th>
        <th>Alamat</th>
        <th>No.Hp</th>
        <th>Umur</th>
        <th>Pekerjaan</th>
        <th>Penghasilan</th>
        <th>Jml Keluarga</th>
        <th>Status Rumah</th>
     </tr>
  </thead>
  <?php
  $no=1;
  while($data=mysql_fetch_array($sql))
	{ 	
  ?>
	<tbody>
		<?php

            include 'Connections/koneksi.php':

            $query = mysql_query("SELECT * FROM data_customer");

                if(mysql_num_rows($query) == 0){   
                echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';        
                }
                else
                {   
                $no = 1;                
                while($data = mysql_fetch_array($query)){

                ?>
	</tbody>
</table>	
 </center>
 
  
  <script>
window.print();
</script>
 </body>
</html> 