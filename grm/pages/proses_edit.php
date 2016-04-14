<?php

include_once '../../app/file/connect.php';
$id = $_GET['id'];
$kavling = $_POST['kavling'];
$tipe = $_POST['tipe'];
$luas = $_POST['luas'];
$harga = $_POST['harga'];
$status = $_POST['status'];
    $query = mysql_query("update rumah set kavling='$kavling',tipe='$tipe',luas='$luas',harga='$harga',status='$status' where id=$id") or die(mysql_error());
    header("location:./tables.php");
?>