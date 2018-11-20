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
			<div class="text">VGO.RU</div>
			<div class="imgLogo"></div>
		</div>
		<div class="authBox">
			<div class="regist">РЕГИСТРАЦИЯ</div>
			<div class="auth">ВХОД</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="wrapperMini">
			<!--  -->
			<?php
			require_once 'function.php';
			printNewPreview();
			?>
			<div class="leftLabel">
				<div class="labelMini">Mountain man</div>
				<div class="labelMini">20.11.2018</div>
			</div>
			<div class="previewBox">
				<div class="leftPrevBox">
					<div class="imageBox"></div>
				</div>
				<div class="rightPrevBox">
					<div class="headerBox"><h3>Hallstatter See</h3></div>
					<div class="textPreview">Idyllische Lage am See, viele historische Gebäude: Hallstatt gefiel chinesischen Architekten so gut, dass sie in der Volksrepublik einen Nachbau des weltberühmten Weltkulturerbeortes errichteten. Das malerische Original verdankt seine Entstehung dem reichen Salzvorkommen. </div>
					<button>Читать полностью</button>
				</div>
			</div>
			<!--  -->
		</div>
	</div>
</body>
</html>