<?php
  session_start();

  $_SESSION['username'] = 'admin';

  header('Location: index.php');
?>