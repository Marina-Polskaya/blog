<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="top">
		<div class="bigLogo">
			<div class="home">VGO.RU</div>
			<div class="imgLogo"></div>
		</div>
		<div class="authBox">
			<div class="regist">РЕГИСТРАЦИЯ</div>
			<div class="auth">ВХОД</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="wrapperMini">
			<?php
			require_once 'function.php';
			printNewPreview();
			printNewPreview();
			printNewPreview();
			?>
		</div>
	</div>
</body>
</html>