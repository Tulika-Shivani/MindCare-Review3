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
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us page</title>
  <?php include 'navCss.php' ?>
  <?php include 'AboutUsCss.php' ?>
</head>

<body>
  <div class="content">
    <!--Navigation bar on the top of the page-->
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
    <div class="about-section">
      <h1>About Us</h1>
      <p>We, at MindCare aim to normalize the issues of mental health.</p>
      <p>This is an initiative from our side to make everyone feel 'They are amazing' and help them cope with all their
        stress.</p>
    </div>
    <!-- Using div tags in a row column fashion to get 2 columns-->
    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
      <div class="column">
        <div class="card">
          <img id="tulika" src="./Assets/Tulika.jpeg" alt="Tulika">
          <div class="container">
            <h2>Tulika Shivani</h2>
            <p class="title">3rd year Student,VIT Vellore</p>
            <p>tulika.shivani2018@vitstudent.ac.in</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img id="anvita" src="./Assets/Anvita.jpg" alt="Anvita">
          <div class="container">
            <h2>Anvita Gupta</h2>
            <p class="title">3rd year Student,VIT Velore</p>
            <p>anvita.gupta2018@vitstudent.ac.in</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>