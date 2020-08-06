<?php
  include("../dbConnection.php");
      session_start();
      if(!isset($_SESSION['adminloggedin'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $aEmail=$_POST['aEmail'];
        $aPassword=$_POST['aPassword'];
        $sql="SELECT * FROM `adminlogin_tb` WHERE a_email='$aEmail' AND a_password='$aPassword' ";
        $result=mysqli_query($con,$sql);
        if(!$result){
           echo "Error While Creating Query" ;
        }
        else{
        
        if($result->num_rows==1){
            $_SESSION['adminloggedin']=true;
            $_SESSION['aEmail']=$aEmail;
            header("location:dashboard.php");

        }
        else{
          $msg='  <div class="alert alert-warning mt-2">
            <strong>Error !! </strong>Invalid Credentials
            </div>';
        }}
    }
}
else{
    header("location:dashboard.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
</head>
<body>
    
    <div class="mb-3 mt-5 text-center" style="font-size:30px;">
        <i class="fas fa-stethoscope"></i>
        <span>Online Service Management System</span>
    </div>
    <p class="text-center" style="font-size:20px"><i class="fas fa-user-secret text-danger"></i> Admin Area (Demo) </p>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-6 col-md-4">
            
                <form action="" class="mt-3 shadow-lg p-4" method="post">
                    <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="email" class="font-weight-bold pl-2">Email</label>
                    <input type="email" name="aEmail" placeholder="Email" class="form-control">
                    <small>We'll Never Share Your Email with anyone else</small>
                    
                    </div>
                    <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="pass" class="font-weight-bold pl-2">Password</label>
                    <input type="password" name="aPassword" placeholder="Password" class="form-control">
                    
                    
                    </div>
                    <button type="submit" class="font-weight-bold btn btn-outline-danger mt-4 shadow-sm btn-block">Login</button>
                <?php
                    if(isset($msg)){
                        echo $msg;
                    }
                ?>
                
                </form>
                <div class="text-center"><a class="btn btn-info mt-3 font-weight-bold shadow-sm" href="../index.php">Back To Home</a></div>
            </div>
        
        
        </div>
    
    
    </div>

    <!-- JavaScript Files -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>

</body>
</html>