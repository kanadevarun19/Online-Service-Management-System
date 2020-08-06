<?php 
define('TITLE','Add Technician');

define('PAGE','technician');
include('includes/header.php');
include('../dbConnection.php');
session_start();
    if($_SESSION['adminloggedin']){
        $aEmail=$_SESSION['aEmail'];
    }
    else{
        header("location:login.php");
    }
    if(isset($_REQUEST['empsubmit'])){
        $rname=$_POST['r_name'];
        $remail=$_POST['r_email'];
        $rcity=$_POST['r_city'];
        $rmobile=$_POST['r_mobile'];
        
        $sql="INSERT INTO `technician_tb` ( `empName`, `empCity`, `empMobile`, `empEmail`)
         VALUES ( '$rname','$rcity','$rmobile', '$remail')";
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
    <h3 class="text-center">Add New Technician</h3>
    <form action="" method="post">
        <div class="form-group">
            <label for="r_name">Name</label>
            <input type="text" name="r_name" required class="form-control">
        </div>
        
        <div class="form-group">
            <label for="r_password">City</label>
            <input type="text" name="r_city" required class="form-control">
        </div>
        <div class="form-group">
            <label for="r_password">Mobile</label>
            <input type="text" name="r_mobile" required class="form-control">
        </div>
        <div class="form-group">
            <label for="r_email">Email</label>
            <input type="text" name="r_email" required class="form-control">
        </div>
        <button type="submit" class="btn btn-danger" name="empsubmit">Submit</button>
        <a href="technician.php" class="btn btn-secondary">Close</a>
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