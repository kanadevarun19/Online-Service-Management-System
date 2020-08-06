<?php 
define('TITLE','Request');

define('PAGE','request');
session_start();
include('includes/header.php');
include('../dbConnection.php');


if($_SESSION['adminloggedin']){
    $aEmail=$_SESSION['aEmail'];
}
else{
    header("location:login.php");
}
?>
<!-- Start 2nd Column -->
<div class="col-sm-4 my-5 mx-5">
    <?php
  $sql="SELECT * FROM `submitrequest_tb`";
  $result=mysqli_query($con,$sql);
  $num=mysqli_num_rows($result);
  if($num>0){
      while($row=mysqli_fetch_assoc($result)){
          echo'
          <div class="card mt-5 mx-5">
            <div class="card-header">Request ID: '. $row['request_id'].'</div>
            <div class="card-body">
                <h5 class="card-title">Request Info : '.$row['request_info'].' </h5>
                <p class="card-text">'.$row['request_desc'].'</p>
                <p class="card-text">Request Date : '.$row['requester_date'].'</p>
                <div class="float-right ">
                <form action="" method="POST">
                <input type="hidden" name="id" value='.$row['request_id'].'>
                <input type="submit" name="view" class="btn btn-danger mr-2" value="View">
                <input type="submit" name="close" class="btn btn-secondary" value="Close">
                </form>
              </div>
            </div>
          </div>';
      }
     
  }
  
  else{
      echo "Zero Requests";
  }
  ?>

</div>
<!-- End 2nd Column -->






<?php

include('assignworkform.php');
include('includes/footer.php');


?>