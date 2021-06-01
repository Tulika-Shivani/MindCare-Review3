<?php

include "connect.php";
session_start();
$username = mysqli_real_escape_string($conn, $_SESSION['username']);
$score = mysqli_real_escape_string($conn, $_POST['score']);

$sql = "INSERT INTO assessment (username,score, date)VALUES ('$username', '$score', CURDATE()) ON DUPLICATE KEY UPDATE    
date=CURDATE(), score='$score'";
if ($conn->query($sql) === TRUE) {
  // echo "Page saved!";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>