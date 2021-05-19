<?php
include '../conn.php';
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
$sql = "SELECT SrNo,username FROM `db_cine_x`.`users074` where SrNo = '1'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo 'Could not run query: ' . mysqli_error($result);
    exit;
}
$row = mysqli_fetch_row($result);
if ($_SESSION['username'] == $row[1] && $row[0] == '1') {
    header("location:../admin.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <title>Welcome-<?php echo $_SESSION['username'] ?></title>
</head>

<body>
    <?php include '_nav.php'; ?>
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Welcome <?php echo $_SESSION['username'] ?></h4>
            <p>Welcome to CINE-X now book Your Ticket<br>You are Successfully logged In<br><b>Cheers!</b></p>
            <hr>
            <p class="mb-0">if you want to logout <a href="logout.php">Click Here</a></p>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <h3 class="text-center">Here is the List of All Movies You Purchased.</h3>
        <table class="table table-stripes table-dark mt-4" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Ticket No</th>
                    <th scope="col">Movie TItle</th>
                    <th scope="col">Screen</th>
                    <th scope="col">Movie Time</th>
                    <th scope="col">Date of Purchase</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $user = $_SESSION['username'];
                $sql = "SELECT * FROM `ticket` WHERE username = '$user' ORDER BY `TickeID` DESC";
                $result = mysqli_query($conn, $sql);
                $sno = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $d = date_create($row['dt']);
                    echo " <tr>
               <th scope='row'>" . $row['TickeID'] . "</th>
               <td>" . $row['Movie_Title'] . "</td>
               <td>" . $row['screen'] . "</td>
               <td>" . $row['screen_time']."</td>
               <td>" . date_format($d,"Y-m-d  h:i:A") ."</td>
             </tr>";
                    $sno++;
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>