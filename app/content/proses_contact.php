<?php
include  ("../file/connect.php");	
		$name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];
		$query=mysql_query("insert into contact values('','$name','$email','$phone','$message')") or die(mysql_error());
        if ($query){
        	echo "<script>alert('Data berhasil disimpan');</script>";
        	header("location: index.php");
        }else{
        	echo "gagal menginput data";
        }

?>