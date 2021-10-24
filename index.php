<?php include 'head.php' ?>
<div class = "loginpage row">
    
    <div class="cot1 col">
        <h1>GenZ.</h1>
        <h3>Create your own website, connect and share your article to the wide world.<h3>
    </div>

    <form class="cot2 col" action = "login_process.php" method = "POST">
        <div class="form-group">
            <input type="email" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter email">
        </div><br>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div><br>
        <button type="submit" class="loginbtn btn btn-primary">Log in</button><br>
        <a href="#">Forgotten password?</a><br><br>

        <a class = "btn btn-success" href="register.php">Create new account</a>
    </form>
</div>
 <?php include 'foot.php' ?>