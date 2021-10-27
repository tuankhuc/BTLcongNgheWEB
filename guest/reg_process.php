<?php include '../head.php';
    $username = $_POST['username'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['password2'];

    // connect to the db
    $conn = mysqli_connect('localhost','root','','cms');
    if(!$conn){
        die("Không thể kết nối");
    }

    $sql = "SELECT * FROM account WHERE username = $username";
    $result = mysqli_query($conn,$sql);

    if (!$result){
        if ($pass1 != $pass2){
            echo "2 passwords do not match.";
        }else{
            $sql = "INSERT INTO account VALUES ('$username', '$pass1', '0')";
            $result = mysqli_query($conn, $sql);
            header("Location:../");
        }
    }else{
        echo "Username exist!";
    }
?>
<?php include '../foot.php' ?>