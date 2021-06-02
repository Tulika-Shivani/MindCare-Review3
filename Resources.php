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
    <title>Reading Corner</title>
    <?php include 'navCss.php' ?>
    <?php include 'ResourcesCss.php' ?>
</head>

<body>
    <img class="bg" src="./Assets/bg.jpg">
    <div class="content">
        <!-- Nav bar-->
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
        <div class="resources">
            <h1>Resources to help you feel better...</h1>
            <div class="center" id="intro">
            </div>
        </div>
        <div id="frames"></div>
    </div>
    <script>
    var score = sessionStorage.getItem("score");
    var intro = "We heard you are";
    if(score >= 0 && score<8)
    {
        intro += " doing really good. Here are some resources to celebrate!";
        //1.
        var iframe1 = document.createElement('iframe');
        iframe1.src = 'https://greatergood.berkeley.edu/article/item/six_ways_happiness_is_good_for_your_health';
        iframe1.scrolling="yes";
        document.getElementById('frames').appendChild(iframe1);
        iframe1.setAttribute("style","height:700px;width:1200px;border:5px solid black;margin:50px 25px;backgroundColor:white;");
        //2.
        var iframe2 = document.createElement('iframe');
        iframe2.src = 'https://chasingabetterlife.com/benefits-of-being-happy/';
        document.getElementById('frames').appendChild(iframe2);
        iframe2.setAttribute("style","height:700px;width:1200px;border:5px solid black;margin:50px 30px;backgroundColor:white;");
        //3.
        var iframe2 = document.createElement('iframe');
        iframe2.src = 'https://www.youtube.com/embed/YwbBwPv6fek?autoplay=1&mute=1';
        document.getElementById('frames').appendChild(iframe2);
        iframe2.setAttribute("style","height:700px;width:1200px;border:5px solid black;margin:50px 30px;backgroundColor:white;");

    }
    if(score>=8 && score<15)
    {
        intro += " good. Here are some resources to cheer you up even more";
        //1.
        var iframe1 = document.createElement('iframe');
        iframe1.src = 'https://www.youtube.com/embed/cyEdZ23Cp1E?autoplay=1&mute=1';
        iframe1.scrolling="yes";
        document.getElementById('frames').appendChild(iframe1);
        iframe1.setAttribute("style","height:700px;width:1200px;border:5px solid black;margin:50px 25px;backgroundColor:white;");
        //2.
        var iframe2 = document.createElement('iframe');
        iframe2.src = 'https://www.youtube.com/embed/1RJqgHalbXs?autoplay=1&mute=1';
        document.getElementById('frames').appendChild(iframe2);
        iframe2.setAttribute("style","height:700px;width:1200px;border:5px solid black;margin:50px 30px;backgroundColor:white;");
        //3.
        var iframe2 = document.createElement('iframe');
        iframe2.src = 'https://www.youtube.com/embed/zSndsHZBI34?autoplay=1&mute=1';
        document.getElementById('frames').appendChild(iframe2);
        iframe2.setAttribute("style","height:700px;width:1200px;border:5px solid black;margin:50px 30px;backgroundColor:white;");
    }
    if(score>15 && score<=30)
    {
        intro += " not feeling at your best. Here are some resources to help you feel better"; 
        //1.
        var iframe1 = document.createElement('iframe');
        iframe1.src = 'https://www.brandman.edu/news-and-events/blog/fun-activities-that-improve-your-mental-health';
        iframe1.scrolling="yes";
        document.getElementById('frames').appendChild(iframe1);
        iframe1.setAttribute("style","height:700px;width:1200px;border:5px solid black;margin:50px 25px;backgroundColor:white;");
        //2.
        var iframe2 = document.createElement('iframe');
        iframe2.src = 'https://www.lifehack.org/874881/why-is-mental-health-important';
        document.getElementById('frames').appendChild(iframe2);
        iframe2.setAttribute("style","height:700px;width:1200px;border:5px solid black;margin:50px 30px;backgroundColor:white;");
        //3.
        var iframe2 = document.createElement('iframe');
        iframe2.src = './Assets/mental.png';
        document.getElementById('frames').appendChild(iframe2);
        iframe2.setAttribute("style","height:700px;width:1040px;border:5px solid black;margin:50px 100px;backgroundColor:white;");
    }
    if(score>30 && score<=45)
    {
        intro += " feeling down lately. Here are some resources that can help you out.";
        //1.
        var iframe1 = document.createElement('iframe');
        iframe1.src = 'https://indianhelpline.com/SUICIDE-HELPLINE/';
        iframe1.scrolling="yes";
        document.getElementById('frames').appendChild(iframe1);
        iframe1.setAttribute("style","height:700px;width:1200px;border:5px solid black;margin:50px 25px;backgroundColor:white;");
        //2.
        var iframe2 = document.createElement('iframe');
        iframe2.src = 'http://www.healthcollective.in/contact/helplines/';
        document.getElementById('frames').appendChild(iframe2);
        iframe2.setAttribute("style","height:700px;width:1200px;border:5px solid black;margin:20px 30px;backgroundColor:white;");
        //3.
        var iframe2 = document.createElement('iframe');
        iframe2.src = 'https://www.youtube.com/embed/z-IR48Mb3W0?autoplay=1&mute=1';
        document.getElementById('frames').appendChild(iframe2);
        iframe2.setAttribute("style","height:700px;width:1200px;border:5px solid black;margin:20px 30px;backgroundColor:white;");
    }
    document.getElementById('intro').innerHTML = intro;
    </script>
</body>

</html>
