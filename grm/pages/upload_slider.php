<?php
include_once ("../../app/file/connect.php");
if(isset($_POST['upload'])){
	$caption=$_POST['caption'];
	$filename=$_FILES['gambar']['name'];
	if(move_uploaded_file($_FILES['gambar']['tmp_name'], "../../asset/img/slider/$filename")){
		$q=mysql_query("insert into slider values('','$filename','$caption')")or die(mysql_error());
		if($q){
			echo "<script>alert('Data berhasil ditambahkan')</script>";			
			header("location:./index.php");			
		}else {
			echo "maaf data tidak dapat dimasukkan";
		}
	}else {
		echo "Maff!!! gambar tidak dapat di upload";
	}
}
?>