<?php
include_once ("../../app/file/connect.php");
if(isset($_POST['upload'])){
    $tipe=$_POST['tipe'];
    $filename=$_FILES['gambar']['name'];
    if(move_uploaded_file($_FILES['gambar']['tmp_name'], "../../asset/img/gambar/$filename")){
        $q=mysql_query("insert into galeri values('','$tipe','$filename')")or die(mysql_error());
        if($q){
            echo "<script>alert('Data berhasil ditambahkan')</script>";         
            header("location:./galery.php");         
        }else {
            echo "maaf data tidak dapat dimasukkan";
        }
    }else {
        echo "Maff!!! gambar tidak dapat di upload";
    }
}
?>