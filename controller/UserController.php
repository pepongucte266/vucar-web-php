<?php
  class UserController {
    public function login($email, $password) {
      require_once("../model/UserModel.php");
      $userModel = new UserModel();
      $_SESSION['user'] = $userModel->login($email, $password);
    }

    public function signup($name, $email, $password, $phone) {
      require_once('sendMailAction.php');
      //tạo token kích hoạt tài khoản
      $str = rand(10, 999) . md5($email);
      $token = substr($str, 0, 20);
      require_once("../model/UserModel.php");
      $userModel = new UserModel();
      if(sendMail($email,$name,$token,EMAIL_VERIFY)) {
        $userModel->signup($name, $email, $password, $phone, $token);
      }
    }

    public function active($email, $token) {
      require_once("../model/UserModel.php");
      $userModel = new UserModel();
      $result = $userModel->active($email, $token);
      return $result;
    }
  }

?>
