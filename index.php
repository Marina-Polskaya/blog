<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
	<script>
		$(function() {
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
			<div class="auth"><a href="authorization/index.php">ВХОД</a></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="wrapperMini">
			<?php //переписать в ООП

				$request = file_get_contents("http://api.sypexgeo.net/json/");
				$array = json_decode($request);
			?>
			<div class="cityBox">Ваш город - <?php echo $array->city->name_ru; ?>?
				<div class="cityYes">Да</div>
				<div class="cityNo">Нет</div>
			</div>
		</div>
	</div>
</body>
</html>