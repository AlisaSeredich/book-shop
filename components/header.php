<?php
session_start();
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<title><?=$title?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
		<link rel="stylesheet" type="text/css" href="css/vendor.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- script
		================================================== -->
		<script src="js/modernizr.js"></script>

	</head>

<body>

<div id="header-wrap">
	
	<div class="top-content">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-8">
					<div class="right-element">
						<?php if(isset($_SESSION['valid_user'])):?>
						<a href="#" class="user-account for-buy"><i class="icon icon-user"></i><span>Привет, <?=$_SESSION['full_name']?></span></a>
						<a href="core/exit.php"><span>Выход</span></a>
						<?php else:?>
						<a href="enter.php"><span>Вход</span></a>
						<a href="registration.php"><span>Регистрация</span></a>
						<?php endif;?>
						<a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Корзина:(0 руб)</span></a>

						<div class="action-menu">

							<div class="search-bar">
								<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
									<i class="icon icon-search"></i>
								</a>
								<form role="search" method="get" class="search-box">
									<input class="search-field text search-input" placeholder="Поиск" type="search">
								</form>
							</div>
						</div>

					</div><!--top-right-->
				</div>
				
			</div>
		</div>
	</div><!--top-content-->

	<header id="header">
		<div class="container">
			<div class="row">

				<div class="col-md-2">
					<div class="main-logo">
						<a href="index.php"><img src="images/main-logo.png" alt="logo"></a>
					</div>

				</div>

				<div class="col-md-10">
					
					<nav id="navbar">
						<div class="main-menu stellarnav">
							<ul class="menu-list">
								<li class="menu-item active"><a href="/index.php" data-effect="Home">На главную</a></li>
								<li class="menu-item"><a href="books.php" class="nav-link" data-effect="Shop">Магазин</a></li>
								<li class="menu-item"><a href="posts.php" class="nav-link" data-effect="Articles">Статьи</a></li>
								<li class="menu-item"><a href="contact.php" class="nav-link" data-effect="Contact">Контакты</a></li>
							</ul>

							<div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
              </div>

						</div>
					</nav>

				</div>

			</div>
		</div>
	</header>
		
</div><!--header-wrap-->