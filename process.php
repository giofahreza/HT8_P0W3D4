<?php
  include 'conn.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  print_r($_POST);

  $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: index.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>