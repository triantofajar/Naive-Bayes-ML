<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kelayakan Customer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>    
            $(document).ready(function(){
                $("#selectall").click(function () { //untuk checkbox
                    if($(this).is(":checked")==false){ //jika checkbox tidak dicentang
                        $(".eachCase").prop("checked",false);
                    }else{
                        $(".eachCase").prop("checked",true); //jika checkbox dicentang
                    }
                });
             
                $(".eachCase").click(function(){ //untuk men-check list semua checkbox
                    if($(".eachCase").length == $(".eachCase:checked").length) {
                        $("#selectall").attr("checked", "checked");
                    } else {
                        $("#selectall").removeAttr("checked");
                    }
                }); 
                
                $("form input[ideko='hapus']").click(function() {  // jika tombol hapus diklik
                    var count_checked = $("[name='eachCase[]']:checked").length; // menghitung checkbox yang dicentang 
                    if(count_checked == 0) {
                        alert("Silahkan pilih data yang ingin dihapus");
                        return false;
                    }else{
                        confirm("Apakah anda yakin akan menghapus data-data yang anda pilih");
                    } 
                });
            });
        </script> 


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>
                            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="data-customer.php"><i class="fa fa-fw fa-book"></i> Data Customer</a>
                        </li>
                        <li class="active">
                            <a href="input_data_training.php"><i class="fa fa-fw fa-book"></i> Input Data Training</a>
                        </li>
                        <li>
                            <a href="data-barang.php"><i class="fa fa-fw fa-th"></i> Data Barang</a>
                        </li>
                        <li>
                            <a href="data-pengajuan.php"><i class="fa fa-fw fa-book"></i> Data Pengajuan</a>
                        </li>
                        <li>
                            <a href="manage-user.php"><i class="fa fa-fw fa-users"></i> Manage User</a>
                        </li>
                        <li>
                            <a href="laporan.php"><i class="fa fa-fw fa-book"></i> Laporan</a>
                        </li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Input Data Training
                        </h1>
                    </div>
                    <br><br><br>
                        
                <!-- /.row -->
                 <form method="POST" action="simpan_input_data_training.php" class="ui form segment">
                
                <table id="data_table" class="ui compact selectable striped celled table" cellspacing="0" width="100%">
                


                    <thead>
                        <tr>
                            <th></th>
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
                    </form>

                    <tbody>
                        <?php
                            include 'Connections/koneksi.php';

                            $query = mysql_query("SELECT * FROM data_customer WHERE accept = '0'");

                                    if (mysql_num_rows($query) == 0){
                                        echo '<tr><td colspan="7">Tidak Ada Data yang tersedia</td></tr>';
                                    }
                                    else {
                                        $no = 1;
                                        while ($data = mysql_fetch_array($query)){
                                            echo '<tr>';
                                                echo '<td><input type="checkbox" name="id" value="'.$data['id_customer'].'"></td>';
                                                echo '<td>'.$data['nama_cust'].'</td>';
                                                echo '<td>'.$data['alamat'].'</td>';
                                                echo '<td>'.$data['no_hp'].'</td>';
                                                echo '<td>'.$data['umur'].'</td>';
                                                echo '<td>'.$data['pekerjaan'].'</td>';
                                                echo '<td>'.$data['penghasilan'].'</td>';
                                                echo '<td>'.$data['jml_ang_kel'].'</td>';
                                                echo '<td>'.$data['status_rumah'].'</td>';
                                            echo '</tr>';
                                            $no++;

                                        }
                                    }

                        ?>

                    </tbody>
                </table>
                    <button type="submit" class="btn btn-primary">Simpan &nbsp;&nbsp;<span class="glyphicon glyphicon-send"></span></button>
              </form>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>