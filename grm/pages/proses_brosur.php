<?php
$namafile="Brosur.jpg";
if (move_uploaded_file($_FILES['gambar']['tmp_name'], "../../asset/img/brosur/$namafile")) {     
	header("location:./add_brosur.php");        
}else{
	echo "Salah";
}
?>