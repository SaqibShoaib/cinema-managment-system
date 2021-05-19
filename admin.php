<?php
require 'conn.php';
$page = "admin";
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
$insert = false;
$update = false;
$delete = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <title>Welcome to admin Panel</title>
    <?php
    if (isset($_GET['delete'])) {
        $sno = $_GET['delete'];
        $delete = true;
        $sql = "DELETE FROM `movies` WHERE `movies`.`Sr.No` = $sno";
        $result = mysqli_query($conn, $sql);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['snoEdit'])) {
            $sno = $_POST['snoEdit'];
            $movie = $_POST['movie_title_edit'];
            $movie_duration = $_POST['duration_edit'];
            //Inserting DATA
            $sql = "UPDATE `movies` SET `Movie_Title` = '$movie', `Movie_Duration` = '$movie_duration'  WHERE `movies`.`Sr.No` = '$sno'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $update = true;
            } else {
                echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Error!</strong> You should check in on some of those fields below. or You Already have a movie in DATABASE with same name
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
            }
        } else {
            $movie = $_POST['movie_title'];
            $movie_duration = $_POST['duration'];
            //Inserting DATA
            $sql = "INSERT INTO `movies` (`Movie_Title`, `Movie_Duration`, `date_time`) VALUES ('$movie', '$movie_duration', CURRENT_TIMESTAMP)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $insert = true;
            } else {
                echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Error!</strong> You should check in on some of those fields below. or You Already have a movie in DATABASE with same name
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
            }
        }
    }
    ?>
</head>

<body>
    <!-- Edit modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
    Edit Modal
</button> -->

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModallabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModallabel">Edit Movie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="mt-4" action="admin.php" method="post">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="mb-3">
                            <label for="movie_title" class="form-label">Movie Title</label>
                            <input type="text" name="movie_title_edit" class="form-control" id="movie_title_edit" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <input type="text" name="duration_edit" class="form-control" id="duration_edit">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Movie</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- nav_bar  -->
    <?php include 'admin_nav.php' ?>
    <?php
    if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Movie <strong>" . $movie . "</strong> with duration: <strong>" . $movie_duration . "min</strong> is <b>inserted</b> Successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    if ($update) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Movie <strong>" . $movie . "</strong> with duration: <strong>" . $movie_duration . "min</strong> is <b>Updated</b> Successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    if ($delete) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Movie <b>Deleted</b> Successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
        //   header("Location:admin.php");
    }


    ?>
    <div class="container">
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Welcome <?php echo $_SESSION['username'] ?></h4>
            <p>From Here You Can Add Delete and update Movie list</p>
            <hr>
            <p class="mb-0">if you want to logout <a href="login/logout.php">Click Here</a></p>
        </div>
    </div>
        <!-- form to add movies -->
        <form class="mt-4" action="admin.php" method="post">
            <div class="mb-3">
                <label for="movie_title" class="form-label">Movie Title</label>
                <input type="text" name="movie_title" class="form-control" id="movie_title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" name="duration" class="form-control" id="duration">
            </div>

            <button type="submit" class="btn btn-primary">Add Movie</button>
        </form>
    </div>
    <!-- code to vierw movies -->
    <div class="container mt-5 mb-5">
        <table class="table table-stripes table-dark " id="myTable">
            <thead>
                <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Movie Title</th>
                    <th scope="col">Movie Duration</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM movies";
                $result = mysqli_query($conn, $sql);
                $sno = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo " <tr>
               <th scope='row'>" . $sno . "</th>
               <td>" . $row['Movie_Title'] . "</td>
               <td>" . $row['Movie_duration'] . "</td>
               <td><button class ='edit btn btn-sm btn-primary' id=" . $row['Sr.No'] . ">Edit</button><button class ='delete ms-3 btn btn-sm btn-primary' id=i" . $row['Sr.No'] . ">Delete</button></td>
             </tr>";
                    $sno++;
                }
                ?>

            </tbody>
        </table>
    </div>
    <script>
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                tr = e.target.parentNode.parentNode;
                title = tr.getElementsByTagName("td")[0].innerText;
                dura = tr.getElementsByTagName("td")[1].innerText;
                console.log(title, dura);
                snoEdit.value = e.target.id;
                console.log(e.target.id);
                movie_title_edit.value = title;
                duration_edit.value = dura;
                $('#editModal').modal('toggle');
            })
        })

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                sno = e.target.id.substr(1);
                if (confirm("Press a Button!")) {
                    console.log("yes");
                    window.location = `admin.php?delete=${sno}`;
                } else {
                    console.log("No");
                }
            })
        })
    </script>
</body>

</html>