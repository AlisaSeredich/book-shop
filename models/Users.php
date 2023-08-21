<?php
require 'models/DBConnect.php';

class Users
{
  public static function checkEmailUnique($email){
    $pdo = DBConnect::getConnection();

    $query = "SELECT email FROM users WHERE email = ?;";

    $result = $pdo->prepare($query);
    $result->execute([$email]);

    return $result->rowCount();
  }

//ДОБАВЛЕНИЕ НОЫОГО ЮЗЕРА
public static function addNewUser($user){
  $pdo = DBConnect::getConnection();

  $query = "INSERT INTO users(full_name, email, password, avatar) VALUES(?,?,?,?);";

  $result = $pdo->prepare($query);
  $result->execute([$user['full_name'], $user['email'], $user['password'], $user['avatar']]);

  return $pdo->lastInsertId();
}

public static function getPasswordByEmail($email){

  $pdo = DBConnect::getConnection();

  $query = "SELECT password FROM users WHERE email = ?;";

  $result = $pdo->prepare($query);
  $result->execute([$email]);

  return $result->fetch()['password'];
}

//запись информации в сессию при входе на сайт
public static function getUserInfoSession($email){

  $pdo = DBConnect::getConnection();

  $query = "SELECT id, full_name FROM users WHERE email = ?;";

  $result = $pdo->prepare($query);
  $result->execute([$email]);

  return $result->fetch();
}

}