<?php
require 'DBConnect.php';

class Books
{
  public static function getBooks($limit){
    $pdo = DBConnect::getConnection();

    $query = "SELECT books.id AS book_id, title, image, authors.id AS author_id, name, category.id AS category_id, price FROM books, authors, category WHERE author_id = authors.id AND category_id = category.id ORDER BY RAND() LIMIT $limit;";

    return $pdo->query($query)->fetchAll();
  }

  public static function getCategoryBooks($limit, $id){
    $pdo = DBConnect::getConnection();

    $query = "SELECT books.id AS book_id, title, image, authors.id AS author_id, name, category.id AS category_id, category_name, price FROM books, authors, category WHERE author_id = authors.id AND category_id = category.id AND category_id = ? ORDER BY RAND() LIMIT $limit;";

    $result = $pdo->prepare($query);
    $result->execute([$id]);
    return $result->fetchAll();
  }

  public static function getBookById($id){
    $pdo = DBConnect::getConnection();

    $query = "SELECT books.id AS book_id, title, image, books.description AS description, price, authors.id AS author_id, name, category.id AS category_id, category_name FROM books, authors, category WHERE authors.id = author_id AND category.id = category_id AND books.id = ?;";

    $result = $pdo->prepare($query);
    $result->execute([$id]);

    return $result->fetch();
  }
}