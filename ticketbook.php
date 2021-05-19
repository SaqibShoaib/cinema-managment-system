<?php
include 'conn.php';
// include 'booking.php';
session_start();
//echo $_SESSION['username'];
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login/login.php");
    exit;
}
$inserted = false;
$notinserted = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="output.css">
    <title>Book your ticket</title>
</head>

<body>

    <!-- header -->
    <header class="text-gray-700 body-font bg-red-50">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a class="mr-5 hover:text-gray-900 cursor-pointer hover:bg-red-400 p-2 font-semibold" href="index.html">HOME</a>
                <a class="mr-5 hover:text-gray-900 cursor-pointer hover:bg-red-400 p-2 font-semibold" href="About.html">ABOUT</a>
                <a class="mr-5 hover:text-gray-900 cursor-pointer hover:bg-red-400 p-2 font-semibold" href="login/logout.php">LOG OUT</a>
                <a class="mr-5 hover:text-gray-900 cursor-pointer hover:bg-red-400 p-2 font-semibold" href="pricing.html">PRICING</a>
                <a class="hover:text-gray-900 cursor-pointer hover:bg-red-400 p-2 font-semibold" href="Contact_us.html">CONTACT US</a>
            </nav>
            <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">CINE-X</span>
            </a>
            <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
                <a href="login/welcome.php">
                    <button class="font-bold inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-red-400 hover:text-white rounded text-base mt-4 md:mt-0" href="login/welcome.php">BACK TO USER PAGE
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $_SESSION['username'];
            $sql = "SELECT SrNo,username FROM `db_cine_x`.`users074` where username = '$user'";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo 'Could not run query: ' . mysqli_error($result);
                exit;
            }
            $row = mysqli_fetch_row($result);
            $uname = $row[1];
            $srno = $row[0];
            $movie_title = $_POST['choice'];
            $screen = $_POST['screen'];
            $time = $_POST['time'];
            $sql = "INSERT INTO `ticket` (`UserID`, `username`, `Movie_Title`, `screen`, `screen_time`, `dt`) 
            VALUES ('$srno', '$uname', '$movie_title', '$screen', '$time', CURRENT_TIMESTAMP)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $inserted = true;
            } else {
                $notinserted = true;
            }
        }
        ?>
    </header>
    <!-- hero section -->
    <div class="w-full py-24 px-6 bg-cover  bg-no-repeat bg-center relative z-10" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(pics/hero.jpg);">

        <div class="container max-w-4xl mx-auto text-center">
            <h1 class="text-xl font-bold leading-tight md:text-3xl text-center text-gray-100 mb-3">BOOK A TICKET NOW</h1>
        </div>

    </div>
    <?php
    if ($inserted) {
        echo "<div class='px-4 py-3 leading-normal text-red-100 bg-green-700 ' role='success'>
            <h3><b>Success! </b><i>Your Tickect has Booked Successfully</i></h3>
          </div>";
    }
    if ($notinserted) {
        echo "<div class='px-4 py-3 leading-normal text-red-100 bg-red-700 ' role='alert'>
            <h3><b>ERROR! </b><i>Your Tickect is not Booked due to some technical issues </i></h3>
          </div>";
    }
    ?>
    <!-- Form -->
    <form action="/public/ticketbook.php" method="POST">
        <section class="text-gray-700 body-font relative">
            <div class="container px-5 py-16 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Welcome <?php echo $_SESSION['username'] ?></h1>
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Book Your Favourite Movie Now</h1>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">


                        <div class="w-1/3">
                            <label for="city" class="block text-sm font-medium text-gray-700">Movie Title</label>
                            <select id="choice" name="choice" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <?php
                                $sql = "SELECT * FROM movies";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option>" . $row['Movie_Title'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="w-1/3">
                            <label for="state" class="block text-sm font-medium text-gray-700">PACKAGE</label>
                            <select id="screen" name="screen" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>STARTER</option>
                                <option>PRO</option>
                                <option>BIG SCREEN</option>
                                <option>BIG SCREEN SPECIAL</option>
                            </select>
                        </div>

                        <div class="w-1/3">
                            <label for="postal_code" class="block text-sm font-medium text-gray-700">SCREEN TIME</label>
                            <select id="time" name="time" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>9:30 AM</option>
                                <option>1:00 PM</option>
                                <option>6:30 PM</option>
                                <option>9:30 PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="p-2 w-full mt-7">
                        <button type="submit" name="submit" class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">Book Ticket</button>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </form>


    </div>
    </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>
</body>

</html>