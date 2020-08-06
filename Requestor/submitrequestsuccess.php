<?php
    define('TITLE','Success');
    include('includes/header.php');
    include('../dbConnection.php');
    session_start();
    if($_SESSION['loggedin']){
        $rEmail=$_SESSION['rEmail'];
    }
    else{
        header("location:RequestLogin.php");
        
    }
    $myid=$_SESSION['myid'];
    $sql="SELECT * FROM `submitrequest_tb` WHERE request_id='$myid'";
    $result=mysqli_query($con,$sql);
    if(!$result){
        echo "Error While Sql Query";
    }
    else{
        $num=mysqli_num_rows($result);
        if($num==1){
            $row=mysqli_fetch_assoc($result);
            echo '
            <div class="ml-5 mt-5">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Request ID</th>
                            <td>'. $row["request_id"].' </td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>'.$row["requester_name"].'</td>
                        </tr>
                        <tr>
                            <th>Email ID</th>
                            <td>'.$row["requester_email"].'</td>
                        </tr>
                        <tr>
                            <th>Request Info</th>
                            <td>'.$row["request_info"].'</td>
                        </tr>
                        <tr>
                            <th>Request Description</th>
                            <td>'.$row["request_desc"].'</td>
                        </tr>
                        <tr>
                            <td>
                                <form action="" class="d-print-none">
                                    <input type="submit" value="Print" class="btn btn-danger" onClick="window.print()">
            
                                </form>
                            </td>
                        </tr>
            
                    </tbody>
                </table>
            </div>
            ';
        }
        else
        {
            echo 'Failed';
        }
    }

?>


<?php

include('includes/footer.php');

?>