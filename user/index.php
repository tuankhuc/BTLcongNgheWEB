<?php
    session_start(); //Dịch vụ bảo vệ
    if(!isset($_SESSION["username"])){
        header("Location:../index.php");
    }
?>
<?php header("Location:blog") ?>