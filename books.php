<?php
require 'models/Books.php';

$title = 'Книги';
$limit = 24;

$books = Books::getBooks($limit);


require 'views/books_view.php';