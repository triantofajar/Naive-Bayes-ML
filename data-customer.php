<?php

    include 'Connections/koneksi.php';

?>
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
                                        <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                                    </li>
                                    <li class="active">
                                        <a href="data-customer.php"><i class="fa fa-fw fa-book"></i> Data Customer</a>
                                    </li>
                                    <li>
                                        <a href="data-barang.php"><i class="fa fa-fw fa-table"></i> Data Barang</a>
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
                            Data Customer
                        </h1>
                        
                    </div>
                    <br><br><br>
                        <div class="title">
                            <a href="javascript:;" data-toggle="collapse" data-target="#tambah"><i class="fa fa-fw fa-caret-down"></i>
                            Tambah Data Customer
                            </a>
                            <br><br>
                        </div>
                        <ul id="tambah" class="collapse">
                        <div class="content">
                            <form role="form" method="POST" action="simpan-customer.php" name="form" class="ui form segment">
                                <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="Nama" placeholder="Nama Customer" required>
                                        </div>    
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="no_hp" placeholder="No Handphone" required>
                                        </div>    
                                    </div>
                                    <div class="col-lg-12">
                                        <label> Alamat Rumah</label>
                                        <div class="form-group">
                                            <textarea name="alamat" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="umur">
                                                <option value="">Golongan Umur</option>
                                                <option value="4"> < 25 Tahun</option>
                                                <option value="3">25 - 40 Tahun</option>
                                                <option value="2">40 - 60 Tahun</option>
                                                <option value="1"> > 60 Tahun </option>
                                            </select>
                                        </div>    
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="pekerjaan">
                                                <option value="">Pekerjaan</option>
                                                <option value="3">PNS</option>
                                                <option value="2">Wiraswasta</option>
                                                <option value="1">Tidak Tetap</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="penghasilan">
                                                <option value="">Penghasilan</option>
                                                <option value="1"> < 1 Juta</option>
                                                <option value="2">1 - 1,499 Juta</option>
                                                <option value="3">1,5 - 1,999 Juta</option>
                                                <option value="4">2 - 2,5 Juta</option>
                                                <option value="5"> > 2,5 Juta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="jml">
                                                <option value="">Jml Anggota Keluarga</option>
                                                <option value="3">1 - 3 Orang</option>
                                                <option value="2">4 - 5 Orang</option>
                                                <option value="1"> > 5 Orang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="rumah">
                                            <option value="">Status Rumah</option>
                                            <option value="1">Kontrak</option>
                                            <option value="2">Milik Keluarga</option>
                                            <option value="3">Milik Sendiri</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan &nbsp;&nbsp;<span class="glyphicon glyphicon-send"></span></button>
                                <input type="hidden" name="MM_insert" value="form">
                            </form>
                        </div>
                </div>
                <!-- /.row -->
                <form method="POST">
                    <table id="data_table" class="ui compact selectable striped celled table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama customer</th>
                                <th>Alamat</th>
                                <th>No.Hp</th>
                                <th>Pekerjaan</th>
                                <th>Status Rumah</th>
                                <th colspan="2">Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include 'Connections/koneksi.php';

                                $query = mysql_query("SELECT * FROM data_customer");

                                        if (mysql_num_rows($query) == 0){
                                            echo '<tr><td colspan="7">Tidak Ada Data yang tersedia</td></tr>';
                                        }
                                        else {
                                            $no = 1;
                                            while ($data = mysql_fetch_array($query)){
                                                echo '<tr>';
                                                echo '<td>'.$no.'</td>';
                                                echo '<td>'.$data['nama_cust'].'</td>';
                                                echo '<td>'.$data['alamat'].'</td>';
                                                echo '<td>'.$data['no_hp'].'</td>';
                                                echo '<td>'.$data['pekerjaan'].'</td>';
                                                echo '<td>'.$data['status_rumah'].'</td>';
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