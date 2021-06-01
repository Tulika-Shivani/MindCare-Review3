<?php

include "connect.php";
session_start();
$username = mysqli_real_escape_string($conn, $_SESSION['username']);

$sql = "INSERT INTO appointment (username, date)VALUES ('$username', CURDATE())";

header("Location: https://etherapypro.com/");
if ($conn->query($sql) === TRUE) {
  //echo "Page saved!";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>