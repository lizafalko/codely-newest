<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="icon" href="view/img/favicon.ico">

		<title>Редактировать статью</title>

		<link href="view/css/bootstrap.min.css" rel="stylesheet">
		<link href="view/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="view/css/main-page.css" rel="stylesheet">
		<link href="view/css/common.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="container">
				<h3 class="header-reg">Редактировать статью</h3>
			</div>
		</header>
		<main>
			<div class="container">
				<section class="article new-article">
					<a href="<?=$callback?>">
						<i class="glyphicon glyphicon-menu-left"></i><span class="sign">Назад</span>
					</a>
				</section>
				<form class="create-article-form" action="index.php?action=edit-article&id=<?=$id?>&callback=<?=$callback?>" method="POST">
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
		</main>
		<footer class="page-footer">
			<?php require_once("footer.php"); ?>
		</footer>
	</body>
</html>
