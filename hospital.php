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
                <h2 align = "center" style="color:brown; ">Hospital Registration Page</h2>
                <form action="" method="post">
                    <table align="center">
                        <tr>
                            <td width="200px" height="70px"><br>Enter Email</td>
                            <td width="100px" height="70px"> <input type="email" name="email" placeholder="Enter Email" required style="width: 180px; height:30px;border-radius:10px"></td>



                        <tr>
                            <td width="200px" height="70px"><br>Enter Username</td>
                            <td width="100px" height="70px"> <input type="text" name="username" placeholder="Enter Username" required style="width: 180px; height:30px;border-radius:10px"></td>
                        </tr>
                        </tr>

                        <tr>
                            <td width="200px" height="70px"><br>Enter Password</td>
                            <td width="200px" height="70px"> <input type="password" name="pass" placeholder="Enter Password" required style="width:180px; height:30px;border-radius:10px;"></td>
                        </tr>

                        <tr>
                            <td><input type="submit" name="sub" value="SignUp" style="width:70px; height:30px;border-radius:5px;"></td>
                        </tr>
                    </table>

                </form>
                <p align = "center">Alredy registerd <a href="index.php" style="color: brown;">Login</a></p>
                <?php
                if (isset($_POST['sub'])) {
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $pass = $_POST['pass'];
                    $q = $db->prepare("INSERT INTO  hospital (email,username,pass) values (:email,:username,:pass)");

                    $q->bindValue('email', $email);
                    $q->bindValue('username', $username);
                    $q->bindValue('pass', $pass);

                    if ($q->execute()) {
                        header("Location:sample.php");
                    } else {
                        echo "<script>alert('form Not submited')</script>";
                    }
                }
                ?>
            </div>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <div id="footer">
                <h4 align="center">Copyright@Blood-Bank</h4>
            </div>
        </div>
    </div>
    </div>
</body>

</html>