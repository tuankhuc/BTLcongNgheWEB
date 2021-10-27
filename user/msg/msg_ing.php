<?php 
    session_start();
    include '../../head.php'; 
?>

<!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">GenZ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="../blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../msg">Messages</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<?php
    // connect to the db
    $conn = mysqli_connect('localhost','root','','cms');
    if(!$conn){
        die("Không thể kết nối");
    }
    $nguoiGui = $_SESSION["username"];
    $_SESSION["nguoiNhan"] = $_GET['id'];
    
    // $sql = "SELECT * FROM msg WHERE (sendID = '$nguoiGui' and receiveID = '$nguoiNhan') or(sendID = '$nguoiNhan' and receiveID = '$nguoiGui')";
    $sql = "SELECT * FROM msg";
    $result = mysqli_query($conn, $sql);

    echo "<h2>Ban dang nhan tin</h2>";
    echo "--------------------------------------------------";
?>


<!-- interface -->
<div class = "col-4">
    <?php
    if (mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            if ($row['sendID'] == $nguoiGui){
                echo '<div class="chatHover_out" style="background-color: #0084FF; text-align: right; ">';
                echo $row['content'];
                echo '</div>';
            }else{
                echo '<div class="chatHover_in">';
                echo $row['content'];
                echo '</div>';
            }
        }
    }
    ?>
    <form action = "msg_process.php?id=" method = "POST">
        <input type="text" class="form-control" placeholder="Type something..." name= "content">
    </form>
</div>


<?php include '../../foot.php' ?>