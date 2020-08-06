<?php 
define('TITLE','Update Product');

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
    if(isset($_REQUEST['edit'])){
        $id=$_POST['id'];
        $sql="SELECT * FROM `assets_tb` WHERE pid='$id'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        $name=$row['pname'];
        $dop=$row['pdop'];
        $ava=$row['pava'];
        $total=$row['ptotal'];
        $originalcost=$row['poriginalcost'];
        $sellingcost=$row['psellingcost'];

    }
    if(isset($_REQUEST['pupdate'])){
        $pid=$_POST['pid'];
        $pname=$_POST['pname'];
        $pdop=$_POST['pdop'];
        $pava=$_POST['pava'];
        $ptotal=$_POST['ptotal'];
        $poriginalcost=$_POST['poriginalcost'];
        $psellingcost=$_POST['psellingcost'];
        $sql="UPDATE `assets_tb` SET pname='$pname',pdop='$pdop', pava = '$pava',ptotal='$ptotal',
        poriginalcost='$poriginalcost',psellingcost='$psellingcost' WHERE pid = '$pid'";
        $result=mysqli_query($con,$sql);
        if($result){
            $mymsg='<div  class="alert alert-success mt-3 mx-5">Updated Successfully</div>';
        }
        else{
            $mymsg='<div  class="alert alert-warning mt-3 mx-5">Error While Updating</div>';
    
        }
    }
   


?>



<div class="col-md-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Update Product</h3>

    <form action="" method="post">
    <div class="form-group">
            <label for="pname">Product ID</label>
            <input type="text" name="pid" class="form-control" readonly value="<?php if(isset($id)) echo $id; ?>">
        </div>
        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" name="pname" class="form-control" value="<?php if(isset($id)) echo $name; ?>" required>
        </div>
        <div class="form-group">
            <label for="pname">Date of Purchase</label>
            <input type="date" name="pdop" class="form-control" value="<?php if(isset($id)) echo $dop; ?>" required>
        </div>
        <div class="form-group">
            <label for="pname">Available </label>
            <input type="text" name="pava" class="form-control" value="<?php if(isset($id)) echo $ava; ?>" required>
        </div>
        <div class="form-group">
            <label for="pname">Total </label>
            <input type="text" name="ptotal" class="form-control" value="<?php if(isset($id)) echo $total; ?>" required>
        </div>
        <div class="form-group">
            <label for="pname">Original Cost Each</label>
            <input type="text" name="poriginalcost" class="form-control" 
            value="<?php if(isset($id)) echo $originalcost; ?>" required>
        </div>
        <div class="form-group">
            <label for="pname">Selling Cost Each </label>
            <input type="text" name="psellingcost" class="form-control" 
            value="<?php if(isset($id)) echo $sellingcost; ?>" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" name="pupdate">Update</button>
            <a href="assets.php" class="btn btn-secondary">Close</a>
        </div>
    
    </form>
    <?php if(isset($mymsg)) echo $mymsg; ?>

</div>














<?php include('includes/footer.php'); ?>
