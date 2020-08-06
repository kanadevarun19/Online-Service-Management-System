<?php 
define('TITLE','Sell Success');

define('PAGE','assets');
include('includes/header.php');
include('../dbConnection.php');
session_start();
    if($_SESSION['adminloggedin']){
        $aEmail=$_SESSION['aEmail'];
        $myid=$_SESSION['myid'];
    }

    else{
        header("location:login.php");
    }
    $sql="SELECT * FROM `customer_tb` WHERE custid='$myid'";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $row=mysqli_fetch_assoc($result);
        $custid=$row['custid'];
        $custname=$row['custname'];
        $custadd=$row['custadd'];
        $cpname=$row['cpname'];
        $cpquantity=$row['cpquantity'];
        $cpeach=$row['cpeach'];
        $cptotal=$row['cptotal'];
        $cpdate=$row['cpdate'];
        echo '<div class="ml-5 mt-5">
        <h3 class="text-center">Customer Bill</h3>
        <table class="table">
            <tbody>
                <tr>
                    <th>Customer ID</th>
                    <td>'. $custid.'</td>
                </tr>
                <tr>
                    <th>Customer Name</th>
                    <td>'. $custname.'</td>
                </tr>
                <tr>
                    <th>Customer Address</th>
                    <td>'. $custadd.'</td>
                </tr>
                <tr>
                    <th>Product Name</th>
                    <td>'. $cpname.'</td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td>'. $cpquantity.'</td>
                </tr>
                <tr>
                    <th>Price Each</th>
                    <td>'. $cpeach.'</td>
                </tr>
                <tr>
                    <th>Total Cost</th>
                    <td>'. $cptotal.'</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>'. $cpdate.'</td>
                </tr>
                <tr class="d-print-none">
                    <td>
                        <form action="" >
                            <input type="submit" name="print" value="Print" onClick="window.print()" class="btn btn-danger">
                        </form>
                    </td>
                    <td>
                        <a href="assets.php" class="btn btn-secondary">Close</a>
                    </td>
                </tr>
    
            </tbody>
    
        </table>
    </div>';
       

    }
    else{
        echo 'Error';
    }

?>

