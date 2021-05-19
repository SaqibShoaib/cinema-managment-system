<?php
include '../conn.php';
$showAlert = false;
$showError = false;
$showInfo = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    if (($password == $cpassword)) {
        $sql = "INSERT INTO `users074` (`username`, `password`) VALUES ( '$username', '$hash')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
        }
        else{
            $showInfo = true;
        }
    } 
    else {
        $showError = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <?php
    require '_nav.php';
    if ($showAlert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your account is created Successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    } else if ($showError) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> Your account is not created because password Dosen't match.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    } else if ($showInfo) {
        echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> Your account is not created because Username already exist.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
    ?>
    <div class="container">
        <h1 class="text-center mt-4 mb-4">Sign Up to Our Website</h1>
        <form action="./signup.php" method="POST">
            <div class="mb-3 ">
            <div id="CpasswordHelp" class="form-text mb-2">Username max  30 chracters long.</div>
                <label for="username" class="form-label">User Name</label>
                <input type="text" maxlength="30" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 ">
            <div id="CpasswordHelp" class="form-text mb-2">Password max  10 chracters long.</div>
                <label for="password" class="form-label">Password</label>
                <input type="password" maxlength="10" name="password" class="form-control" id="password">
            </div>
            <div id="CpasswordHelp" class="form-text mb-2">Please Type The same password.</div>
            <div class="mb-3 ">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" maxlength="10" name="cpassword" class="form-control" id="cpassword">
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
</body>

</html>