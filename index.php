<?php
  session_start();
  if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You have to log in first";
      header('location: login.php');
    }
    // logout
    if(isset($_POST['logout'])){
        session_destroy();
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php include 'style.php' ?>
    
</head>

<body>
    <!--Background image-->
    <img class="bg" src="./Assets/bg.jpg">

    <div class="content">
        <!--Div for the navigation bar-->
        <div class="nav">
            <a href="index.php">Home</a>
            <a href="assessment.php">Self-assessment</a>
            <a href="./EmotionDetect/templates/home.html">Emotion Detector</a>
            <a href="contact.php">Seek Help</a>
            <a href="AboutUs.php">About Us</a>
            <a href="login.php">Login</a>
            <a href="SignUp.php">Sign Up</a>
            <form method='post' action="">
                <input type="submit" class="logout" value="Logout" name="logout">
            </form>
        </div>
        <!--Div for the remaining home page-->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
   
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION['username'])) : ?>
            <p id="welcome">
                Welcome 
                <strong>
                    <?php echo $_SESSION['username']; ?>
                </strong>
            </p>
           
        <?php endif ?>
        <div class="home">
            <h1 id="title">MindCare</h1>
            <img src="./Assets/brain.jpg" id="brain" alt="MindCare" usemap="#workmap">
            <!--Using Image map on the home page-->
            <map name="workmap">
                <area alt="Mind" title="Mind" href="https://en.wikipedia.org/wiki/Mind#"
                    coords="250,55,176,102,176,178,199,250,248,262,266,231,287,266,334,252,361,170,354,86,284,52,268,80"
                    shape="poly">
                <area alt="Male Icon" title="Male Icon" href="https://en.wikipedia.org/wiki/Meditation"
                    coords="111,180,100,192,104,206,91,220,82,232,84,242,91,247,95,262,91,272,76,270,60,279,63,292,82,296,101,297,122,295,150,296,163,282,148,273,133,273,127,272,130,259,130,244,140,241,138,232,133,224,124,218,120,201,118,184"
                    shape="poly">
                <area alt="Female Icon" title="Female Icon" href="https://en.wikipedia.org/wiki/Meditation"
                    coords="423,180,415,188,417,202,410,220,401,232,391,262,410,247,414,262,410,272,395,270,379,279,382,292,401,296,420,297,441,295,469,296,482,282,467,273,452,273,446,272,444,244,465,262,459,241,457,232,461,219,452,206,443,193,439,180"
                    shape="poly">
            </map>
        </div>
        <h2 id="desc">A website for your mental wellbeing!</h2>
        <p id="normal">Your mental health is as important as your physical health.If you think there is no one to listen
            to you, we have got your back!</p>
    </div>
    </div>
</body>

</html>