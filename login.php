<?php

include "connect.php";

if(isset($_POST['submit'])){
    ob_start();
    session_start();
    $uname = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
        
        if($count > 0){
            $_SESSION['username'] = $uname;
            header("Location:index.php");
            ob_end_flush();
        }
        else{
            echo "Invalid username and password";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php include 'loginCss.php' ?>
</head>
<body>
    <div class="login">
        <p class="log" align="center">Login</p>
        <!--Form for taking login details of user-->
        <form class="form" method="POST" action="login.php">
          <input class="name" name ="username" type="text" align="center" placeholder="Username" required>
          <input class="pass" name ="password" type="password" align="center" placeholder="Password" required>
          <input class="submit" type="submit" align="center" name="submit" value="Log In">
          <!-- <p class="forgot" align="center"><a href="#">Forgot Password?</p>    -->
        </form>   
    </div>
</body>
</html>

