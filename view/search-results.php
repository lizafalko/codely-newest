<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" href="view/img/favicon.ico">
	<title>Главная &ndash; Codely</title>
	<link href="view/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link href="view/css/semantic.min.css" rel="stylesheet"> -->
	<link href="view/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="view/css/main-page.css" rel="stylesheet">
</head>
<body class="body body--night">
	<header class="main-header">
		<?php $fallback = "index.php"; include("view/template/header.php") ?>
		<div class="main-header__border"></div>
	</header>

	<main class="main">
		<?php include('view/template/search.php') ?>
		<article class="article">
			<a class="emphasis-link" href="index.php">
				<i class="glyphicon glyphicon-menu-left" style="color: black;"></i><span class="sign"></span>
			</a>
			<h4 style="display: inline;">Результаты поиска по запросу &laquo;<?=$query?>&raquo;</h4>
		</article>
		<?php $i = 0; foreach($articles[0] as $article): ?>
		<?php $fallback = "index.php#article".$i; include('view/template/article.php') ?>
		<?php $i++; endforeach ?>

		<?php foreach($articles[1] as $user) {
			include('view/template/user.php');
		}?>
	</main>

	<footer class="main-footer">
		<?php include('view/template/footer.php') ?>
	</footer>
	<script type="text/javascript" src="view/js/daydream.js"></script>
</body>
</html>
