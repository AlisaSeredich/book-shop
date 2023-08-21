<?php
require 'models/DBConnect.php';
require 'models/Posts.php';
require 'models/Comments.php';

$id=(int)$_GET['post_id'];

$post = Posts::getPostById($id);
// DBConnect::d($post);
$title = $post['title'];

$comments = Comments::getCommentsByPostId($id);

// если отправлена форма для добавления комментария
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	// DBConnect::d($_POST);

	if(empty($comment)){// если коммент пустой
		// выводим ошибку
		$commentError = 'Введите комментарий';
	}else{
		// добавляем коммент в таблицу
		$comment = htmlspecialchars(trim($_POST['comment']));
		$post = (int)$_POST['post_id'];
		$user = $_SESSION['user_id'];

		Comments::addNewCommentToPost($comment, $user, $post);

		header('Location: single-post.php?post_id=$id'); // ('Refresh: 0') время в сек
	}
}

require 'views/single-post_view.php';