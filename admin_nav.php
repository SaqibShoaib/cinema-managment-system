<?php
require 'conn.php';
//session_start();
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
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin.php">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == "admin" ? "active" : "")?>" aria-current="page" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == "userdata" ? "active" : "")?>" href="usersdata.php">Users Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == "ticketdata" ? "active" : "")?>" aria-current="page" href="TicketsSold.php">Tickets Data</a>
                    </li>
                </ul>
                <button class="btn btn-success me-2"><a class="link-light text-decoration-none" href="index.php">Visit Website</a>
                </button>
                <button class="btn btn-danger"><a class="link-light text-decoration-none"
                        href="login/logout.php">Logout</a> </button>
            </div>
        </div>
    </nav>
</body>

</html>