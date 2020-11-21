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

             <h1 align = "center"> Logine As Receivers</h1>

             <div align = "center">
             <form action="" method="post">
                        <div class="form-group">
                        <tr>
                            <td width="200px" height="70px"><br>Enter Username</td>
                            <td width="100px" height="70px"> <input class="form-control"  id="exampleInputEmail1" type="text" name="un" placeholder="Enter Username" style="width: 180px; height:30px;border-radius:10px"></td>
                        </tr>

                        </div>

                       <div class="form-group">
                       <tr>
                            <td width="200px" height="60px"><br>Enter Password</td>
                            <td width="200px" height="70px"> <input class="form-control" type="password" name="ps" placeholder="Enter Password" style="width:180px; height:30px;border-radius:10px;">
                            </td>
                        </tr>

                       </div>

                        <tr>
                            <td><input class="btn btn-danger" type="submit" name="sub" value="Login" style="width:70px; height:30px;border-radius:5px;"></td>
                        </tr>



                    </table>
                </form>
             </div>
              
                <?php
                if (isset($_POST['sub'])) {
                    $un = $_POST['un'];
                    $ps = $_POST['ps'];
                    $q = $db->prepare("SELECT * FROM receivers where uname = '$un' && pass = '$ps'");
                    $q->execute();
                    $res = $q->fetchAll(PDO::FETCH_OBJ);
                    if ($res) {

                        $_SESSION['un'] = $un;
                        header("Location:sample.php");
                    } else {
                         header("Location:index.php");                    }
                }

                ?>
            </div>

            <div id="footer">
                <h4 align="center">Copyright@Blood-Bank</h4>
                </div> </div> </div> </body> </html>