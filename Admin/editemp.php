<?php
    define('TITLE','Update Technician');

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

?>

<div class="col-md-6 mt-5 mx-3 jumbotron">

    <h3 class="text-center">Update Technician Details</h3>
    <?php
        if(isset($_REQUEST['edit'])){
            $id=$_POST['id'];
            $sql="SELECT * FROM `technician_tb` WHERE empId='$id'";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($result);
            $name=$row['empName'];
            $city=$row['empCity'];
            $mobile=$row['empMobile'];
            $email=$row['empEmail'];

    
        }
        if(isset($_REQUEST['empupdate'])){
            $rid  =$_POST['empId'];
            $rname=$_POST['empName'];
            $rcity=$_POST['empCity'];
          $rmobile=$_POST['empMobile'];
           $remail=$_POST['empEmail'];
            $sql="UPDATE `technician_tb` SET `empName` = '$rname',empCity='$rcity',
            `empMobile` = '$rmobile',empEmail='$remail' WHERE `technician_tb`.`empId` ='$rid'";
             $result=mysqli_query($con,$sql);
             if($result){
                $msg= ' <div class="alert alert-success mt-4 mx-3">Updated Successfully</div>';
                
            }
            else{
                $msg= ' <div class="alert alert-danger mt-4 mx-3">Unable To Update/div>';

            }
        }



    ?>
    <form action=""  method="post">
        <div class="form-group">
            <label for="r_login_id">Emp ID</label>

            <input type="text" readonly class="form-control" name="empId" value=" <?php    
            if(isset($id))    echo $id;?>">
        </div>
        <div class="form-group">
            <label for="r_name">Name</label>

            <input type="text" required  class="form-control" name="empName" value=" <?php  
              if(isset($id))    echo $name;?>">
        </div>
        <div class="form-group">
            <label for="r_name">City</label>

            <input type="text" required  class="form-control" name="empCity" value=" <?php  
              if(isset($id))    echo $city;?>">
        </div>
        <div class="form-group">
            <label for="r_name">Mobile</label>

            <input type="text" required  class="form-control" name="empMobile" value=" <?php  
              if(isset($id))    echo $mobile;?>">
        </div>
        <div class="form-group">
            <label for="r_email">Email</label>

            <input type="text" required class="form-control" name="empEmail" value=" <?php
                if(isset($id))    echo $email;?>">
        </div>
        <div class="text-center">
            <button type="submit"  class="btn btn-danger" name="empupdate">Update</button>
            <a href="technician.php" class="btn btn-secondary">Close</a>
        </div>
    
    </form>
    <?php if(isset($msg)) echo $msg ?>


</div>











<?php

include('includes/footer.php');


?>