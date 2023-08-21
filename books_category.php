<?php
require 'models/Books.php';

$id = (int)$_GET['category_id'];
$limit = 24;

$books = Books::getCategoryBooks($limit, $id);
// DBConnect::d($books);

$title = $books[0]['category_name'];


require 'views/books_category_view.php';