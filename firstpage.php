

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link rel='stylesheet' href='./firstpages.css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="nav">
        <div class="logo">
            <img src="./images/morale1.png" alt="">
        </div>
        <div class="tabs">
            <ul>
                <li class="active"><a href="">HOME</a></li>
                <li class="lines"><a href="./logout.php">USERS</a></li>
                <li class="lines"><a href="">TEAM</a></li>
                <li class="lines"><a href="#feedback">CONTACT</a></li>
            </ul>
        </div>

        <div class="loginbtn">
            <p class="signup"><a href="./registration.php">Sign Up</a></p>
            <p class="login"><a href="./login.php">Log in</a></p>
        </div>

    </div> 
    <div class="moto">
        <h3>WE'RE HERE WHEN YOU NEED US</h3>
    </div>
    <div class="para">
        <p>At morale we are commited to help every human being around the world who are affected by covid-19.
             Here you can contact with each user(No Third Party Invloved) by Onclicking the user button.
             You can also get an fast medical help by just pressing "emergency" button.
        </p>
    </div>
    <div class="btns">
        <p class="explore"><a href="#middlepage">Explore <i class="fa fa-arrow-circle-down icon" aria-hidden="true"></i></a></p>
        <p class="emergency"><a href="./login.php">Emergeny</a></p>
    </div>
    <!-- <img class="curve" src="./images/curve2.png"> -->
    <img class="png" src="./images/doctor.png" alt="">

    <!--middle page-->
    <div class="middlepage" id="middlepage">
        <div class="info">
            <h1>SAFTEY MEASURES</h1>
            <P>To ensure everyone???s well being, our team is commited to this</P>
        </div>
        <div class="image">
            <img src="./images/canva.jpg">
        </div>
        <div class="hands">
            <img src="./images/hands1.png" alt="">
        </div>
        <div class="about">
            <h1>COVID-19 IN TODAY???S SOCIETY</h1>
        </div>
    </div>

    <!--unite page -->
    <div class="unite">
        <h3>Unite Together</h3>
        <div class="box-one">
            <div class="box-two">
                <img class='corona2' src="./images/corona2.jpeg">
            </div>
            <div class="box-three">
                <div class="paragraph">
                    <pre>
                        Our world is facing a very serious challenge with the
                        spread of the coronavirus, but there is hope on the 
                        horizon.

                        Businesses have been greatly impacted as the economy
                        has taken a hit because of COVID-19. Early on,grocery
                        stores were left with empty shelves while restaurants
                        were like ghost towns.

                        ???It???s a unique opportunity for brands to <span style="color: #368A7B;"> unite together!</span>
                        said Thrive social media manager Savannah Keck. ???Our 
                        communities need each other now more than ever. People 
                        need support, understanding,education, resources. Social 
                        media can provide just that and can be extremely powerful
                        if it???s done correctly.???
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <!--feedback form-->
        <div class="box" id="feedback">
            <div class="caption">

                <!--first box-->
                <div class="first-box">
                    <div class="imgbx">
                        <img src="./images/img1.jpg">
                    </div>

                    <div class="introduction">
                        <h1><span>Here to help</span></h1>
                        <h3 class="para1">Things may feel particullarly challenging right now . We beleive in the power of small
                            businesses to make positive change in the world and in the people???s lives. We want to partner
                            with you to make it through</h3>
                        <h3><span>Thank you</span></h3>
                    </div>
                </div>

                <!--second box-->
                <div class="second-box">
                    <h1 class="feedback">Feedback</h1>
                    <div class="form-container">
                        <form action="" autocomplete="off">
                            <input type="text" name="fullname" placeholder="Enter Your Fullname" autocomplete="save-password">
                            <input type="text" name="phone" placeholder="Phone" autocomplete="save-password">
                            <input type="text" name="email" placeholder="Email" autocomplete="save-password">
                            <input type="text" name="address" placeholder="Enter your residential address" autocomplete="save-password">
                            <fieldset>
                                <legend>Feedback</legend>
                                <textarea name="" id="" cols="55" rows="10"></textarea>
                            </fieldset>
                            <input type="submit" name="submit" value="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>

<script src="./welcome.js"></script>