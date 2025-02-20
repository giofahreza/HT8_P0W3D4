<?php
  session_start();
  include 'conn.php';
  $sql = "SELECT * FROM users";
  $result = $conn->query($sql);

  if (isset($_SESSION['username'])) {
    echo 'Welcome ' . $_SESSION['username'] . ". You are logged in. <a href='logout.php'>Logout</a>";
  } else {
    echo 'You are not logged in. Please login first at <a href="login.php">Login</a>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- <form action="process.php" method="get"> -->
  <form action="process.php" method="post">
    <input type="text" name="username" placeholder="Enter your username"><br>
    <input type="password" name="password" placeholder="Enter your password"><br>
    <button type="submit">Submit</button>
  </form>

  <?php
    echo 'something';
  ?>
  <?php echo 'bigthink'; ?>
  <?= 'anything' ?>

  <table>
    <tr>
      <th>Username</th>
      <th>Password</th>
    </tr>
    <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<tr>';
          echo '<td>' . $row['username'] . '</td>';
          echo '<td>' . $row['password'] . '</td>';
          echo '</tr>';
        }
      } else {
        echo '0 results';
      }
    ?>
  </table>

  <script>
    // alert('Hello');
  </script>
</body>
</html>