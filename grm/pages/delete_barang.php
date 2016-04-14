<?php
include_once '../../app/file/connect.php';
$id=$_GET['id'];
$query=  mysql_query("delete from rumah where id = $id");

header("location:./tables.php");

?>