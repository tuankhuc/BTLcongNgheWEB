<?php
    session_start();
    // connect to the db
    $conn = mysqli_connect('localhost','root','','cms');
    if(!$conn){
        die("Không thể kết nối");
    }

    $nguoiGui = $_SESSION["username"];
    $nguoiNhan = $_SESSION["nguoiNhan"];
    $content = $_POST['content'];

    $sql = "INSERT INTO msg VALUES ('1', '$nguoiGui', '$nguoiNhan','$content')";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    
    header("Location:msg_ing.php");
?>