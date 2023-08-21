<?php
require 'models/Books.php';
require 'models/Posts.php';


$title = 'Booksaw';
$limit = 8;
$limit_posts = 3;




$books = Books::getBooks($limit);
// DBConnect::d($books);
$posts = Posts::getLimitPosts($limit_posts);
// DBConnect::d($posts);


require 'views/index_view.php';
