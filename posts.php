<?php 
require 'models/DBConnect.php';
require 'models/Posts.php';

$title = "Статьи";
$limit = 24;

$posts = Posts::getLimitPosts($limit);
// DBConnect::d($posts);

// $post['body'] = explode('\r\n\r\n', $post['body']);

require 'views/posts_view.php';