<?php
session_start();
if($_SESSION['user1212']!="admin"){
    header("location:./pages/login.php");
    
}else {
    header("location:./pages/login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="0;url=pages/index.html">
<title>Welcome BROOO!!!</title>
<a href="pages/login.php"></a>

</head>
<body>
Go to <a href="pages/index.html">/pages/login.html</a>
</body>
</html>
