<?php

define('TITLE','Change Password');

define("PAGE",'changepass');
include('includes/header.php');
    include('../dbConnection.php');
    session_start();
    if($_SESSION['adminloggedin']){
        $aEmail=$_SESSION['aEmail'];
    }else{
        header("location:login.php");
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $rPass=$_POST['rPassword'];
        $sql="UPDATE `adminlogin_tb` SET a_password = '$rPass' WHERE a_email = '$aEmail' ";
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
            <input class="form-control" type="email" name="rEmail" id="rEmail"  value="<?php echo $aEmail;?>" readonly>
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
