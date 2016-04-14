<?php
include_once '../../app/file/connect.php';
$id = $_GET['id'];
$judul = $_POST['judul'];
$text = $_POST['text'];
$namafile=$_FILES['gambar']['name'];
if ($_FILES['gambar']['name'] == "") {
    $query = mysql_query("update home set judul='$judul',text='$text' where id='$id'") or die(mysql_error());
   header("location:./add_home.php");
} else {
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], "../../asset/img/home/$namafile")) {
        $query = mysql_query("update home set judul='$judul',gambar='$namafile',text='$text' where id='$id'") or die(mysql_error());
   header("location:./add_home.php");        
    }
}
?>