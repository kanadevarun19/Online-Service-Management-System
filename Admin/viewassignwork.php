<?php 
define('TITLE','View Assign Work');
define("PAGE",'work');

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


<div class="col-md-6 mt-5 mx-3 ">
    <h3 class="text-center">Assigned Work Details</h3>
    <?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $req=$_POST['id'];
        $sql="SELECT * FROM `assignwork_tb` WHERE request_id='$req'";

        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
       $id=$row['request_id']; 

        $requestinfo=$row['request_info'];
        $requestdesc=$row['request_desc'];
        $requestname=$row['request_name'];
        $requestadd1=$row['request_add1'];
        $requestadd2=$row['request_add2'];   
        $requestcity=$row['request_city'];            
        $requeststate=$row['request_state'];  
        $requestzip=$row['request_zip']; 
        $requestemail=$row['request_email'];           
        $requestmobile=$row['request_mobile'];
        $assigntech=$row['assign_tech'];
        $assigndate=$row['assign_date'];
?>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td>Request ID : </td>
                <td><?php if(isset($id)) echo $id;?></td>
            </tr>
            <tr>
                <td>Request Info : </td>
                <td><?php if(isset($id)) echo $requestinfo;?></td>
            </tr>
            <tr>
                <td> Request Description : </td>
                <td><?php if(isset($id)) echo $requestdesc;?></td>
            </tr>
            <tr>
            <tr>
                <td>Name : </td>
                <td><?php if(isset($id)) echo $requestname;?></td>
            </tr>
            <td>Address Line 1 : </td>
            <td><?php if(isset($requestadd1)) echo $requestadd2;?></td>
            </tr>
            <tr>
                <td>Address Line 2 : </td>
                <td><?php if(isset($id)) echo $requestadd2;?></td>
            </tr>
            <tr>
                <td>City : </td>
                <td><?php if(isset($id)) echo $requestcity;?></td>
            </tr>
            <tr>
                <td>State : </td>
                <td><?php if(isset($id)) echo $requeststate;?></td>
            </tr>
            <tr>
                <td>Pincode : </td>
                <td><?php if(isset($id)) echo $requestzip;?></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><?php if(isset($id)) echo $requestemail;?></td>
            </tr>
            <tr>
                <td>Mobile : </td>
                <td><?php if(isset($id)) echo $requestmobile;?></td>
            </tr>
            <tr>
                <td>Assigned Date : </td>
                <td><?php if(isset($id)) echo $assigndate;?></td>
            </tr>
            <tr>
                <td>Technician Name : </td>
                <td><?php if(isset($requestinfo)) echo $assigntech;?></td>
            </tr>
            <tr>
                <td>Customer Sign : </td>
                <td></td>
            </tr>
            <tr>
                <td>Technician Sign : </td>
                <td></td>
            </tr>

        </tbody>

    </table>
    <div class="text-center my-5">
        <form action="" class=" d-print-none d-inline" >
            <input class="btn btn-danger  mr-3" type="submit" value="Print" onClick="window.print()"></input>


        </form>
        <form action="work.php" class="d-inline d-print-none">
        <input class="btn btn-secondary" type="submit" value="Close"></input>

        </form>


        <?php }?>
    </div>
</div>


<?php include('includes/footer.php');