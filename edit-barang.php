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
                            Edit Data Barang
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Edit Data Barang
                            </li>
                        </ol>
                    </div>
                    <br><br><br>
                        <div class="content">
                            <?php

                            include 'Connections/koneksi.php';

                            $id_barang  = $_GET['id_barang'];

                            $edit       = "SELECT id_barang, nama_barang, harga, satuan, descr FROM tbl_barang WHERE id_barang = '$id_barang'";
                            $hasil      = mysql_query($edit)or die(mysql_error());
                            $data       = mysql_fetch_array($hasil);
                            ?>

                            <div class="col-md-10">
                                <h3>
                                    <div align="center">Edit Barang</div>
                                </h3>
                                <br><br><br>
                                <form class="form-horizontal" action="simpan-edit-barang.php" method="POST">
                                    <input type="hidden" name="id_barang" value="<?php echo $id_barang ?>">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="nama_barang">Nama Barang :</label>
                                        <div class="col-sm-6">
                                            <input type="nama_barang" class="form-control" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="jadwal">Harga :</label>
                                        <div class="col-sm-6">
                                            <input type="harga" class="form-control" name="harga" value="<?php echo $data['harga']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="rute">Satuan :</label>
                                        <div class="col-sm-6">
                                            <input type="satuan" class="form-control" name="satuan" value="<?php echo $data['satuan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="rute">Deskripsi :</label>
                                        <div class="col-sm-6">
                                            <input type="descr" class="form-control" name="descr" value="<?php echo $data['descr']; ?>">
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