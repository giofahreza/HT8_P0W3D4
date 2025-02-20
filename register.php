<?php
  session_start();
  if(isset($_SESSION['username'])){
    header("location: index.php");
  }
?>

<h1>Register</h1>

<form action="process.php" method="post">
  <input type="text" name="username" placeholder="Enter your username"><br>
  <input type="password" name="password" placeholder="Enter your password"><br>
  <button type="submit">Submit</button>
</form>

<a href="login.php">Login here if you already have an account</a>