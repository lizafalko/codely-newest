<section class="article article--ident">
	<!-- "create article" sign -->
	<?php if (isset($_SESSION["user"])): ?>
	<section class="comment--create">
		<form action="article.php?action=add-comment&id=<?=$article['id_article'] ?>" method="POST">
			<input type="checkbox" id="hide-create-comment">
			<label for="hide-create-comment">Написать комментарий..</label>
			<div class="form-group">
				<textarea class="form-control" name="comment-text" rows="5" placeholder="Введите текст комментария" style="max-height: 114px; max-width: 578px; resize: none;" required></textarea>
			</div>
			<div class="form-group" style="text-align: right;">
				<button class="btn btn-primary">Отправить</button>
			</div>
		</form>
	</section>
	<?php endif ?>
</section>

<?php foreach($comments as $comment): ?>
<article class="article article--ident">
	<!-- comments themselves -->
	<section class="comment__header comment__part">
		<img class="comment_avatar" src="<?=get_user_by_id($link, $comment["id_user"])["photo_user"] ?>" width="30" height="30">
		<span class="comment__nickname">
			<?=get_user_by_id($link, $comment["id_user"])["name_user"] ?>
			<?=get_user_by_id($link, $comment["id_user"])["surname_user"] ?>
		</span>
		<?php if (isset($_SESSION["user"])) {
			$user_id = $_SESSION["user"];
			if ($user_id == $comment["id_user"]) {
				echo '
					<a class="article__delete" style="float: right;" href="article.php?action=delete&id-article='.$comment["id_article"].'&id='.$comment["id_comment"].'">
						<i class="glyphicon glyphicon-remove"></i>
					</a>
				';
			}
		}?>
	</section>
	<p class="comment_text comment__part">
		<?=$comment["text_comment"] ?>
	</p>
	<footer class="comment__footer comment__part">
		<section class="comment_likes">
			<a class="article__like"
				href="#">
				<!-- ДОДЕЛАТЬ! -->
				<?php if(check_article_likes($link, $id)): ?>	<!-- if already liked -->
				<span class="glyphicon glyphicon-heart article__like-icon"></span>
				<?php else: ?>
				<span class="glyphicon glyphicon-heart-empty article__like-icon"></span>
				<?php endif ?>
			</a>
		</section>
	</footer>
</article>
<?php endforeach ?>