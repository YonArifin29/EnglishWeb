<?php

    $page = $_GET['page'];
    if($page == 'registrasi') {
        include("pages/$page.php");
    } else {
        if ($_SESSION['Id']=="") {
            include("pages/login.php");
        } else {
            if (file_exists("pages/$page.php")) {
                include("pages/$page.php");
            } else {
                header("location:index.php?page=beranda");
            }
        }
    }
    include("template/$template.php");   
?>