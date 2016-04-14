<?php
include_once '../../app/file/connect.php';
$id = $_GET['id'];
$informasi = $_POST['informasi'];
    $query = mysql_query("update information set informasi='$informasi' where id=$id") or die(mysql_error());
    header("location:/add_information.php");
?>