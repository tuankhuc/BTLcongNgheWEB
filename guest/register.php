<?php include '../head.php' ?>
    <a href="../index.php"><i class="fas fa-arrow-left"></i></a> Back
    <form action = "reg_process.php" method = "POST">,
      
        <div class="form-group">
            <label >Email:</label>
            <input type="email" class="form-control" name="username" aria-describedby="emailHelp">
        </div><br>
        <div class="form-group">
            <label >Password:</label>
            <input type="password" class="form-control" name="password">
        </div><br>
        <div class="form-group">
            <label >Password again:</label>
            <input type="password" class="form-control" name="password2">
        </div><br>
        
    
        <button class = "btn btn-info" type="submit" name="btnReg">Register</button>

    </form>
<?php include '../foot.php' ?>