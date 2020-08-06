<?php 
define('TITLE','Add Requester');

define('PAGE','requester');
include('includes/header.php');
include('../dbConnection.php');
session_start();
    if($_SESSION['adminloggedin']){
        $aEmail=$_SESSION['aEmail'];
    }
    else{
        header("location:login.php");
    }
    if(isset($_REQUEST['reqsubmit'])){
        $rname=$_POST['r_name'];
        $remail=$_POST['r_email'];
        $rpassword=$_POST['r_password'];
        $sql="INSERT INTO `requesterlogin_tb` (`r_name`, `r_email`, `r_password`)
         VALUES ( '$rname', '$remail', '$rpassword')";
         $result=mysqli_query($con,$sql);
         if(!$result){
                 $msg=' <div class="alert alert-danger mt-5 mx-3">Unable To Insert </div>';
         }
         else{
            $msg=' <div class="alert alert-success mt-5 mx-3">Inserted Successfully </div>';

         }
    }


?>

<!-- Start 2nd Column -->
<div class="col-md-6 mx-3 jumbotron">
    <h3 class="text-center">Add New Requester</h3>
    <form action="" method="post">
        <div class="form-group">
            <label for="r_name">Name</label>
            <input type="text" name="r_name" required class="form-control">
        </div>
        <div class="form-group">
            <label for="r_email">Email</label>
            <input type="text" name="r_email" required class="form-control">
        </div>
        <div class="form-group">
            <label for="r_password">Password</label>
            <input type="password" name="r_password" required class="form-control">
        </div>
        <button type="submit" class="btn btn-danger" name="reqsubmit">Submit</button>
        <a href="requester.php" class="btn btn-secondary">Close</a>
    </form>
    <?php
    if(isset($msg)){
        echo $msg;
    }
    ?>
</div>


<!-- End 2nd Column -->



<?php 
    include('includes/footer.php');
?>