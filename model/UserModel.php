<?php
  class UserModel {

    public $conn;
    public function __construct() {
        $this->conn = mysqli_connect('localhost', 'root', '', 'vucar');
        if (!$this->conn) {
            die("Error connect database." . mysqli_connect_error());
        } else {
            mysqli_set_charset($this->conn, "utf8");
        }
    }
  

    public function login($email, $password) {
      $conn = $this->conn;
      $result = $conn->query("SELECT * FROM user WHERE email = '" .$email ."' and password = '" . $password . "'");
      $users = array();
      if($result->num_rows > 0) {
        while($user = mysqli_fetch_assoc($result)) {
          $users[] = $user;
        }
      }
      $conn->close();
      return $users;
    }

    public function signup($name, $email, $password, $phone, $token) {
      $conn = $this->conn; 
      $conn->query("INSERT INTO `user`(`id`, `name`, `email`, `phone`, `address`, `password`, `token`) VALUES ('','$name','$email','$phone','','$password','$token')");
      $conn->close();
      
    }

    public function active($email,$token) {
      $conn = $this->conn; 
      $result= $conn->query("SELECT id, token FROM user WHERE email = '$email' AND status != '1'");
      if($result->num_rows == 1) {
        $users = array();
        while($user = mysqli_fetch_assoc($result))
        {
          $users[] = $user;
        }
        $id = $users[0]['id'];
        $success = $conn->query("UPDATE user SET status = '1' WHERE id = $id");
        return $success;
      }
      return false;
    }
  }
?>
