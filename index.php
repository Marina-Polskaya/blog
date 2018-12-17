<?php
require_once 'startSessionComposer.php';
require_once 'geo/Geo.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="arcticmodal/jquery.arcticmodal.js"></script>
	<link rel="stylesheet" href="arcticmodal/jquery.arcticmodal.css">
</head>
<body>
	<script>
		$(function() { //Скрывает блок с городом при нажатии на Да или Нет. Пока просто для вида сделала так.
			$('.cityYes,.cityNo').on('click', function ()
			{
				$('.cityBox').fadeOut();
			});
			});
	</script>
	<div class="top">
		<div class="bigLogo">
			<div class="home"><a href="">VGO.RU</a></div>
			<div class="imgLogo"></div>
		</div>
		<div class="authBox">
			<?php
			if (isset($_SESSION['user'])) {
				echo "<div class=\"regist\"><a href=\"myposts/index.php\">МОИ ПОСТЫ</a></div>";
				echo "<div class=\"auth\" id=\"exit\"><a href=\"authorization/logout.php\">ВЫХОД</a></div>";
			}
			else {
				echo "<div class=\"regist\"><a href=\"\">РЕГИСТРАЦИЯ</a></div>";
				echo "<div class=\"auth\"><a href=\"authorization/index.php\">ВХОД</a></div>";
			}
			?>
		</div>
	</div>
	<div class="wrapper">
		<div class="wrapperMini">
			<?php

			$geo = new Geo();
			$geo->printCity();

			$posts = new Posts();
			$posts->printAllUsersPreview();
			?>
		</div>
	</div>
</body>
</html>
