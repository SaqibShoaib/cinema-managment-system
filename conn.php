
<?php
    //Connecting to Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "DB_CINE_X";
    //connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("<br>Sorry We are Failed to Connect: " . mysqli_connect_error());
    }
    // else{
    //     echo "Success,,,";
    // }
    ?>