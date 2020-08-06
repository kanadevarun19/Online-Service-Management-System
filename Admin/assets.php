<?php 
define('TITLE','Assets');

define('PAGE','assets');
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
    <p class="bg-dark text-white p-2">Product/Part Details</p>

    <?php
        $sql="SELECT * FROM `assets_tb`";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num>0){
            echo'<table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">DOP</th>
                        <th scope="col">Available</th>
                        <th scope="col">Total</th>
                        <th scope="col">Original Cost Each</th>
                        <th scope="col">Selling Cost Each</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>';
                    while($row=mysqli_fetch_assoc($result)){
                        echo'<tr>
                            <td>'.$row["pid"].'</td>
                            <td>'.$row["pname"].'</td>
                            <td>'.$row["pdop"].'</td>
                            <td>'.$row["pava"].'</td>
                            <td>'.$row["ptotal"].'</td>
                            <td>'.$row["poriginalcost"].'</td>
                            <td>'.$row["psellingcost"].'</td>

                            <td>
                                <form action="editproduct.php" method="post" class="d-inline">
                                    <input type="hidden" name="id" value="'.$row["pid"].'">
                                    <button type="submit" class="btn btn-info mr-3" name="edit" value="Edit">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </form>
                                <form action="" method="post" class="d-inline">
                                    <input type="hidden" name="id" value="'.$row["pid"].'">
                                    <button type="submit" class="btn btn-secondary mr-3" name="delete" value="delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                                <form action="sellproduct.php" method="post" class="d-inline">
                                    <input type="hidden" name="id" value="'.$row["pid"].'">
                                    <button type="submit" class="btn btn-warning mr-3" name="issue" value="Issue">
                                        <i class="fas fa-handshake"></i>
                                    </button>
                                </form>
                            </td>


                        </tr>';
                    }
                echo'</tbody>
            </table>';
        }
        else{
            echo '0 Results';
        }
    ?>

</div>

<!-- End 2nd Column -->
<?php
    if(isset($_REQUEST['delete'])){
        $id=$_POST['id'];
        $sql="DELETE FROM `assets_tb` WHERE pid='$id'";
        $result=mysqli_query($con,$sql);
        if(!$result){
            echo 'Unable To Delete';
        }
        else{
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?closed"/>';

        }
    }
?>

</div>
<!-- End Row -->
<div class="float-right"><a href="addproduct.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>







</div>

            <!-- JavaScript Files -->
            <script src="../js/jquery.min.js"></script>
            <script src="../js/popper.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/all.min.js"></script>


</body>

</html>