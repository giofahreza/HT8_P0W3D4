<?php
  include 'conn.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  if ($conn->query($sql) === TRUE) {
    echo "Register success, please login <a href='login.php'>here</a>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>