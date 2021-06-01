<?php
  include "connect.php";
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
    <?php include 'navCss.php' ?>
    <?php include 'assessmentCss.php' ?>
    <title>Assessment</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <div class="text">
              <p class="heading" align="center"><bold>How are you feeling today?</bold></p>
              <!-- <p align="center" class="normal">Do you feel depressed, anxious or frustated?</p>
              <p align="center" class="normal">Do you have a question related to your own or someone else's mental health?</p> -->
        </div>
        <!-- <div class="moods">
            <div class="row">
                <div class="column">
                    <img src="./Assets/anxious.gif" alt="Anxious" style="width:100%" class="image">
                    <p align="center" class="normal">Anxious</p>
                </div>
                <div class="column">
                    <img src="./Assets/satisfied.gif" alt="Satisfied" style="width:100%" class="image">
                    <p align="center" class="normal">Satisfied</p>
                </div>
                <div class="column">
                    <img src="./Assets/happy.gif" alt="Happy" style="width:100%" class="image">
                    <p align="center" class="normal">Happy</p>
                </div>
                <div class="column">
                    <img src="./Assets/upset.gif" alt="Upset" style="width:100%" class="image">
                    <p align="center" class="normal">Upset</p>
                </div>
                <div class="column">
                    <img src="./Assets/frustated.gif" alt="Frustrated" style="width:100%" class="image">
                    <p align="center" class="normal">Frustrated</p>
                </div>
                
            </div>
        </div>
        <button class="btn" >Know more</button>
    </div>   -->
    <div>
        <div id="assessment">
          <div >
            <img class="image" src="./Assets/mood.jpg" alt="quiz" border="0"></a>
          </div>
      
          <div id="main">
    </div>
    <div class="grid">
        <div id="quiz">
            <h1>Choose one from the options.</h1>
            <hr style="margin-bottom: 10px">

            <p id="question"></p>

            <div class="
            ">
                <button id="btn0"><span id="choice0"></span></button>
                <button id="btn1"><span id="choice1"></span></button>
                <button id="btn2"><span id="choice2"></span></button>
                <button id="btn3"><span id="choice3"></span></button>
            </div>

            <hr style="margin-top: 10px">
            <footer>
                <p id="progress">Question x of y</p>
            </footer>
            <p id="knowmore"></p>
        </div>
        <p id="saving"></p>
        
    </div>
    
  </div>
  </div>
  <script>
  function Quiz(questions){  //initializing quiz
    this.score = 0;
    this.questions = questions;
    this.questionIndex = 0;
  }

Quiz.prototype.getQuestionIndex = function() {  //retrieving question from array
    return this.questions[this.questionIndex];
}

Quiz.prototype.guess = function(answer) {  //main fn to calculate score
    if(this.getQuestionIndex().isCorrectAnswer(answer)) { //checking answer
        var ans = this.getQuestionIndex().isCorrectAnswer(answer);
      if(ans == "Never")
      {
      
    }
    else if(ans == "Sometimes")
    {
    this.score++;
    
    //this.score++;
  }
  else if(ans == "Frequently")
  {
  this.score++;
  this.score++;
  
}
 else if(ans == "Always")
{
this.score++;
this.score++;
this.score++;
}

}

    this.questionIndex++;
}

Quiz.prototype.isEnded = function() { //ending condition(check if length is valid)
    return this.questionIndex === this.questions.length;
}


function Question(text, choices, answer) { //defining question structure
    this.text = text;
    this.choices = choices;
    this.answer = answer;

}

Question.prototype.isCorrectAnswer = function(choice) { //return integer choice

    return choice;
}


