<?php
session_start();
include_once("./app/file/connect.php");
?>

<html lang="en">
    <head>
        <script src="./asset/js/jQuery.js"></script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Perumahan Grand Rahmani</title>

        <!-- Bootstrap -->
        <link href="./asset/css/bootstrap.css" rel="stylesheet">
        <link href="./asset/css/mine.css" rel="stylesheet">
        <link href="./font-awesome-4.2.0/css/font-awesome.css" rel="stylesheet"/>
        <script type="text/javascript" async="" src="./asset/js/script.js"></script>
        <script src="./asset/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="./asset/js/jssor.slider.mini.js"></script>
    </head>
    <body  style="background-color:#ECECEC">
        <?php
        include_once './app/content/top_menu.php';
        ?>
        <div class="container-fluid">
            <div class="col-md-12">
                <?php
                include_once './app/file/controller.php';
                ?>

            </div>
            <div class="col-md-12" style="height: 20px; border-top: 2px solid #FFF;" id="footer">
                <a href="#" target="_blank"><i class="fa fa-facebook-square fa-1x" style="padding-top:2px;padding-right:10px;color:"></i></a>
                <a href="#" target="_blank"><i class="fa fa-twitter-square fa-1x"></i></a>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->


        <script src="./asset/js/bootstrap.js"></script>
    </body>
</html>