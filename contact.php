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
    <?php include 'navCss.php' ?> 
    <?php include 'contactCss.php' ?>
</head>

<body>
    <img class="bg" src="./Assets/bg.jpg">
    <div class="content">
            <div class="nav">
              <a href="index.php">Home</a>
              <a href="assessment.php">Self-assessment</a>
              <a href="./EmotionDetect/templates/home.html">Emotion Detector</a>
              <a href="contact.php">Seek Help</a>
              <a href="AboutUs.php">About Us</a>
              <a href="login.php">Login</a>
              <a href="signup.php">Sign Up</a>
              <form method='post' action="">
                  <input type="submit" class="logout" value="Logout" name="logout">
              </form>
            </div>
        <div class="home">
            <h1 id="title">We're here to listen</h1>
            <img id="counsel" src="./Assets/therapy.jpeg">
        </div>
        <h2 id="desc">"Your mental health is our priority."</h2>
        <div class="contact">
        <form target="_blank" method="POST" action="saveAppointment.php">
            <input type="submit" class="button" value="Book an Appointment">
        </form>
        </div>
    </div>
</body>

</html>