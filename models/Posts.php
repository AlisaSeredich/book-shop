<?php
// require 'models/DBConnect.php';

class Posts
{
  public static function getLimitPosts($limit){
    $pdo = DBConnect::getConnection();

    $query = "SELECT posts.id AS post_id, title, body, add_date, image FROM posts ORDER BY RAND() LIMIT $limit;";

    return $pdo->query($query)->fetchAll();
  }

  public static function getPostById($id){
    $pdo = DBConnect::getConnection();

    $query = "SELECT posts.id AS post_id, title, body, add_date, image FROM posts WHERE posts.id = ?;";

    $result = $pdo->prepare($query);
    $result->execute([$id]);
    return $result->fetch();
  }
}