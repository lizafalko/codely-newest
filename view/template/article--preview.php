<?php
	$id = $article['id_article'];
	$name = get_user_by_id($link, $article["id_user"])["name_user"];
	$surname = get_user_by_id($link, $article["id_user"])["surname_user"];
	$title = $article['title_article'];
	$text = $article['text_article'];
	$date = gmdate("d/m/Y", $article['date_article']);
	$likes = $article['likes_article'];
?>

<article class="article" style="text-align: left;">
	<header class="article__header" style="justify-content: space-between;">
		<div>
			<a class="article__user-link" href="index.php?action=user-space&id=<?=$article["id_user"] ?>&fallback=<?=$fallback?>">
				<img class="article__avatar" src="<?=get_user_by_id($link, $article["id_user"])["photo_user"] ?>" width="50" height="50">
			</a>
			<span class="article__nickname">
				<?=$name." ".$surname?>
			</span>
		</div>

		<?php if($article['is_question']): ?>
			<span class="question_tag">Вопрос</span>
		<?php endif ?>
		<!-- Вопрос -->
		<!-- Редактировать -->
		<!-- Удалить -->
		<a href="index.php?action=unfave-article&id_article=<?=$id?>">
			<span class="glyphicon glyphicon-remove article__like-icon remove-color"></span>
		</a>
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
		<a class="article__comment-link" href="article.php?id=<?=$article['id_article']; ?>" id="article<?=$i?>">
			<?php include("view/template/comment-link.php"); ?>
		</a>
	</footer>
</article>
