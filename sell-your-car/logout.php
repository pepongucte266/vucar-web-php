<?php
  session_start();
  if(isset($_SESSION['user']) && $_SESSION['user'] != null) {
    unset($_SESSION['user']);
    header("Location: index.php");
  }
?>
