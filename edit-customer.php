<?php
    
    include 'Connections/koneksi.php';

?>
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
                            Edit Data Customer
                        </h1>
                        
                    </div>
                    <br><br><br>
                        <div class="content">
                            <?php

                                include 'Connections/koneksi.php';

                                $id_customer  = $_GET['id_customer'];

                                $edit         = "SELECT id_customer, nama_cust, alamat, no_hp, umur, pekerjaan, penghasilan, jml_ang_kel, status_rumah FROM data_customer WHERE id_customer = '$id_customer'";
                                $hasil        = mysql_query($edit)or die(mysql_error());
                                $data         = mysql_fetch_array($hasil);
                            ?>

<div class="col-md-10">
    <br><br><br>
    <form class="form-horizontal" action="simpan-edit-customer.php" method="POST">
        <input type="hidden" name="id_customer" value="<?php echo $id_customer ?>">
        <div class="form-group">
            <label class="control-label col-sm-4" for="nama_customer">Nama Customer :</label>
            <div class="col-sm-6">
                <input type="nama_customer" class="form-control" name="nama_customer" value="<?php echo $data['nama_cust']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="alamat">Alamat Rumah :</label>
            <div class="col-sm-6">
                <input type="alamat" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="ho_hp">No. Handphone</label>
            <div class="col-sm-6">
                <input type="no_hp" class="form-control" name="no_hp" value="<?php echo $data['no_hp']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="ho_hp">Umur :</label>
            <div class="col-sm-6">
            <select class="form-control" name="umur">
                    <?php
                        if ($data['umur'] == 1) {
                            echo '<option value="1" selected> > 60 Tahun </option>';
                        } else {
                            echo '<option value="1"> > 60 Tahun </option>';
                        }
                        if ($data['umur'] == 2) {
                            echo '<option value="2" selected> 40 - 60 Tahun </option>';
                        } else {
                            echo '<option value="2"> 40 - 60 Tahun </option>';
                        }
                        if ($data['umur'] == 3) {
                            echo '<option value="3" selected> 25 - 40 Tahun </option>';
                        } else {
                            echo '<option value="3"> 25 - 40 Tahun </option>';
                        }
                        if ($data['umur'] == 4) {
                            echo '<option value="4" selected> < 25 Tahun </option>';
                        } else {
                            echo '<option value="4"> < 25 Tahun </option>';
                        }
                    ?>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="pekerjaan">Pekerjaan</label>
            <div class="col-sm-6">
                <select class="form-control" name="pekerjaan">
                    <?php
                        if ($data['pekerjaan'] == 1) {
                            echo '<option value="1" selected> Tidak Tetap </option>';
                        } else {
                            echo '<option value="1"> > Tidak Tetap </option>';
                        }
                        if ($data['pekerjaan'] == 2) {
                            echo '<option value="2" selected> Wiraswasta </option>';
                        } else {
                            echo '<option value="2"> Wiraswasta </option>';
                        }
                        if ($data['pekerjaan'] == 3) {
                            echo '<option value="3" selected> PNS </option>';
                        } else {
                            echo '<option value="3"> PNS </option>';
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="penghasilan">penghasilan</label>
            <div class="col-sm-6">
                <select class="form-control" name="penghasilan">
                    <?php
                        if ($data['penghasilan'] == 1) {
                            echo '<option value="1" selected> < 1 Juta </option>';
                        } else {
                            echo '<option value="1"> < 1 Juta </option>';
                        }
                        if ($data['penghasilan'] == 2) {
                            echo '<option value="2" selected> 1 - 1,499 Juta </option>';
                        } else {
                            echo '<option value="2"> 1 - 1,499 Juta </option>';
                        }
                        if ($data['penghasilan'] == 3) {
                            echo '<option value="3" selected> 1,5 - 1,999 Juta </option>';
                        } else {
                            echo '<option value="3"> 1,5 - 1,999 Juta </option>';
                        }
                        if ($data['penghasilan'] == 4) {
                            echo '<option value="4" selected> 2 - 2,5 Juta </option>';
                        } else {
                            echo '<option value="4"> 2 - 2,5 Juta </option>';
                        }
                        if ($data['penghasilan'] == 5) {
                            echo '<option value="5" selected> > 2,5 Juta </option>';
                        } else {
                            echo '<option value="5"> > 2,5 Juta </option>';
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="jml_ang_kel">Jumlah Anggota Keluarga</label>
            <div class="col-sm-6">
            <select class="form-control" name="jml_ang_kel">
                <?php
                    if ($data['penghasilan'] == 1) {
                        echo '<option value="1" selected> 1 - 3 Orang </option>';
                    } else {
                        echo '<option value="1"> 1 - 3 Orang </option>';
                    }
                    if ($data['penghasilan'] == 2) {
                        echo '<option value="2" selected> 4 - 5 Orang </option>';
                    } else {
                        echo '<option value="2"> 4 - 5 Orang </option>';
                    }
                    if ($data['penghasilan'] == 3) {
                        echo '<option value="3" selected> 1 - 3 Orang </option>';
                    } else {
                        echo '<option value="3"> 1 - 3 Orang </option>';
                    }
                ?>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="status_rumah">Status Rumah</label>
            <div class="col-sm-6">
            <select class="form-control" name="rumah">
                <?php
                    if ($data['penghasilan'] == 1) {
                        echo '<option value="1" selected> Kontrak </option>';
                    } else {
                        echo '<option value="1"> Kontrak </option>';
                    }
                    if ($data['penghasilan'] == 2) {
                        echo '<option value="2" selected> Milik Keluarga </option>';
                    } else {
                        echo '<option value="2"> Milik Keluarga </option>';
                    }
                    if ($data['penghasilan'] == 3) {
                        echo '<option value="3" selected> Milik Sendiri </option>';
                    } else {
                        echo '<option value="3"> Milik Sendiri </option>';
                    }
                ?>
            </select>
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