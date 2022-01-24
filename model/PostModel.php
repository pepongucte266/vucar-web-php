<?php
  class PostModel {
    public $conn;
    public function __construct() {
        $this->conn = mysqli_connect('localhost', 'root', '', 'vucar');
        if (!$this->conn) {
            die("Error connect database." . mysqli_connect_error());
        } else {
            mysqli_set_charset($this->conn, "utf8");
        }
    }

    public function getPosts() {
      $conn = $this->conn;
      $result = $conn->query("SELECT posts.id, posts.user_id, posts.model_id, brand.name as brand, model.name AS model, posts.title, posts.content, posts.mfg, posts.price, posts.gearbox, posts.km, posts.img FROM `posts`,model,brand WHERE posts.model_id = model.id and model.brand_id = brand.id");
      $posts = array();
      if($result->num_rows > 0) {
        while($post = mysqli_fetch_assoc($result)) {
          $posts[] = $post;
        }
      }
      $conn->close();
      return $posts;
    }

    public function getPostById($id) {
      $conn = $this->conn;
      $result = $conn->query("SELECT posts.id, posts.user_id, posts.model_id, brand.name as brand, model.name AS model, posts.title, posts.content, posts.mfg, posts.price, posts.gearbox, posts.km, posts.img FROM `posts`,model,brand WHERE posts.model_id = model.id and model.brand_id = brand.id and posts.id = $id");
      $posts = array();
      if($result->num_rows > 0) {
        while($post = mysqli_fetch_assoc($result)) {
          $posts[] = $post;
        }
      }
      $conn->close();
      return $posts;
    }
  }
?>

