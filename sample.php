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
            <br><br>
            <div id="body">
                <h2 align="center">Available Blood samples</h2>
                <br><br>
                <table align="center" class="table table-bordered">
                    <tr>
                        <td>Hospital Name</td>
                        <td>Quantity</td>
                        <td>Blood Group</td>
                    </tr>

                    <?php
                    $q = $db->query("SELECT * FROM blood_group");
                    while ($r1 = $q->fetch(PDO::FETCH_OBJ)) {
                    ?>
                        <tr>
                            <td><?= $r1->hospital_name ?></td>
                            <td><?= $r1->quantity ?></td>
                            <td><?= $r1->blood_group ?></td>

                        </tr>
                    <?php
                    }
                    ?>
                </table>

                <p align="center"><a href="request.php" class="btn btn-danger btn-lg enabled" role="button" aria-disabled="true">Request Sample</a></p>

                <?php

                ?>
            </div>
            <div id="footer">
                <h4 align="center">Copyright@Blood-Bank</h4>
               </div> </div> </div> </body> </html>