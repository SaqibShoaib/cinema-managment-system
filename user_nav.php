<?php
session_start();
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
<header class="text-gray-700 body-font bg-red-50">
<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
        <a class="mr-5 hover:text-gray-900 cursor-pointer hover:bg-red-400 p-2 font-semibold"
            href="index.php">HOME</a>
        <a class="mr-5 hover:text-gray-900 cursor-pointer hover:bg-red-400 p-2 font-semibold"
            href="About.php">ABOUT</a>
        <a class="mr-5 hover:text-gray-900 cursor-pointer hover:bg-red-400 p-2 font-semibold"
            href="pricing.php">PRICING</a>
            <a class="hover:text-gray-900 cursor-pointer hover:bg-red-400 p-2 font-semibold"
                href="Contact_us.php">CONTACT US</a>';
            if ($loggedin) {
                echo '<a class="hover:text-gray-900 cursor-pointer hover:bg-red-400 p-2 font-semibold"
                    href="login/logout.php">LOG OUT</a>';
            }
            echo '</nav>
    <a
        class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full"
            viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">CINE-X</span>
    </a>';
    if(!$loggedin){
        echo '<div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
        <a href="login/signup.php">
        <button
        class="font-bold inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-red-400 hover:text-white rounded text-base mt-4 md:mt-0"
        >BOOK
        TICKET NOW
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
        </button>
        </a>
        </div>';
    }
    if ($loggedin) {
        echo '<div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
        <a href="login/welcome.php">
        <button
        class="font-bold inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-red-400 hover:text-white rounded text-base mt-4 md:mt-0"
        >BACK TO USER
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
        </button>
        </a>
        </div>';
    }
echo '</div>
</header>
</body>
</html>';
?>