function populate() {
    if(quiz.isEnded()) {
        showScores(); //score display
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess1("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess1(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess); //passing string answer as choice
        populate();
    }
};


function showProgress() { //current question number
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};

function showScores() {
    var gameOverHTML = "<h1>We have evaluated your answers! </h1>";
    gameOverHTML += "<h2 id='score' style='margin-top:40px; color:white;'> Your score: " + quiz.score +" out of 45"+ "</h2>";
    if(quiz.score >= 0 && quiz.score<8){
      gameOverHTML += "<h2 id='score'> Congratulations!" + "</h2>";
      gameOverHTML += "<h2 id='score'> You are absolutly fit Mentally!🎉" + "</h2>";
    }
    if(quiz.score>=8 && quiz.score<=15)
    {
      gameOverHTML += "<h2 id='score'> You have normal mental conditions. Here are some resources to further enhance your wellbeing.😊" + "</h2>";
    }
    if(quiz.score>15 && quiz.score<=30)
    {
      gameOverHTML += "<h2 id='score'> You need to take more care of your mental health.🙁 Here are some resources to help you feel better." + "</h2>";
    }
    if(quiz.score>30 && quiz.score<=45)
    {
      gameOverHTML += "<h2 id='score'>Unfortunately, your mental health doesn't look very good 😥. We advise you to take medical help. Here are some resources to help you out. " + "</h2>";
    }
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
    var x = document.createElement("BUTTON");
    var t = document.createTextNode("Know More");
    x.appendChild(t);
    x.className = 'know';
    var scored = quiz.score;
    sessionStorage.setItem("score", scored);
    x.onclick = function(){
        location.href = "resources.php";
    };
    document.getElementById("quiz").appendChild(x);
    var x1 = document.createElement("BUTTON");
    var t1 = document.createTextNode("Play some music");
    x1.appendChild(t1);
    x1.className = 'music';
    var scored = quiz.score;
    sessionStorage.setItem("score", scored);
    x1.onclick = function(){
        location.href = "music.php";
    };
    document.getElementById("quiz").appendChild(x1);
    $.post("saveAssessment.php",
    {
        score: scored,
    },
    function(data,status){
        document.getElementById("saving").innerHTML = data;
        $( "#saving" ).fadeIn(100);
        setTimeout(function(){ $( "#saving" ).fadeOut(100); }, 3000);
    });
};

// create questions here
var questions = [
    new Question("How often have you been bothered by feeling down, depressed, irritable, or hopeless over the last two weeks?", ["Never", " Sometimes","Frequently", "Always"],  "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered that you have little interest or pleasure in doing things over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered by trouble falling asleep, staying asleep, or sleeping too much over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered that you have poor appetite, weight loss, or overeating over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"],"Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered by feeling tired, or having little energy over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered by feeling bad about yourself – or feeling that you are a failure, or that you have let yourself or your family down over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered that you have trouble concentrating on things like school work, reading, or watching TV over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered by moving or speaking so slowly that other people could have noticed? Or the opposite – being so fidgety or restless that you were moving around a lot more than usual over the last two weeks", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered by thoughts that you would be better off dead, or of hurting yourself in some way over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often has your anxiety made you fatigued or worn out over the last two weeks? ", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you felt disinterested in doing things over the last two weeks? ", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often has your anxiety interfered with falling and/or staying asleep during the last two weeks? ", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you inflicted yourself to overeating or undereating ver the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you felt fatigue both mental and physical  over the last two weeks? ", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you indulged in negative self talk blaming yourself for every small thing over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();
</script>

<script>
  (function($) { "use strict";

$(function() {
  var header = $(".start-style");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
      header.removeClass('start-style').addClass("scroll-on");
    } else {
      header.removeClass("scroll-on").addClass('start-style');
    }
  });
});

//Animation

$(document).ready(function() {
  $('body.hero-anime').removeClass('hero-anime');
});

//Menu On Hover

$('body').on('mouseenter mouseleave','.nav-item',function(e){
    if ($(window).width() > 750) {
      var _d=$(e.target).closest('.nav-item');_d.addClass('show');
      setTimeout(function(){
      _d[_d.is(':hover')?'addClass':'removeClass']('show');
      },1);
    }
});

//Switch light/dark

$("#switch").on('click', function () {
  if ($("body").hasClass("dark")) {
    $("body").removeClass("dark");
    $("#switch").removeClass("switched");
  }
  else {
    $("body").addClass("dark");
    $("#switch").addClass("switched");
  }
});

})(jQuery);
</script>
</body>
</html>