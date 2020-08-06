<?php

    define('TITLE','Change Password');
    define('PAGE','ChangePassword');
    include('includes/header.php');
    include('../dbConnection.php');
    session_start();
    if($_SESSION['loggedin']){
        $rEmail=$_SESSION['rEmail'];
    }else{
        header("location:RequesterLogin.php");
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $rPass=$_POST['rPassword'];
        $sql="UPDATE `requesterlogin_tb` SET `r_password` = '$rPass' WHERE r_email = '$rEmail' ";
        $result=mysqli_query($con,$sql);
        if(!$result){
            $passMsg='<div class="col-md-6 mt-2 ml-6 alert alert-danger">

            Not Updated Please Try Again
        </div>';
            
        }
        else{
            $passMsg='<div class="col-md-6 mt-2 ml-6 alert alert-success">

             Updated Successfully!!!
        </div>';
        }
    }


?>
<!-- Start New Password 2nd Column -->
<div class="col-sm-9 col-md-10 mt-4">
    <form action="" method="post" class="mx-5">
        <div class="form-group">

            <label for="email">Email</label>
            <input class="form-control" type="email" name="rEmail" id="rEmail"  value="<?php echo $rEmail;?>" readonly>
        </div>
        <div class="form-group">

            <label for="name">New Password</label>
            <input class="form-control" type="password" name="rPassword" id="rPassword" placeholder="New Password" required>
        </div>
        <button class="btn btn-danger mr-4 mt-4" type="submit" name="passUpdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
       <?php if(isset($passMsg)) echo $passMsg;?>
    </form>
</div>



<?php include('includes/footer.php');?>
