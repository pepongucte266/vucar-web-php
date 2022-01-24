
<?php
  
  if (isset($_GET['e']) && isset($_GET['token'])) {
    $email = $_GET['e'];
    $token = $_GET['token'];
    require_once("../controller/UserController.php");
    $userController = new UserController();
    $userController->active($email,$token);
    header("Location: ../index.php");
  }
?>


