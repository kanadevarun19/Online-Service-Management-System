<?php

define('TITLE','Submit Request');
define('PAGE', 'SubmitRequest');

include('includes/header.php');
    include('../dbConnection.php');
    session_start();
    if($_SESSION['loggedin']){
        $rEmail=$_SESSION['rEmail'];
        if($_SERVER['REQUEST_METHOD']=='POST'){
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
            $rdate=$_POST['requestdate'];
            $sql="INSERT INTO `submitrequest_tb` ( `request_info`, `request_desc`, `requester_name`, 
            `requester_add1` , `requester_add2`, `requester_city`, `requester_state`,
             `requester_zip`, `requester_email`, `requester_mobile`, `requester_date`) 
            VALUES ( '$rinfo', '$rdesc', '$rname', '$radd1', '$radd2', '$rcity',
             '$rstate', '$rzip', '$remail', '$rmobile', '$rdate')";

            $result=mysqli_query($con,$sql);
            if(!$result){
              $msg= ' <div class="col-md-5 alert alert-warning  mx-5 my-3">Error Invalid Query</div>';
            }
            else{
                $genid=mysqli_insert_id($con);
                $_SESSION['myid']=$genid;



                $msg= ' <div class="col-md-5 alert alert-success mx-5 my-3">Your Request
                 Has Been Submitted Successfully</div>';
                 
                     header("location:submitrequestsuccess.php");
            
            }

        }
        
    }
    else{
        header("location:RequesterLogin.php");
    }
    

?>

<!-- Start Submit Request Form 2nd Column -->

<div class="col-sm-9 col-md-10 mt-5">
    <form class="mx-5" action="" method="post">
        <div class="form-group">
            <label for="requestInfo">Request Info</label>
            <input type="text" name="requestinfo" id="requestinfo" class="form-control" placeholder="Request Info"
                required>
        </div>
        <div class="form-group">
            <label for="requestdesc">Request Description</label>
            <input type="text" name="requestdesc" id="requestdesc" class="form-control"
                placeholder="Request Description" required>
        </div>
        <div class="form-group">
            <label for="requestname">Name</label>
            <input type="text" name="requestername" id="requestername" class="form-control" placeholder="Rahul"
                required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="address1">Address Line 1</label>
                <input type="text" name="requesteradd1" id="requesteradd1" class="form-control"
                    placeholder="House No 123" required>
            </div>
            <div class="form-group col-md-6">
                <label for="address2">Address Line 2</label>
                <input type="text" name="requesteradd2" id="requesteradd2" class="form-control"
                    placeholder="Railway Colony" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" name="requestercity" id="requestercity" placeholder="Pune" class="form-control"
                    required>
            </div>
            <div class="form-group col-md-4">
                <label for="state">State</label>
                <input type="text" name="requesterstate" id="requesterstate" placeholder="Maharashtra"
                    class="form-control" required>
            </div>
            <div class="form-group col-md-2">
                <label for="zip">Zip</label>
                <input type="text" name="requesterzip" id="inputZip" class="form-control"
                    onkeypress="isInputNumber(event)" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="requesteremail" id="requesteremail" placeholder="abc@gmail.com"
                    class="form-control" required>
            </div>
            <div class="form-group col-md-2">
                <label for="mobile">Mobile</label>
                <input type="text" name="requestermobile" id="requestermobile" class="form-control"
                    onkeypress="isInputNumber(event)" required>
            </div>
            <div class="form-group col-md-2">
                <label for="date">Date</label>
                <input type="date" name="requestdate" id="requestdate" class="form-control" required>
            </div>
        </div>
        <button type="submit" name="submitrequest" class="btn btn-danger">Submit</button>
        <button type="reset" name="resetrequest" class="btn btn-secondary">Reset</button>

    </form>
    <?php
    if(isset($msg)){
        echo $msg;
       
    }
    ?>

</div>

<!-- End Submit Request Form 2nd Column -->

<!-- Only Input Number Fields -->

<script>
function isInputNumber(evt) {
    var ch = String.formCharCode(evt.which)
    if (!(/[0-9]/.test(ch)))
        evt.preventDefault()
}
</script>


<?php include('includes/footer.php');?>