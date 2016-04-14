<?php
session_start();
if ($_SESSION['user1212'] != "admin") {
    header("location:./login.php");
}
?><?php
include_once("../../app/file/connect.php");
?>
<!DOCTYPE html>
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
                        <h1 class="page-header">Tambah Slider Galeri</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Slider
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form role="form" action="upload_slider.php" method="post" enctype="multipart/form-data">                                                                
                                            <div class="form-group">
                                                <label>Slider</label>
                                                <input type="file" name="gambar" required>
                                            </div>                                           
                                            <div class="form-group">
                                                <label>Judul</label>
                                                <input class="form-control"type="text" name="caption" required>
                                            </div>                                           
                                            <button type="submit" class="btn btn-default" name="upload">Upload</button>                                        
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <hr/>
                                <div class="row">
                                    <?php
                                    $dataperhalaman = 8;
                                    if (isset($_GET['page'])) {
                                        $halaman = $_GET['page'];
                                    } else
                                        $halaman = 1;

                                    $dataawal = ($halaman - 1) * $dataperhalaman;



                                    $link = "index.php?content=galery";
                                    $query_jumlah = mysql_query("select * from slider");
                                    $query_rumah = mysql_query("select * from slider limit $dataawal,$dataperhalaman");

                                    $jumlah_data = mysql_num_rows($query_jumlah) or die(mysql_error());

                                    $jumlah_halaman = ceil($jumlah_data / $dataperhalaman) or die(mysql_error());


                                    while ($fetch = mysql_fetch_array($query_rumah)) {
                                        ?>
                                        <div class="col-md-3">
                                            <div class="thumbnail">
                                                <img src="../../asset/img/slider/<?php echo $fetch['gambar'] ?>" style="height:200px;"alt="..." >
                                                <div class="caption">
                                                    <p><a href="#" class="btn btn-primary" role="button" onclick="myFunction(<?php echo $fetch['id']?>)">Hapus</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }

                                   
                                    ?>

                                </div>
                                <div class="row">
                                    <?php
                                    
                                     echo "<ul class=\"pagination\">";

                                    if ($halaman > 1) {
                                        echo "<li><a href=\"add_post.php?page=" . ($halaman - 1) . " \"><<<</a></li>";
                                    } else {
                                        echo "<li class=disabled><a href=#><<<</a></li>";
                                    }
                                    for ($a = 1; $a <= $jumlah_halaman; $a++) {
                                        if ($halaman == $a)
                                            $aktif = "class=\"active\"";
                                        else
                                            $aktif = "";
                                        echo "<li $aktif><a href=\"add_post.php?page=$a\">$a</a></li>";
                                    }

                                    if ($halaman < $jumlah_halaman)
                                        echo "<li><a href=\"add_post.php?page=" . ($halaman + 1) . " \">>>></a></li>";
                                    else
                                        echo "<li class=disabled><a href=#>>>></a></li>";
                                    echo "</ul>";
                                    ?>
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
        <script>
            function myFunction(a) {
                var x;
                if (confirm("Apakah anda benar-benar akan menghapus data ini!") == true) {
                        window.location.href = "./del_slider.php?id=" + a
                }
            }
        </script>
    </body>

</html>
