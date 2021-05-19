<?php
include '../conn.php';
$login = false;
$showError = false;
// $showInfo = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users074` where username = '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password,$row['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: welcome.php");
            } else {
                $showError = true;
            }
        }
    } else {
        $showError = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    require '_nav.php';
    if ($login) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> You are loggedin Successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    } else if ($showError) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> Your username or password  Dosen't match.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    ?>
    <div class="container">
        <h1 class="text-center mt-4 mb-4">Login to Our Website</h1>
        <form action="./login.php" method="POST">
            <div class="mb-3 ">
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 ">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>


            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
    </div>
</body>

</html>