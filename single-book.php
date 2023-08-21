<?php
require 'models/Books.php';

$id = (int)$_GET['id'];

$book = Books::getBookById($id);
DBConnect::d($book);

$title = $book['title'];

require 'views/single-book_view.php';