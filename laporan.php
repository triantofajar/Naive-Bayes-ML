<body onload="window.print()">
<link rel="stylesheet" href="css/BeatPicker.min.css"/>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/BeatPicker.min.js"></script>
<div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list"></i> Laporan Data Customer </h3> 
              </div>
              <div class="panel-body">
			<div class="table-responsive">
                  
    <form method="POST">
                            <table id="data_table" class="ui compact selectable striped celled table" cellspacing="0" width="100%">
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
                                <tbody>
                                    <?php

                                        include 'Connections/koneksi.php';

                                            $query = mysql_query("SELECT * FROM data_customer");

                                            if(mysql_num_rows($query) == 0){   
                                                echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';        
                                            }
                                            else
                                            {   
                                                $no = 1;                
                                                while($data = mysql_fetch_array($query)){

                                    ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $data['nama_cust']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td><?php echo $data['no_hp']; ?></td>
                                            <td align="center"><?php if ($data['umur']==1) echo "> 60 Tahun ";
                                                        elseif ($data['umur']==2) echo "41 - 60 Tahun ";
                                                        elseif ($data['umur']==3) echo "25 - 40 Tahun "; 
                                                        elseif ($data['umur']==4) echo "< 25 Tahun "; 
                                                ?>  
                                            </td>
                                            <td align="center"><?php if ($data['pekerjaan']==1) echo " PNS ";
                                                        elseif ($data['pekerjaan']==2) echo " Wiraswasta ";
                                                        elseif ($data['pekerjaan']==3) echo " Tidak Tetap "; 
                                                ?>  
                                            </td>
                                            <td align="center"><?php if ($data['penghasilan']==1) echo " < 1 juta ";
                                                        elseif ($data['penghasilan']==2) echo " 1 - 1,499 Juta ";
                                                        elseif ($data['penghasilan']==3) echo " 1,5 - 1,999 Juta ";
                                                        elseif ($data['penghasilan']==4) echo " 2 - 2,5 Juta ";
                                                        elseif ($data['penghasilan']==5) echo " > 2,5 Juta "; 
                                                ?>  
                                            </td>
                                            <td align="center"><?php if ($data['jml_ang_kel']==1) echo " > 5 orang ";
                                                        elseif ($data['jml_ang_kel']==2) echo " 4 - 5 orang ";
                                                        elseif ($data['jml_ang_kel']==3) echo " 1 - 3 orang ";
                                                ?>  
                                            </td>
                                            <td align="center"><?php if ($data['status_rumah']==1) echo " Kontrak ";
                                                        elseif ($data['status_rumah']==2) echo " Milik Keluarga ";
                                                        elseif ($data['status_rumah']==3) echo " Milik Sendiri ";
                                                ?>  
                                            </td>                               
                                    <?php
                                            echo '<td><a href=edit-customer.php?id_customer='.$data['id_customer'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                            echo '<td><a href=hapus_customer.php?id_customer='.$data['id_customer'].'><span class="glyphicon glyphicon-remove-sign"></a></td>';
                                            echo '</tr>';
                                            $no++;  
                                            }
                                        }           
                                                                
                                    ?>
                                </tbody>
                            </table>
                        </form>
                   </div>
              </div> 
       </body?       