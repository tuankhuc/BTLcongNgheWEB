<?php 
        session_start(); //Công ty dịch vụ Bảo vệ
?>
<?php include '../../head.php' ?>

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

    $sql = "SELECT * FROM account";
    $result = mysqli_query($conn, $sql);
?>

<!-- msg  -->
<h1>Choose the one who you wanna chat:</h1>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Choose one of 'em plz.
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <?php
      while ($row = mysqli_fetch_assoc($result)){
          if ($row['username'] != $_SESSION["username"]){
              echo '<li><a class="dropdown-item" href="msg_ing.php?id='.$row['username'].'">'.$row['username'].'</a></li>';
          }
      }
    ?>
  </ul>
</div>



<?php include '../../foot.php' ?>