<?php
  session_start();

  if (isset($_SESSION['username'])) {
    header('Location: index.php');
  }

  // Cek apakah ada post dari form login
  if (isset($_POST['username']) && isset($_POST['password'])) {
    // Koneksi db
    include 'conn.php';

    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query ke db untuk cek apakah ada data user dengan username dan password yang sesuai
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Jika ada, maka set session username dan redirect ke index.php
    if ($result->num_rows > 0) {
      $_SESSION['username'] = $username;
      header('Location: index.php');
    } else {
      echo 'Invalid username or password';
    }
  }
?>

<h1>Login</h1>

<form method="post" action="login.php">
  <input type="text" name="username" placeholder="Enter your username"><br>
  <input type="password" name="password" placeholder="Enter your password"><br>
  <button type="submit">Submit</button>
</form>

<a href="register.php">Register here if you don't have any account</a>