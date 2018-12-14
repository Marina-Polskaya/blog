<?php
require_once 'startSessionComposer.php';
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
			<div class="regist"><a href="">РЕГИСТРАЦИЯ</a></div>
			<?php //Позже вынесу в метод класса
			if (isset($_SESSION['user'])) {
				echo "<div class=\"auth\" id=\"exit\"><a href=\"authorization/logout.php\">ВЫХОД</a></div>";
			}
			else
				echo "<div class=\"auth\"><a href=\"authorization/index.php\">ВХОД</a></div>";
			?>
		</div>
	</div>
	<div class="wrapper">
		<div class="wrapperMini">
			<?php //переписать в ООП позже (занести в метод класса)

				if (!isset($_SESSION['user'])) { //Чтобы окно с городом показывалось только 1 раз. Пока недоработано. Ответ ни на что не влияет. При обновлении исчезает и без ответа.

					if(!isset($_SESSION['knowCity'])){
						$request = file_get_contents("http://api.sypexgeo.net/json/");
						$array = json_decode($request);
						echo "<div class=\"cityBox\">Ваш город - ".$array->city->name_ru."?
						<div class=\"cityYes\">Да</div>
						<div class=\"cityNo\">Нет</div>
						</div>";
						$_SESSION['knowCity'] = $array->city->name_ru;
					}
				
				}
				
			?>
			<!-- Будет приветственный текст, приглашающий зарегистрироваться или войти. Если пользователь уже вошел, то позже реализую перенаправление с этой страницы на ленту с общими постами-->
		</div>
	</div>
</body>
</html>