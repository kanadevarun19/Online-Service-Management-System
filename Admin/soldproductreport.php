<?php 
define('TITLE','Sell Report');

define('PAGE','sellreport');
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

<div class="col-md-10 mt-5 text-center">
    <form action="" method="post" class="d-print-none">
        <div class="form-row">
            <div class="form-group col-md-2">
                <input type="date" name="startdate" id="startdate" class="form-control">
            </div><span>to</span>
            <div class="form-group col-md-2">
                <input type="date" name="enddate" id="enddate" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Search" class="btn btn-secondary" name="searchsubmit"> 
            </div>
        </div>
    
    </form>

<?php
    if(isset($_REQUEST['searchsubmit'])){
        $startdate=$_POST['startdate'];
        $enddate=$_POST['enddate'];
        $sql="SELECT * FROM `customer_tb` WHERE cpdate BETWEEN '$startdate' AND '$enddate'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
           echo' <p class="bg-dark text-white p-2 mt-4">Details</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price Each</th>
                        <th scope="col">Total Cost</th>
                        <th scope="col">Date</th>

                    </tr>
                </thead>
                <tbody>';
                
                    while($row=mysqli_fetch_assoc($result)){
                        $custid=$row['custid'];
                        $custname=$row['custname'];
                        $custadd=$row['custadd'];
                        $cpname=$row['cpname'];
                        $cpquantity=$row['cpquantity'];
                        $cpeach=$row['cpeach'];
                        $cptotal=$row['cptotal'];
                        $cpdate=$row['cpdate'];

                      echo'  <tr>
                            <td>'.$custid.'</td>
                            <td>'.$custname.'</td>
                            <td>'.$custadd.'</td>
                            <td>'.$cpname.'</td>
                            <td>'.$cpquantity.'</td>
                            <td>'.$cpeach.'</td>
                            <td>'.$cptotal.'</td>
                            <td>'.$cpdate.'</td>

                        </tr>';

                        
                    }
                    echo'  <tr>
                        <td><input type="submit" value="Print" onClick="window.print()" class="btn
                         btn-danger d-print-none"></td>
                    </tr>
                
                </tbody>
            
            </table>';
        }
        else{
            echo '<div class="alert alert-warning mt-4 mx-3">No Records Found</div>';
        }
    }

?>

</div>



<?php
include('includes/footer.php')?>