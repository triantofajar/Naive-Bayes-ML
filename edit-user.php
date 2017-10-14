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
                            Edit Manage User
                        </h1>
                        
                    </div>
                    <br><br><br>
                        <div class="content">
                            <?php

                            include 'Connections/koneksi.php';

                            $id_user  = $_GET['id_user'];

                            $edit       = "SELECT id_user, username, password, level, nama FROM tbl_user WHERE id_user = '$id_user'";
                            $hasil      = mysql_query($edit)or die(mysql_error());
                            $data       = mysql_fetch_array($hasil);
                            ?>
            <div class="col-md-10">
    <h3>
        <div align="center">Edit User</div>
    </h3>
    <br><br><br>
    <form class="form-horizontal" action="simpan-edit-user.php" method="POST">
        <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
        <div class="form-group">
            <label class="control-label col-sm-4" for="username">Username :</label>
            <div class="col-sm-6">
                <input type="username" class="form-control" name="username" value="<?php echo $data['username']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="password">Password :</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password" value="<?php echo $data['password']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4">level user :</label>
            <div class="col-sm-6">
                <select class="form-control" name="level">
                    <?php
                        if ($data['level'] == admin) {
                            echo '<option value="admin" selected> Admin </option>';
                        } else {
                            echo '<option value="admin"> Admin </option>';
                        }
                        if ($data['level'] == surveyor) {
                            echo '<option value="surveyor" selected> Surveyor </option>';
                        } else {
                            echo '<option value="surveyor"> Surveyor </option>';
                        }
                        if ($data['level'] == owner) {
                            echo '<option value="owner" selected> Owner </option>';
                        } else {
                            echo '<option value="owner"> Owner </option>';
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="password">Nama :</label>
            <div class="col-sm-6">
                <input type="nama" class="form-control" name="nama" value="<?php echo $data['nama']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-6" align="right">
                <button class="btn btn-danger">Update</button>
            </div>
        </div>
    </form>
</div>