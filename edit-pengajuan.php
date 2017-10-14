<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="  ">
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
            <!-- Top Menu Items -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="data-customer.php"><i class="fa fa-fw fa-book"></i> Data Customer</a>
                    </li>
                    <li class="active">
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
                            Edit Data Pengajuan
                        </h1>
                        
                    </div>
                    <br><br><br>
                        <div class="content">
                            <?php

                                include 'Connections/koneksi.php';

                                $id_pengajuan  = $_GET['id_pengajuan'];

                                $edit       = "SELECT * FROM tbl_pengajuan p left join data_customer c on c.id_customer = p.id_customer left join tbl_barang b on b.id_barang = p.id_barang";
                                $hasil      = mysql_query($edit)or die(mysql_error());
                                $data       = mysql_fetch_array($hasil);
                            
                            ?>
                            <div class="col-md-10">
                                <br><br><br>
                                <form class="form-horizontal" action="#" method="POST">
                                    <input type="hidden" name="id_pengajuan" value="<?php echo $id_pengajuan ?>">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="nama_barang">Nama Customer :</label>
                                        <div class="col-sm-6">
                                            <input type="nama_cust" class="form-control" name="nama_cust" value="<?php echo $data['nama_cust']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Barang :</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="lama">
                                            <?php

                                                if ($data['id_barang'] == 1) {
                                                    echo '<option value="1" selected> '.$data['nama_barang'].' </option>';
                                                } else {
                                                    echo '<option value="1"> '.$data['nama_barang'].' </option>';
                                                }
                                                if ($data['id_barang'] == 2) {
                                                    echo '<option value="2" selected> '.$data['nama_barang'].' </option>';
                                                } else {
                                                    echo '<option value="2"> '.$data['nama_barang'].' </option>';
                                                }
                                                if ($data['id_barang'] == 3) {
                                                    echo '<option value="3" selected> '.$data['nama_barang'].' </option>';
                                                } else {
                                                    echo '<option value="3"> '.$data['nama_barang'].' </option>';
                                                }
                                            
                                            ?>
                                            </select>   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="rute">Lama Angsuran :</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="lama">
                                                <?php
                                                    if ($data['pekerjaan'] == 1) {
                                                        echo '<option value="1" selected> 1 Bulan </option>';
                                                    } else {
                                                        echo '<option value="1"> 1 Bulan </option>';
                                                    }
                                                    if ($data['pekerjaan'] == 2) {
                                                        echo '<option value="2" selected> 2 Bulan </option>';
                                                    } else {
                                                        echo '<option value="2"> 2 Bulan </option>';
                                                    }
                                                    if ($data['pekerjaan'] == 3) {
                                                        echo '<option value="3" selected> 3 Bulan </option>';
                                                    } else {
                                                        echo '<option value="3"> 3 Bulan </option>';
                                                    }
                                                    if ($data['pekerjaan'] == 4) {
                                                        echo '<option value="4" selected> 4 Bulan </option>';
                                                    } else {
                                                        echo '<option value="4"> 4 Bulan </option>';
                                                    }
                                                    if ($data['pekerjaan'] == 5) {
                                                        echo '<option value="5" selected> 5 Bulan </option>';
                                                    } else {
                                                        echo '<option value="5"> 5 Bulan </option>';
                                                    }
                                                    if ($data['pekerjaan'] == 6) {
                                                        echo '<option value="6" selected> 6 Bulan </option>';
                                                    } else {
                                                        echo '<option value="6"> 6 Bulan </option>';
                                                    }
                                                    if ($data['pekerjaan'] == 7) {
                                                        echo '<option value="7" selected> 7 Bulan </option>';
                                                    } else {
                                                        echo '<option value="7"> 7 Bulan </option>';
                                                    }
                                                    if ($data['pekerjaan'] == 8) {
                                                        echo '<option value="8" selected> 8 Bulan </option>';
                                                    } else {
                                                        echo '<option value="8"> 8 Bulan </option>';
                                                    }
                                                    if ($data['pekerjaan'] == 9) {
                                                        echo '<option value="9" selected> 9 Bulan </option>';
                                                    } else {
                                                        echo '<option value="9"> 9 Bulan </option>';
                                                    }
                                                    if ($data['pekerjaan'] == 10) {
                                                        echo '<option value="10" selected> 10 Bulan </option>';
                                                    } else {
                                                        echo '<option value="10"> 10 Bulan </option>';
                                                    }
                                                ?>
                                            <select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Jumlah angsuran :</label>
                                        <div class="col-sm-6">
                                            <input type="jml_angs" class="form-control" name="jml_angs" value="<?php echo $data['jml_angs']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-4"></label>
                                        <div class="col-sm-6" align="right">
                                            <button class="btn btn-info">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
                <!-- /.row -->