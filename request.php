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
            <div id="body">
                <br><br>
                <form action="" method="post">
                    <table align="center">
                        <tr>
                            <td width="200px" height="70px"><br>Enter Name</td>
                            <td width="100px" height="70px"> <input type="text" name="UName" placeholder="Enter Your Name" required style="width: 180px; height:30px;border-radius:10px"></td>
                        </tr>

                        <tr>
                            <td width="200px" height="70px"><br>Enter Email </td>
                            <td width="200px" height="70px"> <input type="email" name="email" placeholder="Enter Email" required style="width:180px; height:30px;border-radius:10px;">
                            </td>
                        </tr>

                        <tr>
                            <td width="200px" height="70px"><br>Enter Address </td>
                            <td width="200px" height="70px"> <input type="text" name="Uaddress" placeholder="Enter Address" required style="width:180px; height:30px;border-radius:10px;">
                            </td>
                        </tr>

                        <tr>
                            <td width="200px" height="70px"><br>Enter Username </td>
                            <td width="200px" height="70px"> <input type="text" name="username" placeholder="Enter Username" required style="width:180px; height:30px;border-radius:10px;">
                            </td>
                        </tr>

                        <tr>
                            <td width="200px" height="70px"><br>Enter Blood Group </td>
                            <td width="200px" height="70px"> <input type="text" name="blood_group" placeholder="Enter Blood Group" required style="width:180px; height:30px;border-radius:10px;">
                            </td>
                        </tr>

                        <tr>
                            <td><input class="btn btn-primary" type="submit" name="sub" value="Submit" style="width:70px; height:30px;border-radius:5px;"></td>
                        </tr>


                    </table>
                </form>
            </div>


            <?php
            if (isset($_POST['sub'])) {
                $UName = $_POST['UName'];
                $email = $_POST['email'];
                $Uaddress = $_POST['Uaddress'];
                $username = $_POST['username'];
                $blood_group = $_POST['blood_group'];


                $q = $db->prepare("INSERT INTO  request (UName,email,Uaddress,username,blood_group) values (:UName,:email,:Uaddress,:username,:blood_group)");

                $q->bindValue('UName', $UName);
                $q->bindValue('email', $email);
                $q->bindValue('Uaddress', $Uaddress);
                $q->bindValue('username', $username);
                $q->bindValue('blood_group', $blood_group);




                if ($q->execute()) {
                    $_SESSION['un'] = $un;

                    header("Location:sample.php");
                } else {
                    echo "Form Not Submmited";
                }
            }
            ?>

            <div id="footer">
                <h4 align="center">Copyright@Blood-Bank</h4>
            </div>
        </div>
    </div>
</body>

</html>