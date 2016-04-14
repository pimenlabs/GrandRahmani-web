<?php
session_start();
if ($_SESSION['user1212'] != "admin") {
    header("location:./login.php");
}
?><!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard Admin</title>

        <!-- Bootstrap Core CSS -->
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../../index.php">Grand Rahmani</a>
                </div>
                <!-- /.navbar-header -->

                
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <?php
                    include_once("left_menu.php");
                    ?>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tabel</h1>  
                <!-- /.row -->
                <div class="row">   
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tabel Properti
                            </div>                        

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Kavling</th>
                                                <th>Tipe</th>
                                                <th>Luas</th>
                                                <th>Harga</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                            <?php
                                            include '../../app/file/connect.php';
                                            $s = mysql_query("SELECT * from rumah");
                                            while ($r = mysql_fetch_array($s)) {
                                                if ($r['status'] == "1") {
                                                    $warna = 'green';
                                                } elseif ($r['status'] == "2") {
                                                    $warna = 'rgb(255, 194, 0)';
                                                } elseif ($r['status'] == "3") {
                                                    $warna = 'red';
                                                }
                                                ?>
                                                <tr style="color: <?php echo $warna; ?>;font-weight:bold  ">
                                                    <td><?php echo $r['kavling']; ?></td>
                                                    <td><?php echo $r['tipe']; ?></td>
                                                    <td><?php echo $r['luas'] ?></td>
                                                    <td><?php echo $r['harga'] ?></td>
                                                    <td><?php
                                                        if ($r['status'] == 1){
                                                            echo "Available";
                                                        }elseif ($r['status'] == 2) {
                                                            echo "Booking";
                                                        }else
                                                            echo "Sold";
                                                    ?></td>
                                                    <td align="center"> 
                                                        <b>
                                                            <a href="edit_rumah.php?id=<?php echo $r['id'] ?>"> <span class="glyphicon glyphicon-wrench" title="edit"></span> </a>
                                                            <a href="#" onclick="myFunction(<?php echo $r['id'] ?>)"><span class="glyphicon glyphicon-remove-circle" title="hapus"></span> </a>
                                                        </b>
                                                    </td>
                                                </tr>
                                            <?php } ?>                                        
                                        </tbody>
                                    </table>
                                </div>

                                <!-- /.table-responsive -->
                                <div class="well">
                                    <h4>Informasi Tambahan (Catatan)</h4>
                                    <p>
                                        <?php   
                                            include '../../app/file/connect.php';
                                            $z = mysql_query("SELECT * FROM information");
                                            $x = mysql_fetch_array($z);
                                            echo $x['informasi'];
                                        ?> 
                                    </p>                            
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
                                                    $(document).ready(function () {
                                                        $('#dataTables-example').DataTable({
                                                            responsive: true
                                                        });
                                                    });
        </script>
        <script>
            function myFunction(a) {
                var x;
                if (confirm("Apakah anda benar-benar akan menghapus data ini!") == true) {
                    window.location.href = "./delete_barang.php?id=" + a
                }
            }
        </script>
    </body>

</html>
