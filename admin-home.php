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
            <h3 align="center">Add Blood Information</h3>
            <div id="body">

                <form action="" method="post">
                    <table align="center">
                        <tr>
                            <td width="200px" height="70px"><br>Enter blood Group</td>
                            <td width="100px" height="70px"> <input type="text" name="blood_group" placeholder="Enter Blood Group" required style="width: 180px; height:30px;border-radius:10px"></td>
                        </tr>

                        <tr>
                            <td width="200px" height="70px"><br>Enter Quntity </td>
                            <td width="200px" height="70px"> <input type="number" name="quantity" placeholder="Enter quantity" required style="width:180px; height:30px;border-radius:10px;">
                            </td>
                        </tr>

                        <tr>
                            <td width="200px" height="70px"><br>Enter Hospital Name </td>
                            <td width="200px" height="70px"> <input type="text" name="hospital_name" placeholder="Enter Hospital Name" required style="width:180px; height:30px;border-radius:10px;">
                            </td>
                        </tr>

                        <tr>
                            <td><input type="submit" name="sub" value="Submit" class = "btn btn-primary btn-md btn-block"></td>
                        </tr>



                    </table>
                    
                  <br>
                </form>
                <a  style="margin-left: 35%;"  href="request-page.php" class="btn btn-primary btn-lg text-center  active" role="button" aria-pressed="true" name = "sub">View Requests</a>
                

                    <?php
                    $un = $_SESSION['un'];
                    if (!$un) {
                        header("Location:index.php");
                    }
                    ?>


                    <?php
                    if (isset($_POST['sub'])) {
                        $blood_group = $_POST['blood_group'];
                        $quantity = $_POST['quantity'];
                        $hospital_name = $_POST['hospital_name'];
                        $q = $db->prepare("INSERT INTO  blood_group (blood_group,quantity,hospital_name) values (:blood_group,:quantity,:hospital_name)");

                        $q->bindValue('blood_group', $blood_group);
                        $q->bindValue('quantity', $quantity);
                        $q->bindValue('hospital_name', $hospital_name);

                        if ($q->execute()) {
                            echo "<script>alert('form submited success')</script>";
                        } else {
                            echo "<script>alert('form Not submited')</script>";
                        }
                    }
                    ?>
                   

            </div>
            <div id="footer">
                <h4 align="center">Copyright@Blood-Bank</h4>
                <p align="center"><a href="logout.php">
                        <font color="white" </font>LogOut </a> </p> </div> </div> </div> </div> </body> </html>