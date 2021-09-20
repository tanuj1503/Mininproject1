<?php
    include("config.php");
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recover Password</title>
    <link rel="stylesheet" href="recover.css" />
</head>
<body>
    <div class="container">
        <h3>Find your Account</h3>
        <hr>
        <p>Please enter your email to recover the password</p>

        <form action="" method="post">
            <input type="text" name="email" placeholder="Enter email address">
            <div class="btn">
                <input type="submit" name="cancel" value="cancel" class="cancel"> 
                <input type="submit" name="submit" value="send" class="send">
                <?php
                    if(isset($_POST['submit']))
                    {
                        $email = mysqli_real_escape_string($connection, $_POST['email']);
                        $emailquery = "SELECT * FROM users WHERE email='$email'";
                        $result = mysqli_query($connection, $emailquery);
                        $emailcount = mysqli_num_rows($result);

                        if($emailcount)
                        {
                            $userdata = mysqli_fetch_array($result);
                            $username = $userdata['username'];
                            $token = $userdata['token'];
                            
                            $subject = "Recover Password";
                            $body = "Hi, $username. Click here to get your new password 
                            http://localhost/MiniProject/forgot.php?token=$token";
                            $sender_email = "From: crate1520@gmail.com";

                            if(mail($email, $subject, $body, $sender_email))
                            {
                                $_SESSION['msg'] = "check your mail to recover the password $username";
                                header("location: login.php");
                            }else{
                                echo "email sending failed";
                            }
                        }else{
                            echo "no user found";
                        }
                    }
                ?>
            </div>
        </form>
    </div>

    <!--javascript-->
    <script>
        const cancel = document.querySelector('.cancel');
        const send = document.querySelector('.send');
        cancel.addEventListener('click', (e) => {
            e.preventDefault();
            cancel.style.backgroundColor = "red";
            cancel.style.color = "white";
            window.location.href = "login.php";
        })
        send.addEventListener('click', () => {
            send.style.backgroundColor = "green";
            send.style.color = "white";
        })
    </script>
</body>
</html>