<?php
include("config.php");
session_start();
ob_start();
if(isset($_POST['submit']))
{
    if(isset($_GET['token']))
    {
        $token = $_GET['token'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

        $pass = password_hash($password, PASSWORD_DEFAULT);

        if($password == $repassword)
        {
            $updatequery = "UPDATE users SET password='$pass' WHERE token='$token'";
            $queryresult = mysqli_query($connection, $updatequery);
            if($queryresult)
            {
                $_SESSION['msg'] = "your password has been updated";
                header('location:login.php');
            }
            else{
                $_SESSION['passmsg'] = "password is not updated";
                header("location:forgot.php");
            }
        }else
        {
            echo "Retype password";
        }
    }else
    {
        echo "no user found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link  rel="stylesheet" href="./forgot.css" />
</head>
<body>
    <p>
        <?php 
            if(isset($_SESSION['passmsg']))
            {
                echo $_SESSION['passmsg'];
            }
        ?>
    </p>
    <div class="container">
        <h3>Get a new password</h3>
        <hr>
        <form action="" method="post">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="repassword" placeholder="Retype password">
            <input type="submit" name="submit" value="Update password">
        </form>
    </div>
</body>
</html>