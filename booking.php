<?php 
include 'conn.php';
?>
 <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fn = $_POST['name'];
        $ln = $_POST['lastname'];
        $em = $_POST['email'];
        $ad = $_POST['address'];
        $zip =$_POST['zip'];
        //Inserting DATA
        $sql = "INSERT INTO `ticket` (`First_Name`, `Last_Name`, `Email_Address`, `Address`, `Zip/Postal`, `Date`) VALUES ( '$fn', '$ln', '$em', '$ad', '$zip', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result) {
           header("Location: practtic.php");
        } else {
            {echo "Data is not inserted because--->" . mysqli_error($conn);
            header("Location: practtic.php");}
        }
   }
        
    ?>