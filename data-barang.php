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
                            Data Barang
                        </h1>
                        
                    </div>
                    <br><br><br>
                        <div class="title">
                            <a href="javascript:;" data-toggle="collapse" data-target="#tambah"><i class="fa fa-fw fa-caret-down"></i>
                            Tambah Data Barang
                            </a>
                            <br><br>
                        </div>
                        <ul id="tambah" class="collapse">
                        <div class="content">
                            <form role="form" method="POST" action="simpan-barang.php" name="form" class="ui form segment" enctype="multipart/form-data">
                                <div class="col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Nama Barang" name="nama" required>
                                        </div>    
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Harga Barang" name="harga" required>
                                        </div>    
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Satuan" name="satuan" type="text" required>
                                        </div>    
                                    </div>
                                    <div class="col-lg-12">
                                        <label> Deskripsi Barang</label>
                                        <div class="form-group">
                                            <textarea name="deskripsi" cols="120"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="fileToUpload" type="file" id="fileToUpload">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan &nbsp;&nbsp;<span class="glyphicon glyphicon-send"></span></button>
                                <input type="hidden" name="MM_insert" value="form">
                            </form>
                        </div>
                </div>
                <!-- /.row -->
                <table id="data_table" class="ui compact selectable striped celled table" cellspacing="0" width="100%">
                    <thead>
                 
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Satuan</th>
                            <th>Deskripsi</th>
                            <th>Tools</th>
                        </tr>
                     
                    </thead>

                    <tbody>  
                        <?php
                            include 'Connections/koneksi.php';

                            $query = mysql_query("SELECT * FROM tbl_barang");

                                    if (mysql_num_rows($query) == 0){
                                        echo '<tr><td colspan="4">Tidak Ada Data yang tersedia</td></tr>';
                                    }
                                    else {
                                        $no = 1;
                                        while ($data = mysql_fetch_array($query)){
                                            echo '<tr>';
                                            echo '<td>'.$no.'</td>';
                                            echo '<td>'.$data['nama_barang'].'</td>';
                                            echo '<td>'.$data['harga'].'</td>';
                                            echo '<td>'.$data['satuan'].'</td>';
                                            echo '<td>'.$data['descr'].'</td>';
                                            echo '<td><a href=edit-barang.php?id_barang='.$data['id_barang'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                            echo '<td><a href=hapus_barang.php?id_barang='.$data['id_barang'].'><span class="glyphicon glyphicon-remove-sign"></a></td>';
                                            echo '</tr>';
                                            $no++;
                                        }
                                    }
                        ?>
                    </tbody>
                </table>
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