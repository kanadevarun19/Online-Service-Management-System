<?php 
define('TITLE','Work');
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

<!-- Start 2nd Column -->
<div class="col-md-10 mt-2">
    <?php

        $sql="SELECT * FROM `assignwork_tb`";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num==0){
            echo 'No Work Assigned Yet';
        }
        else{
           echo ' <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Req ID</th>
                        <th scope="col">Req Info</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Technician</th>
                        <th scope="col">Assigned Date</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>';
                while($row=mysqli_fetch_assoc($result)){
                   echo' <tr>
                        <td>'.$row["request_id"].'</td>
                        <td>'.$row["request_info"].'</td>
                        <td>'.$row["request_name"].'</td>
                        <td>'.$row["request_add1"].'</td>
                        <td>'.$row["request_city"].'</td>
                        <td>'.$row["request_mobile"].'</td>
                        <td>'.$row["assign_tech"].'</td>
                        <td>'.$row["assign_date"].'</td>
                        <td>
                            <form action="viewassignwork.php" method="post" class="d-inline">
                                <input type="hidden" name="id" value='.$row["request_id"].'>
                                <button type="submit" class="btn btn-warning" name="view" value="View">
                                <i class="far fa-eye"></i></button>
                            </form>
                            <form action="" method="post" class="d-inline">
                                <input type="hidden" name="id" value='.$row["request_id"].'>
                                <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                                <i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tr>';
                }
                
                echo '</tbody>
            </table>';
        }
        

    ?>

</div>

<!-- End 2nd Column -->

<?php
    if(isset($_REQUEST['delete'])){
        $myid=$_POST['id'];
        $sql="DELETE FROM `assignwork_tb` WHERE request_id='$myid'";
        $result=mysqli_query($con,$sql);
        if(!$result){
            echo 'Unable To Delete';

        }
        else{
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?closed"/>';

        }
    }

?>












<?php
include('includes/footer.php')?>