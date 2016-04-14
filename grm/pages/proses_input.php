<?php

include  ("../../app/file/connect.php");
	if(isset ($_POST['submit'])){		
		$kavling = $_POST['kavling'];
        $tipe = $_POST['tipe'];
        $luas = $_POST['luas'];
        $harga = $_POST['harga'];
		$status=$_POST['status'];		
        $query=mysql_query("insert into rumah value ('','$kavling','$tipe','$luas','$harga','$status')") or die(mysql_error());
        if ($query){
        	echo "<script>alert('Data berhasil di input')</script>";
        	header("location: add_properties.php");
        }else{
        	echo "gagal menginput data";
        }
		


	}
?>