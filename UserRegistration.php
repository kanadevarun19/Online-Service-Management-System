<?php
    include('dbConnection.php');

    if($_SERVER['REQUEST_METHOD']=='POST'){

        
        $rName=$_POST['rName'];
        $rEmail=$_POST['rEmail'];
        $rPassword=$_POST['rPassword'];
        $mysql="SELECT * FROM `requesterlogin_tb` WHERE r_email='$rEmail'";
        $myres=mysqli_query($con,$mysql);
        $row=mysqli_num_rows($myres);
        if($row==1){
            $regMsg=' <div class="alert alert-danger mt-2" role="alert">
                  <strong>  Error!</strong> Email Already In Use
           </div>
           ';
        }
        else
      {  
        $sql="
        INSERT INTO `requesterlogin_tb` ( `r_name`, `r_email`, `r_password`) 
        VALUES ( '$rName', '$rEmail', '$rPassword')";
        $result=mysqli_query($con,$sql);
        
        if($result){
           $regMsg=' <div class="alert alert-success mt-2" role="alert">
                  <strong>  Successfull!</strong> Account Created 
           </div>
           ';
           
        }
        else{
            $regMsg=' <div class="alert alert-warning mt-2" role="alert">
            <strong>  Error!</strong> While  Creating Account 
     </div>
     ';
        }}
    }
?>



<div class="container pt-5" id="registration">
        <h2 class="text-center">Create an Account</h2>
        <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
                <form class="shadow-lg p-4" action="" method="post">
                    <div class="form-group">
                        <i class="fas fa-user"></i><label class="pl-2 font-weight-bold" for="name">Name</label>
                        <input type="text" name="rName" placeholder="Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-user"></i><label class="pl-2 font-weight-bold" for="email">Email</label>
                        <input type="email" name="rEmail" placeholder="Email" class="form-control" required>
                        <small class="form-text">We'll Never Share Your Email With Anyone</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label class="pl-2 font-weight-bold" for="">New Password</label>
                        <input type="password" name="rPassword" placeholder="Password" class="form-control" require>
                    </div>
                    <button type="submit" name="rSignup" class="btn btn-danger
        btn-block mt-5 shadow-sm font-weight-bold ">Sign Up</button>
                    <em style="font-size:10px;">Note - By Clicking Sign Up,You Agree To Our Terms,Data Policy and Cookie
                        Policy
                    </em>
                   <?php
                        if(isset($regMsg)){
                            echo $regMsg;
                        }
                   ?>
                </form>

            </div>
        </div>
    </div>