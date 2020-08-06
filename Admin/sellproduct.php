<?php 
define('TITLE','Sell Product');

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
    if(isset($_REQUEST['issue'])){
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
    if(isset($_REQUEST['psubmit'])){
        $pid=$_POST['pid'];
        $cname  =$_POST['cname']; 
        $cadd   =$_POST['cadd'];
        $cpname =$_POST['pname'];
        $pava   =$_POST['pava'];
     $pquantity =$_POST['pquantity'];
        $cpeach =$_POST['psellingcost'];
       $cptotal =$_POST['totalcost'];
        $cdate  =$_POST['inputDate'];
        $ava=$pava-$pquantity;
        $sqlupdate="UPDATE `assets_tb` SET pava='$ava' WHERE pid='$pid'";
         $result1=mysqli_query($con,$sqlupdate);
        $sql="INSERT INTO `customer_tb` ( `custname`, `custadd`, `cpname`, `cpquantity`, 
                `cpeach`, `cptotal`, `cpdate`)
         VALUES ( '$cname', '$cadd', '$cpname', '$pquantity', '$cpeach', '$cptotal', '$cdate')";
         $result=mysqli_query($con,$sql);
         
         if($result){
             $genid=mysqli_insert_id($con);
             session_start();
             $_SESSION['myid']=$genid;
             header("location:productsellsuccess.php");

         }
         
         
    }
   


?>



<div class="col-md-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Customer Bill</h3>

    <form action="" method="post">
    <div class="form-group">
            <label for="pname">Product ID</label>
            <input type="text" name="pid" class="form-control" readonly value="<?php if(isset($id)) echo $id; ?>">
        </div>
        <div class="form-group">
            <label for="cname">Customer Name</label>
            <input type="text" name="cname" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="cadd">Customer Address</label>
            <input type="text" name="cadd" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" name="pname" class="form-control" value="<?php if(isset($id)) echo $name; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="pname">Available </label>
            <input type="text" name="pava" class="form-control" value="<?php if(isset($id)) echo $ava; ?>" readonly required>
        </div>
        <div class="form-group">
            <label for="pquantity">Quantity </label>
            <input type="text" name="pquantity" class="form-control"  required>
        </div>
        
       
        <div class="form-group">
            <label for="psellingcost">Price Each </label>
            <input type="text" name="psellingcost" class="form-control" 
            value="<?php if(isset($id)) echo $sellingcost; ?>" required>
        </div>
        <div class="form-group">
            <label for="ptotalcost">Total Cost </label>
            <input type="text" name="totalcost" class="form-control" 
             required>
        </div>
        <div class="form-group">
            <label for="inputDate">Date</label>
            <input type="date" name="inputDate" class="form-control" 
             required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" name="psubmit">Submit</button>
            <a href="assets.php" class="btn btn-secondary">Close</a>
        </div>
    
    </form>
    <?php if(isset($mymsg)) echo $mymsg; ?>

</div>














<?php include('includes/footer.php'); ?>
