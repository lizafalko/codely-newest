<?php
	$user = get_user_by_id($link, $_GET['id']);
	$name = $user['name_user'];
	$surname = $user['surname_user'];
	$email = $user['login_user'];
	$birthdate = $user['birthdate_user'];
	$workplace = $user['work_user'];
	$studyplace = $user['study_user'];
	$phone = $user['phone_user'];
	$about = $user['about_user'];
	$photo_link = $user['photo_user'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" href="view/img/favicon.ico">
	<title><?=$name?> <?=$surname?> &ndash; Codely</title>
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
			<img class="user-space-avatar" src="<?=$photo_link ?>" width="250" height="250">
			<h1 class="user-space-nickname"><?=$name?> <?=$surname?></h1>
			
		</div>
		<div class="container container--right">
			<div class="article article-est" style="text-align: left;">
				<p>
					<a>
						<?=get_user_by_id($link, $_GET["id"])["login_user"] ?>
					</a>
				</p>
				<p>
					<?php
						if ($birthdate == "" || $birthdate == "0000-00-00") {
							echo "Дата рождения не указана";
						} else {
							echo 'Дата рождения: '.$birthdate;
						}
					?>
				</p>
				<p>
					<?php
						if ($workplace == "") {
							echo "Место работы не указано";
						} else {
							echo 'Место работы: '.$workplace;
						}
					?>
				</p>
				<p>
					<?php
						if ($studyplace == "") {
							echo "Место учебы не указано";
						} else {
							echo 'Место учебы: '.$studyplace;
						}
					?>
				</p>
				<p>
					<?php
						if ($phone == "") {
							echo "Номер телефона не указан";
						} else {
							echo 'Номер телефона: '.'<a class="user-phone user-field" href="tel:'.$phone.'">'.$phone.'</a>';
						}
					?>
				</p>
				<p>
					Комментариев: 
					<?=count_comments($link, $_GET["id"]) ?>
				</p>
				<p>
					Обо мне:
					<?=$about ?>
				</p>
			</div>
		</div>
	</main>
	<footer class="main-footer">
		<?php include('view/template/footer.php') ?>
	</footer>
	<script type="text/javascript" src="view/js/daydream.js"></script>
</body>
</html>
