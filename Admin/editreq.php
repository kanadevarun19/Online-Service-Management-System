<?php
    define('TITLE','Update Requester');

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

?>

<div class="col-md-6 mt-5 mx-3 jumbotron">

    <h3 class="text-center">Update Requester Details</h3>
    <?php
        if(isset($_REQUEST['edit'])){
            $id=$_POST['id'];
            $sql="SELECT * FROM `requesterlogin_tb` WHERE r_login_id='$id'";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($result);
            $name=$row['r_name'];
            $email=$row['r_email'];

    
        }
        if(isset($_REQUEST['requpdate'])){
            $rid=$_POST['r_login_id'];
            $rname=$_POST['r_name'];
            $remail=$_POST['r_email'];
            $sql="UPDATE `requesterlogin_tb` SET `r_name` = '$rname',r_email='$remail'
             WHERE `requesterlogin_tb`.`r_login_id` ='$rid'";
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
            <label for="r_login_id">Requester ID</label>

            <input type="text" readonly class="form-control" name="r_login_id" value=" <?php    
            if(isset($id))    echo $id;?>">
        </div>
        <div class="form-group">
            <label for="r_name">Name</label>

            <input type="text" required  class="form-control" name="r_name" value=" <?php  
              if(isset($id))    echo $name;?>">
        </div>
        <div class="form-group">
            <label for="r_email">Email</label>

            <input type="text" required class="form-control" name="r_email" value=" <?php
                if(isset($id))    echo $email;?>">
        </div>
        <div class="text-center">
            <button type="submit"  class="btn btn-danger" name="requpdate">Update</button>
            <a href="requester.php" class="btn btn-secondary">Close</a>
        </div>
    
    </form>
    <?php if(isset($msg)) echo $msg ?>


</div>











<?php

include('includes/footer.php');


?>