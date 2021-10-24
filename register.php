<?php include 'head.php' ?>
<div class = "regPage">
    <a href="index.php"><i class="fas fa-arrow-left"></i></a> Back
    <form class = "row" action = "reg_process.php" method = "POST">,
        <div class="col" >
            <div class="form-group">
                <label >Email:</label>
                <input type="email" class="form-control" name="username" aria-describedby="emailHelp">
            </div><br>
            <div class="form-group">
                <label >Password</label>
                <input type="password" class="form-control" name="password">
            </div><br>
            <div class="form-group">
                <label >Password again:</label>
                <input type="password" class="form-control" name="password2">
            </div><br>
        </div>

        <div class="col">
            
            <div class="form-group">
                <label >Birthday:</label>
                <input type="date" class="form-control" name="dob">
            </div><br><br>

            <input type="checkbox" name="ToS" value="checkox_value">
            <label for="">I agree with ToS.</label><br><br><br>

            <button class = "regBtn btn btn-info" type="submit" name="btnReg">Register</button>
        </div>
    </form>
</div>
</div>
<?php include 'foot.php' ?>