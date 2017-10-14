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
                <a class="navbar-brand" href="index.html">Owner</a>
            </div>
                            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav side-nav">
                                    <h4>Menu Owner</h4>
                                    <hr>
                                    <li class="active">
                                        <a href="data-customer.php"><i class="fa fa-fw fa-book"></i> Data Customer</a>
                                    </li>
                                    <li>
                                        <a href="lihat-kelayakan.php"><i class="fa fa-fw fa-list"></i> Lihat Kelayakan</a>
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
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Data Customer
                            </li>
                        </ol>
                    </div>
                    <br><br><br>
                        
                <!-- /.row -->
                <table id="data_table" class="ui compact selectable striped celled table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama customer</th>
                            <th>Alamat</th>
                            <th>No.Hp</th>
                            <th>Pekerjaan</th>
                            <th>Status Rumah</th>
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