<?php
    
    $showAlert = false; 
    $showError = false; 
    $exists=false;
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        // Include file which makes the
        // Database Connection.
        include 'connect.php';   
    
        $username = $_POST["username"]; 
        $email = $_POST["email"]; 
        $password = $_POST["password"];
    
        $sql = "SELECT * FROM users WHERE username='$username'";
    
        $result = mysqli_query($conn, $sql);
        
        $num = mysqli_num_rows($result); 

        // This sql query is use to check if
        // the username is already present 
        // or not in our Database
        if($num == 0) {
            
            if($exists==false) {
                
                $hash = password_hash($password, 
                                    PASSWORD_DEFAULT);
                
                // Password Hashing is used here. 
                $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email', '$password')";
    
                $result = mysqli_query($conn, $sql);
                
                if ($result) {
                    $showAlert = true; 
                }
            }   
        }// end if 
    
        if($num>0) 
        {
            $exists="Username not available"; 
        } 
    
    }//end if   
    if($showAlert) {
        echo ' <div class="success" role="alert"><strong>Success!</strong> Account created successfully' ;
    }
    
    if($showError) {
    
        echo ' <div class="error" role="alert"><strong>Error!</strong> '. $showError.'</div> '; 
   }
        
    if($exists) {
        echo ' <div class="exists" role="alert"><strong>Error!</strong> '. $exists.'</div> '; 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php include 'SignUpCss.php' ?>
</head>

<body>
    
    <div class="signup">
        <p class="sign" align="center">Sign Up</p>
        <!--Form for user to sign up-->
        <form class="form" method="POST" action="SignUp.php">
            <input class="name" type="text" name="username" align="center" placeholder="Name" required>
            <input class="email" name="email" align="center" placeholder="Email" required>
            <input class="pass" name ="password" type="password" align="center" placeholder="Password">
            <input class="submit" type="submit" align="center" name="submit" value="Join"><br>
            <div class="center">
                <a href="login.php">Go to Login Page</a>
            </div>
        </form>
    </div>

</body>

</html>
