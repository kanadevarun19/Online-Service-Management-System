<?php 
define('TITLE','Add New Product');

define('PAGE','assets');
include('includes/header.php');
include('../dbConnection.php');
session_start();
    if($_SESSION['adminloggedin']){
        $aEmail=$_SESSION['aEmail'];
    }
    else{
        header("location:login.php");
    }
    ?>
    <?php
    if(isset($_REQUEST['psubmit'])){
        $pname=$_POST['pname'];
        $pdop=$_POST['pdop'];
        $pava=$_POST['pava'];
        $ptotal=$_POST['ptotal'];
        $poriginalcost=$_POST['poriginalcost'];
        $psellingcost=$_POST['psellingcost'];
        $sql="INSERT INTO `assets_tb` ( `pname`, `pdop`, `pava`, `ptotal`, `poriginalcost`, `psellingcost`)
                 VALUES ( '$pname', '$pdop', '$pava', '$ptotal', '$poriginalcost', '$psellingcost')";
        $result=mysqli_query($con,$sql);
        if($result){
            $msg='<div class="alert alert-success mt-3 mx-3">Product Added Successfully</div>';
        }
        else{
            $msg='<div class="alert alert-warning mt-3 mx-3">Product Unable To Add</div>';

        }
        
    }





?>

<div class="col-md-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Add New Product</h3>

    <form action="" method="post">
        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" name="pname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pname">Date of Purchase</label>
            <input type="date" name="pdop" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pname">Available </label>
            <input type="text" name="pava" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pname">Total </label>
            <input type="text" name="ptotal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pname">Original Cost Each</label>
            <input type="text" name="poriginalcost" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pname">Selling Cost Each </label>
            <input type="text" name="psellingcost" class="form-control" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" name="psubmit">Submit</button>
            <a href="assets.php" class="btn btn-secondary">Close</a>
        </div>
    
    </form>
    <?php if(isset($msg)) echo $msg; ?>

</div>













<?php include('includes/footer.php'); ?>