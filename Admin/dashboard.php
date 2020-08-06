<?php
    include('../dbConnection.php');
    define('TITLE','Dashboard');
    define("PAGE",'dashboard');
    
    include('includes/header.php');
    session_start();
    if($_SESSION['adminloggedin']){
        $aEmail=$_SESSION['aEmail'];
    }
    else{
        header("location:login.php");
    }

?>
<?php
    $sql="SELECT max(request_id) FROM `submitrequest_tb`";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_row($result);
    $submitRequest=$row[0];

    $sql="SELECT max(rno) FROM `assignwork_tb`";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_row($result);
    $assignRequest=$row[0];
    $sql="SELECT * FROM `technician_tb`";
    $result=mysqli_query($con,$sql);
    $numTech=mysqli_num_rows($result);

?>

<!-- Start Dashboard 2nd Column -->
<div class="col-md-10 ">
    <div class="row mx-5 text-center">
        <div class="col-md-4 mt-4">
            <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                <div class="card-header">Requests Received</div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $submitRequest; ?></h4>
                    <a href="request.php" class="btn text-white">View</a>
                </div>


            </div>

        </div>
        <div class="col-md-4 mt-4">
            <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                <div class="card-header">Assigned Work</div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $assignRequest; ?></h4>
                    <a href="work.php" class="btn text-white">View</a>
                </div>


            </div>

        </div>
        <div class="col-md-4 mt-4">
            <div class="card text-white bg-info mb-3" style="max-width:18rem;">
                <div class="card-header">No. of Technician</div>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $numTech; ?></h4>
                    <a href="technician.php" class="btn text-white">View</a>
                </div>


            </div>

        </div>

    </div>


    <div class="mx-5 mt-5 text-center">
        <p class="bg-dark text-white p-2">List Of Requesters</p>
        <?php

                    $sql="SELECT * FROM `requesterlogin_tb`";
                    $result=mysqli_query($con,$sql);
                    if(!$result){
                        echo "Sorry Error in query";
                    }
                    else{
                        $num=mysqli_num_rows($result);
                        if($num>0){
                            echo '<table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Requester ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
        
                            </tr>
                            </thead>
                            <tbody>';
                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo ' <tr>
                                <td>'.$row['r_login_id'].'</td>
                                <td>'.$row['r_name'].'</td>
                                <td>'.$row['r_email'].'</td>
        
                                    </tr>'
                                    ;
                            }
                            echo ' </tbody>
                            </table>';
                           
                        }
                        else{
                            echo '0 Results';
                        }
                    }


                    ?>

    </div>

</div>

<!-- End Dashboard 2nd Column -->

<?php include('includes/footer.php');?>