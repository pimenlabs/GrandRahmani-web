<?php
session_start();
if(isset($_POST['submit'])){
    $pass=md5($_POST['password']);
    $name=$_POST['name'];
    $query=  mysql_query("select * from admin where name='$name' and pass='$pass'")or die(mysql_error());
    if (mysql_num_rows($query)!=0){
        $_SESSION['user1212']=$name;
        header("location:index.php");
    }else
        $error = "<div class=\"alert alert-danger\">Anda memasukkan user name atau password yang salah!!!</div>";
}
?>
