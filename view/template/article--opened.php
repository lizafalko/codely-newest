<?php
	$id = $article['id_article'];
	$name = get_user_by_id($link, $article["id_user"])["name_user"];
	$surname = get_user_by_id($link, $article["id_user"])["surname_user"];
	$title = $article['title_article'];
	$text = $article['text_article'];
	$date = gmdate("d/m/Y", $article['date_article']);
	$likes = $article['likes_article'];
?>

<article class="article">
	<header class="article__header">
		<a class="article__user-link" href="index.php?action=user-space&id=<?=$article["id_user"] ?>&fallback=<?=$fallback?>">
			<img class="article__avatar" src="<?=get_user_by_id($link, $article["id_user"])["photo_user"] ?>" width="50" height="50">
		</a>
		<span class="article__nickname">
			<?=$name." ".$surname?>
		</span>
		<!-- Вопрос -->
		<!-- Редактировать -->
		<!-- Удалить -->
	</header>
	<h2 class="article__title">
		<a href="article.php?id=<?=$article['id_article'] ?>">
			<?=$title?>
		</a>
	</h2>
	<p class="article__text">
		<?=$text?>
	</p>
	<footer class="article__footer">
		<span class="article__date">
			<?=$date?>
		</span>
<!-- 		<a class="article__comment-link" href="article.php?id=<?=$article['id_article']; ?>" id="article<?=$i?>">
			<?php include("view/template/comment-link.php"); ?>
		</a> -->
		<section class="article__likes">
			<span class="article__likes-count">
				<?=$likes?>
			</span>
			<a class="article__like"
				href="index.php?action=like&id=<?=$article['id_article'] ?>&fallback=<?=$fallback?>">
				<?php if(check_article_likes($link, $id)): ?>	<!-- if already liked -->
				<span class="glyphicon glyphicon-heart article__like-icon"></span>
				<?php else: ?>
				<span class="glyphicon glyphicon-heart-empty article__like-icon"></span>
				<?php endif ?>
			</a>
		</section>
	</footer>
</article>
