<?php

if(isset($_POST['submit'])){
    $pass=md5(mysql_real_escape_string($_POST['password']));
    $name=mysql_real_escape_string($_POST['name']);
    $query=  mysql_query("select * from user where name='$name' and pass='$pass'")or die(mysql_error());
    if (mysql_num_rows($query)!=0){
        $_SESSION['user2323']=$name;
        header("location:index.php");
    }else
        $error = "<div class=\"alert alert-danger\">Anda memasukkan user name atau password yang salah!!!</div>";
    
    
    
    
}

?>
