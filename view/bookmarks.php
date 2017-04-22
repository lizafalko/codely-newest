<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="view/img/favicon.ico">
	<title>Избранное &ndash; Codely</title>
	<link href="view/css/bootstrap.min.css" rel="stylesheet">
	<link href="view/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="view/css/main-page.css" rel="stylesheet">
	<link href="view/css/user-space.css" rel="stylesheet">
</head>
<body class="body body--night">
	<header class="main-header">
		<?php include("view/template/header.php") ?>
		<div class="main-header__border"></div>
	</header>

	<main class="main">
		<div class="container container--left">
			<h3 class="favorite--materials">Избранные авторы</h3>
			<?php if (get_fave_authors($link, $_SESSION['user'])): ?>
				<?php 
					$authors = get_fave_authors($link, $_SESSION['user']);
				?>
				<?php foreach($authors as $author): ?>
					<?php 
						$fave_author = get_user_by_id($link, $author['id_author']);

						$fave_name = $fave_author['name_user'];
						$fave_surname = $fave_author['surname_user'];
					?>
					<article class="article">
						<a class="favorite--author-links" href="index.php?action=user-space&id=<?=$author['id_author']?>">
							<?=$fave_name." ".$fave_surname ?>
						</a>

						<a href="index.php?action=unfave&id_author=<?=$author['id_author']?>" style="float: right;">Удалить</a>
					</article>
				<?php endforeach ?>

			<?php else: ?>
				<article class="article">
					У вас пока нет избранных авторов.
				</article>
			<?php endif ?>
		</div>
		<div class="container container--right">
			<h3 class="favorite--materials">Избранные материалы</h3>
			<article class="article">
				<a class="favorite--materials-links" href="#">Александр ИЛьяшенко</a>
			</article>
			<article class="article">
				<a class="favorite--materials-links" href="#">Александр ИЛьяшенко</a>
			</article>
			<article class="article">
				<a class="favorite--materials-links" href="#">Александр ИЛьяшенко</a>
			</article>
			<article class="article">
				<a class="favorite--materials-links" href="#">Александр ИЛьяшенко</a>
			</article>
		</div>
	</main>
	<footer class="main-footer">
		<?php include('view/template/footer.php') ?>
	</footer>
	<script type="text/javascript" src="view/js/daydream.js"></script>
</body>
</html>
