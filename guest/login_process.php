<?php
    session_start(); //Công ty dịch vụ Bảo vệ
    $username = $_POST['username'];
    $pass   = $_POST['password'];

    // connect to the db
    $conn = mysqli_connect('localhost','root','','cms');
    if(!$conn){
        die("Không thể kết nối");
    }

    $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $_SESSION["username"] = $username;
        $row = mysqli_fetch_assoc($result);
        if ($row['permission']){
            header("Location:../admin/");
        }else{
            header("Location:../user/");
        }
    }else{
        echo "sai tai khoan hoac mat khau";
    }

?>