<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/s1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
    <div id="full">
        <div id="inner_full">
            <div id="header">
                <h2 align="center">Blood Bank </h2>
            </div>
            <div id="body" style="background-image: url('images/images.jpg');
                                 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
                <br><br><br>

                <p align="center" class="text-success"><a class="btn btn-danger btn-lg" href="ReceiverLogine.php">Login As Receivers</a></p>
                <br><br>
                <p align="center" class="text-success"><a class="btn btn-danger btn-lg" href="HospitalLogine.php">Login As Hospital</a></p>


            </div>

            <div id="footer">
                <h4 align="center">Copyright@Blood-Bank</h4>
            </div>
        </div>
    </div>
</body>

</html>