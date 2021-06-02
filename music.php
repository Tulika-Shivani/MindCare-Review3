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
    <title>Lighten-Up your mood</title>
    <?php include 'navCss.php' ?>
    <?php include 'musicCss.php' ?>
</head>
<body>
    <img class="bg" src="./Assets/bg.jpg">
    <div class="content">
        <!--Nav bar-->
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
        </div>
        <div class="music">
            <h1>Lighten Up your mood</h1>
            <div class="center" id="intro">
            </div>
        </div>
        <div id="songs">
        </div>
    </div>
    <script>
    var score = sessionStorage.getItem("score");
    var intro = "We heard you are";
    if(score >= 0 && score<8)
    {
        intro += " doing really good. Here is some amazing music to groove on!";
        //1.
        var audio1 = document.createElement("audio");
         if (audio1.canPlayType("audio/mpeg")) {
           audio1.setAttribute("src","./Assets/happiness-802.mp3");
       } 
         audio1.setAttribute("controls", "controls");
         document.getElementById('songs').appendChild(audio1);
        var audio2 = document.createElement("audio");
         if (audio2.canPlayType("audio/mpeg")) {
           audio2.setAttribute("src","./Assets/wataboi-wake-up-instrumental-1162 (1).mp3");
         }
        audio2.setAttribute("controls", "controls");
        document.getElementById('songs').appendChild(audio2);
        var audio3 = document.createElement("audio");
         if (audio3.canPlayType("audio/mpeg")) {
           audio3.setAttribute("src","./Assets/this-morning-3938.mp3");
         } 
        audio3.setAttribute("controls", "controls");
        document.getElementById('songs').appendChild(audio3);
    }
    if(score>=8 && score<=15)
    {
        intro += " good. Here is  some soothing music for you";
        //1.
        var audio1 = document.createElement("audio");
         if (audio1.canPlayType("audio/mpeg")) {
           audio1.setAttribute("src","./Assets/winter-afternoon-2720.mp3");
       } 
         audio1.setAttribute("controls", "controls");
         document.getElementById('songs').appendChild(audio1);
        var audio2 = document.createElement("audio");
         if (audio2.canPlayType("audio/mpeg")) {
           audio2.setAttribute("src","./Assets/modular-ambient-04-792.mp3");
         }
        audio2.setAttribute("controls", "controls");
        document.getElementById('songs').appendChild(audio2);
        var audio3 = document.createElement("audio");
         if (audio3.canPlayType("audio/mpeg")) {
           audio3.setAttribute("src","./Assets/dear-to-my-heart-1253.mp3");
         } 
        audio3.setAttribute("controls", "controls");
        document.getElementById('songs').appendChild(audio3);
    
    }
    if(score>15 && score<=30)
    {
        intro += " not feeling at your best. Here is some light-hearted music to help you feel better"; 
        //1.
        var audio1 = document.createElement("audio");
         if (audio1.canPlayType("audio/mpeg")) {
           audio1.setAttribute("src","./Assets/true-love-804.mp3");
       } 
         audio1.setAttribute("controls", "controls");
         document.getElementById('songs').appendChild(audio1);
        var audio2 = document.createElement("audio");
         if (audio2.canPlayType("audio/mpeg")) {
           audio2.setAttribute("src","./Assets/mezhdunami-uncut-gems-1198.mp3");
         }
        audio2.setAttribute("controls", "controls");
        document.getElementById('songs').appendChild(audio2);
        var audio3 = document.createElement("audio");
         if (audio3.canPlayType("audio/mpeg")) {
           audio3.setAttribute("src","./Assets/freeze-my-soul-825.mp3");
         } 
        audio3.setAttribute("controls", "controls");
        document.getElementById('songs').appendChild(audio3);
    }
    if(score>30 && score<=45)
    {
        intro += " feeling down lately. Here is some music to cheer you up.";
        //1.
        var audio1 = document.createElement("audio");
         if (audio1.canPlayType("audio/mpeg")) {
           audio1.setAttribute("src","./Assets/inspiring-803.mp3");
       } 
         audio1.setAttribute("controls", "controls");
         document.getElementById('songs').appendChild(audio1);
        var audio2 = document.createElement("audio");
         if (audio2.canPlayType("audio/mpeg")) {
           audio2.setAttribute("src","./Assets/pleasing-meditation-3786.mp3");
         }
        audio2.setAttribute("controls", "controls");
        document.getElementById('songs').appendChild(audio2);
        var audio3 = document.createElement("audio");
         if (audio3.canPlayType("audio/mpeg")) {
           audio3.setAttribute("src","./Assets/dreamy-piano-soft-sound-ambient-background-4049.mp3");
         } 
        audio3.setAttribute("controls", "controls");
        document.getElementById('songs').appendChild(audio3);
    }
    document.getElementById('intro').innerHTML = intro;
    </script>
</body>
</html>
