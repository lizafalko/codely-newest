<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="icon" href="view/img/favicon.ico">

		<title>Редактировать вопрос</title>

		<link href="view/css/bootstrap.min.css" rel="stylesheet">
		<!-- <link href="view/css/semantic.min.css" rel="stylesheet"> -->
		<link href="view/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="view/css/main-page.css" rel="stylesheet">
		<link href="view/css/common.css" rel="stylesheet">
	</head>
	<body class="body body--night">
		<header class="main-header">
			<?php require_once("view/template/header.php") ?>
			<div class="main-header__border"></div>
		</header>
		<main class="main">
			<div class="container">
				<div class="article article--transparent">
					<a class="emphasis-link" href="article.php?id=<?=$_GET['id']?>">
						<i class="glyphicon glyphicon-menu-left"></i><span class="sign"></span>
					</a>
				</div>
				<div class="article">
					<h4>Редактировать вопрос</h4>
					<form class="create-article-form" action="index.php?action=edit-question&id=<?=$id?>&callback=<?=$callback?>" method="POST">
						<div class="form-group">
							<input class="created-form__theme form-control" type="text" name="title" placeholder="Введите название" value="<?=$title?>" required autofocus>
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="16" name="text" placeholder="Введите текст" style="resize:none;" required><?=$text?></textarea>
						</div>
						<div class="form-group" style="text-align: right;">
							<button class="btn btn-primary" type="submit">Опубликовать</button>
						</div>
					</form>
				</div>
			</div>
		</main>
		<footer class="main-footer">
			<?php require_once("view/template/footer.php"); ?>
		</footer>
		<script type="text/javascript" src="view/js/daydream.js"></script>
	</body>
</html>
