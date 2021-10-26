<?php include '../head.php';
    $email = $_POST['username'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['password2'];

    // connect to the db
    $conn = mysqli_connect('localhost','root','','cms');
    if(!$conn){
        die("Không thể kết nối");
    }

    $sql = "SELECT * FROM account WHERE email = $email";
    $result = mysqli_query($conn,$sql);
    
    echo $sql;
    echo $result;

    // if (!$result){
    //     echo 'chua co tai khoan voi email nay';
    // }else{
    //     echo 'da co tai khoan voi email nay';
    // }

    // if ($pass1 != $pass2){
    //     echo "2 passwords are not match.<br>";
    //     echo '<a href="register.php">try again?</a>';
    // }else{
    //     echo 'chua lam';
    // }
?>
<?php include '../foot.php' ?>