<?php
$page = "userdata";
require 'conn.php';
session_start();
// $sql = ;
$result = mysqli_query($conn, "SELECT SrNo,username FROM `db_cine_x`.`users074` where SrNo = '1'");
$row = mysqli_fetch_row($result);
// echo $row[0];
// echo "<br>". $row[1];
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true || $_SESSION['username'] != $row[1]) {
    session_unset();
    session_destroy();
    header("location: login/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
</head>
<body>
    <?php include 'admin_nav.php' ?>
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Welcome <?php echo $_SESSION['username'] ?></h4>
            <p>From Here You Can See all Users Data who ever signed in to you Website</p>
            <hr>
            <p class="mb-0">if you want to logout <a href="login/logout.php">Click Here</a></p>
        </div>
    </div>
    <!-- code to vierw movies -->
    <div class="container mt-5 mb-5">
        <table class="table table-stripes table-dark " id="myTable">
            <thead>
                <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">User Name</th>
                    <th scope="col">SignUp Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM users074";
                $result = mysqli_query($conn, $sql);
                $sno = 1;
                $row = mysqli_fetch_assoc($result);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo " <tr>
               <th scope='row'>" . $sno . "</th>
               <td>" . $row['username'] . "</td>
               <td>" . $row['date'] . "</td>
             </tr>";
                    $sno++;
                }
                ?>
             </div>
            </tbody>
       </table>
    </div>

</body>
</html>