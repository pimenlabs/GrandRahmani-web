<?php

?>
<html lang="en">
<?php
include_once './app/file/connect.php';
$error="";



include_once './proses_login.php';


?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.css" rel="stylesheet"> 

    <!-- MetisMenu CSS -->

    <!-- Custom CSS -->
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<br/>
<br/>
<br/>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="#" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User Name" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" name="submit" style="background-color:#EB0101">Login</button>
                            </fieldset>
                            <br/>
                        </form>
                                                <?php 
                        echo $error;
                        ?>
 
                   </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="./asset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./asset/js/bootstrap.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    
</body>

</html>
