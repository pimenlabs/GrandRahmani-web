<?php
include_once '../../app/file/connect.php';
$id=$_GET['id'];


$query=  mysql_query("delete from slider where id=$id limit 1")or die(mysql_error());

header("location:add_post.php");


?>