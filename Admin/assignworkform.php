<?php
if(session_id()==''){
    session_start();
}
    if($_SESSION['adminloggedin']){
        $aEmail=$_SESSION['aEmail'];
    }
    else{
        header("location:login.php");
    }
    if(isset($_REQUEST['view'])){
        $name=$_POST['id'];
        $sql="SELECT * FROM `submitrequest_tb` WHERE request_id='$name'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);

    }
    if(isset($_REQUEST['close'])){
        $name=$_POST['id'];
        $sql="DELETE FROM `submitrequest_tb` WHERE `submitrequest_tb`.`request_id` = '$name'";
        $result=mysqli_query($con,$sql);
        if($result)
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?closed"/>';
        else
        echo 'Error While Deleting';

    }
    if(isset($_REQUEST['assign'])){
          
        $rid=$_POST['requestid'];           
        $rinfo=$_POST['requestinfo'];
        $rdesc=$_POST['requestdesc'];
        $rname=$_POST['requestername'];
        $radd1=$_POST['requesteradd1'];                   
        $radd2=$_POST['requesteradd2'];
        $rcity=$_POST['requestercity'];
        $rstate=$_POST['requesterstate'];
        $rzip=$_POST['requesterzip'];
        $remail=$_POST['requesteremail'];
        $rmobile=$_POST['requestermobile'];
        $rassigntech=$_POST['assigntech'];
        $rdate=$_POST['inputDate'];
        $sql="INSERT INTO `assignwork_tb` ( `request_id`, `request_info`, `request_desc`, `request_name`,
         `request_add1`, `request_add2`, `request_city`, `request_state`, `request_zip`, `request_email`,
          `request_mobile`, `assign_tech`, `assign_date`)
         VALUES ( '$rid', '$rinfo', '$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip',
          '$remail', '$rmobile', '$rassigntech', '$rdate')";
          $result=mysqli_query($con,$sql);
          if($result){
              $msg='<div class="alert alert-success mx-4 mt-5">Work Assigned Successfully</div>';
          }
          else{
            $msg='<div class="alert alert-warning mx-4 mt-5">Unable To Assign Work</div>';

          }




    }

?>

<!-- Start 3rd Column -->
<div class="jumbotron mt-5 col-sm-5">
    <form class="mx-5" action="" method="post">
        <h5 class="text-center">Assign Work Order Request</h5>
        <div class="form-group">
            <label for="requestInfo">Request ID</label>
  
            <input type="text" name="requestid" id="requestid" class="form-control" value="<?php    
            if(isset($row['request_id'])) echo $row['request_id'];?>" required readonly>
        </div>
        <div class="form-group">
            <label for="requestInfo">Request Info</label>
            <input type="text" name="requestinfo" id="requestinfo" class="form-control" value="<?php    
            if(isset($row['request_info'])) echo $row['request_info'];?>" placeholder="Request Info"
                required>
        </div>
        <div class="form-group">
            <label for="requestdesc">Request Description</label>
            <input type="text" name="requestdesc" id="requestdesc" class="form-control" value="<?php    
            if(isset($row['request_desc'])) echo $row['request_desc'];?>"
                placeholder="Request Description" required>
        </div>
        <div class="form-group">
            <label for="requestname">Name</label>
            <input type="text" name="requestername" id="requestername" class="form-control" value="<?php    
            if(isset($row['requester_name'])) echo $row['requester_name'];?>" placeholder="Rahul"
                required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="address1">Address Line 1</label>
                <input type="text" name="requesteradd1" id="requesteradd1" class="form-control" value="<?php    
            if(isset($row['requester_add1'])) echo $row['requester_add1'];?>"
                    placeholder="House No 123" required>
            </div>
            <div class="form-group col-md-6">
                <label for="address2">Address Line 2</label>
                <input type="text" name="requesteradd2" id="requesteradd2" class="form-control" value="<?php    
            if(isset($row['requester_add2'])) echo $row['requester_add2'];?>"
                    placeholder="Railway Colony" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="city">City</label>
                <input type="text" name="requestercity" id="requestercity" placeholder="Pune" class="form-control" value="<?php    
            if(isset($row['requester_city'])) echo $row['requester_city'];?>"
                    required>
            </div>
            <div class="form-group col-md-4">
                <label for="state">State</label>
                <input type="text" name="requesterstate" id="requesterstate" placeholder="Maharashtra" value="<?php    
            if(isset($row['requester_state'])) echo $row['requester_state'];?>"
                    class="form-control" required>
            </div>
            <div class="form-group col-md-3">
                <label for="zip">Zip</label>
                <input type="text" name="requesterzip" id="inputZip" class="form-control" value="<?php    
            if(isset($row['requester_zip'])) echo $row['requester_zip'];?>"
                    onkeypress="isInputNumber(event)" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="requesteremail" id="requesteremail" placeholder="abc@gmail.com" value="<?php    
            if(isset($row['requester_email'])) echo $row['requester_email'];?>"
                    class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="mobile">Mobile</label>
                <input type="text" name="requestermobile" id="requestermobile" class="form-control" value="<?php    
            if(isset($row['requester_mobile'])) echo $row['requester_mobile'];?>"
                    onkeypress="isInputNumber(event)" required>
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="assigntech">Assign To Technician</label>
                <input type="text" name="assigntech" id="assigntech" class="form-control" required >
            

            </div>
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" name="inputDate" id="inputDate" class="form-control"  required>
            </div>
        </div>
       <div class="float-right">
       <button type="submit" name="assign" class="btn btn-success">Assign</button>
        <button type="reset" name="reset" class="btn btn-secondary">Reset</button>

       </div>
    </form>
    <?php if(isset($msg)) echo $msg?>

</div>

<!-- End 3rd Column -->


<script>
function isInputNumber(evt) {
    var ch = String.formCharCode(evt.which)
    if (!(/[0-9]/.test(ch)))
        evt.preventDefault()
}
</script>
