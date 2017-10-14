<?php include 'Connections/koneksi.php'; ?>

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
                <a class="navbar-brand" href="index.html">Surveyor</a>
            </div>
                            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav side-nav">
                                <h4>Menu Surveyor</h4>
                                <hr>
                                <li class="active">
                                    <a href="perhitungan-kelayakan.php"><i class="fa fa-fw fa-plus"></i> Perhitungan Kelayakan</a>
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
                            Kelayakan
                        </h1>
                        
                    </div>
                    <br><br><br>
                    <?php

                    if(isset($_POST['cari'])){

                        $nama = $_POST['nama'];


                        header('location:lihat-kelayakan.php?nama='.$nama.'');

                    }


                    ?>

                    <div class="col-md-4">
                    <form action="" method="POST">
                        <table>
                            <tr>
                            <td><input type="text" name="nama" placeholder="Cari Nama Customer" class="form-control" id="auto"></td>
                            <td><input type="submit" class="btn btn-primary" name="cari" value="Cari"></td>
                        </tr>
                        </table>
                    </form>  
                    </div>
                 

                <?php 

                if(isset($_GET['nama'])){

                    $name = $_GET['nama'];
                ?>

                <!-- /.row -->

                <form id="form-bayes">
                <br><br><br><br>
                <table id="data_table" class="ui compact selectable striped celled table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID Customer</th>
                            <th>Customer</th>
                            <th>Alamat</th>
                            <th>No Handphone</th>
                            <th>Umur</th>
                            <th>Pekerjaan</th>
                            <th>Penghasilan</th>
                            <th>Jumlah Keluarga</th>
                            <th>Status Rumah</th>
                            <th>Status Kelayakan</th>
                        </tr>
                    </thead>
                    <?php 


                    $sqlData = "SELECT * FROM tbl_data WHERE nama_cust='$name' ";
                    $query = mysql_query($sqlData);
                    while($data = mysql_fetch_array($query)){

                    ?>
                    <tbody>
                        <td><?php echo $data['id_customer']; ?></td>
                        <td><?php echo $data['nama_cust']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['no_hp']; ?></td>
                        <td><input type="hidden" name="umur" value="<?php echo $data['umur']; ?>"><?php echo $data['umur']; ?></td>
                        <td><input type="hidden" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>"><?php echo $data['pekerjaan']; ?></td>
                        <td><input type="hidden" name="penghasilan" value="<?php echo $data['penghasilan']; ?>"><?php echo $data['penghasilan']; ?></td>
                        <td><input type="hidden" name="jml_ang_kel" value="<?php echo $data['jml_ang_kel']; ?>"><?php echo $data['jml_ang_kel']; ?></td>
                        <td><input type="hidden" name="status_rumah" value="<?php echo $data['status_rumah']; ?>"><?php echo $data['status_rumah']; ?></td>
                        <td><input type="submit" value="Status Kelayakan" class="btn btn-danger"></td>
                        
                    </tbody>
                    <?php } ?>
                </table>
                </form>                

                <?php }//end isset ?>
            </div>
            <!-- /.container-fluid -->
            <div class="row">
                <!-- Modal -->
                  <div class="modal fade" id="modal-hasil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                        <center><h4><strong>Status Kelayakan</strong></h4></center>
                          <h4 class="form-wording" id="myModalLabel"></h4>
                        </div>
                        <div class="modal-body">
                            <center><h5><b>Status: <span class="status"></span></b></h5></center>
                            <br> 
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- End Modals-->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 
    <script type="text/javascript">

        

          $("#form-bayes").submit(function(e) {
            var url = "http://0.0.0.0:5000/api/v1.0/bayes"; 
            var data = $("#form-bayes").serialize()
            console.log("data", data)
            $.ajax({
                      type: "POST",
                      url: url,
                      data: data, // serializes the form's elements.
                      success: function(data)
                      {
                         $('#modal-hasil').modal('show');
                             if (data.response.status == 1) {
                                $('.status').html("<strong>Layak</strong");
                            }else{
                                 $('.status').html("<strong>Tidak Layak</strong");
                            }
                        },
                      error: function (request, status, error) {
                          alert(request.responseText);
                      }
                     });

          
            e.preventDefault(); // avoid to execute the actual submit of the form.
          }); 

    </script>

</body>

</html>