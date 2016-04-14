<?php
include  ("../../app/file/connect.php");
	if(isset ($_POST['submit'])){
		$informasi=$_POST['informasi'];
		$query=mysql_query("update information set informasi = '$informasi' where id=1") or die(mysql_error());
        if ($query){
        	echo "<script>alert('Informasi berhasil di perbaharui');</script>";
        	header("location: index.php");
        }else{
        	echo "gagal menginput data";
        }
    } else {
        print "Upload failed!";
    }
?>