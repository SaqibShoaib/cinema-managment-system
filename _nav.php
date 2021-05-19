<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
}
else{
  $loggedin = false;
}
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../bootstrap.min.css" />
    <script src="../bootstrap.min.js"></script>
   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">CINE_X</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../index.php">Home</a>
        </li>';
      if(!$loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="signup.php">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>';
      }
      if($loggedin){
        
        echo '<li class="nav-item">
          <a class="nav-link" href="../ticketbook.php">Book Ticket</a>
        </li>';
      }  
      echo '</ul>';
      if ($loggedin) {
        echo '<button class="btn btn-danger me-3"><a class="link-light text-decoration-none"
                        href="logout.php">Logout</a> </button>';
      }
      echo'
    </div>
  </div>
</nav>
</body>
</html>';
?>