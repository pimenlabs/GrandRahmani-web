<?php
if(isset($_GET['content'])){
    $content=$_GET['content'];
    
    if($content=="home"){
        include_once './app/content/home.php';
    }elseif ($content=="galery"){
        include_once './app/content/galery.php';
    }elseif ($content=="status"){
        include_once './app/content/status.php';
    }elseif ($content=="contact"){
            include_once './app/content/contact.php';
    }elseif ($content=="login"){
        include_once './login_user.php';
    }
    elseif($content=="proses_contact"){
        include_once './app/content/proses_contact.php';
    }
    elseif ($content=="site_plan") {
        include_once './app/content/site_plan.php';
    }elseif($content=="thanks"){
        include_once './app/content/thanks.php';
    }

    else{
        include_once './app/content/notfound.php';
    }    
}else 
    include_once './app/content/home.php';


?>