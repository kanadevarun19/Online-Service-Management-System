<?php

    define('TITLE','Requester Profile');
    define('PAGE','RequestProfile');
    include('includes/header.php');
    include('../dbConnection.php');
    session_start();
    if($_SESSION['loggedin']){
        $rEmail=$_SESSION['rEmail'];
        $sql="SELECT * FROM `requesterlogin_tb` WHERE r_email='$rEmail' ";
        $result=mysqli_query($con,$sql);
        if(!$result){
            echo 'Error';
        }
         if($result->num_rows==1){
             $row=$result->fetch_assoc();
             $rName=$row['r_name'];
         }
    }
    else{
        header("location:RequesterLogin.php");
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $newName=$_POST['rName'];
        if($rName==""){
           $passMsg= '<div class="alert alert-warning">Fill All Fields</div>';
        }
        else{
            $updateSql="UPDATE `requesterlogin_tb` SET `r_name` = '$newName' WHERE `r_email` = '$rEmail'";
            $result=mysqli_query($con,$updateSql);
            if($result){
                $passMsg= '<div class="alert alert-success" role="alert">Updated Successfully</div>';
        
            }
            else{
                $passMsg= '<div class="alert alert-danger" role="alert">Failed To Update</div>';
        
            }
        }
    }
    
?>

<!-- Start Profile 2nd Column -->
<div class="col-sm-6 mt-4">
    <form action="" method="post" class="mx-5">
        <div class="form-group">

            <label for="email">Email</label>
            <input class="form-control" type="email" name="rEmail" id="rEmail" value="<?php echo $rEmail; ?>" readonly>
        </div>
        <div class="form-group">

            <label for="name">Name</label>
            <input class="form-control" type="text" name="rName" id="rName" value="<?php echo $rName;?>">
        </div>
        <button class="btn btn-danger" type="submit" name="nameUpdate">Update</button>
        <?php  if(isset($passMsg))
                    echo $passMsg;  ?>
    </form>
</div>




<?php include('includes/footer.php');?>