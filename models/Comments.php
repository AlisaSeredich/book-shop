<?php

//модель для работы с комментариями

class Comments
{

  //получить комментарий к текущей статьи
  public static function getCommentsByPostId($id){
    $pdo = DBConnect::getConnection();

    $query = "SELECT text, full_name, avatar FROM comments, users WHERE users.id = user AND post = ?;";

    $result = $pdo->prepare($query);
    $result->execute([$id]);

    return $result->fetchAll();
  }

  
  //метод добавления нового комментария от пользователя
  public static function addNewCommentToPost($comment, $user, $post){
    $pdo = DBConnect::getConnection();

    $query = "INSERT INTO comments (text, user, post) VALUES (?,?,?);";

    $result = $pdo->prepare($query);
    $result->execute([$comment, $user, $post]);
    
  }

}