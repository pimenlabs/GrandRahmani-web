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
                        <h1 class="page-header">Edit Rumah</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <?php
                include_once '../../app/file/connect.php';

                $id = $_GET['id'];
                $query = mysql_query("select * from rumah where id=$id");
                $fetch=  mysql_fetch_array($query);
                ?>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Properties
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" action="proses_edit.php?id=<?php echo $id?>" method="post">
                                            <div class="form-group">                                        
                                                <label>Kavling</label>
                                                <input class="form-control" placeholder="Masukkan Kavling" name="kavling" value="<?php echo $fetch['kavling']?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select class="form-control" name="tipe" required>
                                                    <option selected  value="">-Pilih-</option>
                                                    <option value="36" <?php if ($fetch['tipe']=="36") echo "selected"?> >Type 36</option>
                                                    <option value="38" <?php if ($fetch['tipe']=="38") echo "selected"?> >Type 38</option>
                                                    <option value="45" <?php if ($fetch['tipe']=="45") echo "selected"?> >Type 45</option>
                                                    <option value="60" <?php if ($fetch['tipe']=="60") echo "selected"?> >Type 60</option>
                                                    <option value="Design Khusus" <?php if ($fetch['tipe']=="Design Khusus") echo "selected"?> >Design Khusus</option>
                                                </select>
                                            </div>
                                            <div class="form-group">                                        
                                                <label>Luas</label>
                                                <input class="form-control" placeholder="Masukkan Luas" name="luas" value="<?php echo $fetch['luas']?>" required>
                                            </div>
                                            <div class="form-group">                                        
                                                <label>Harga</label>
                                                <input class="form-control" placeholder="Masukkan Harga" name="harga" value="<?php echo $fetch['harga']?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="status" id="optionsRadios1" value="1" <?php if ($fetch['status']==1) echo "checked"?> required>Available
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="status" id="optionsRadios2" value="2" <?php if ($fetch['status']==2) echo "checked"?> required>Booking
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="status" id="optionsRadios3" value="3" <?php if ($fetch['status']==3) echo "checked"?> required>Sold
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-default" name="submit">Submit</button>                                            
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
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

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

    </body>

</html>
