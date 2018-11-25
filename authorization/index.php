<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Вход</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
	<div class="top">
		<div class="bigLogo">
			<div class="home"><a href="../index.php">VGO.RU</a></div>
			<div class="imgLogo"></div>
		</div>
		<div class="authBox">
			<div class="regist"><a href="">РЕГИСТРАЦИЯ</a></div>
			<div class="auth"><a href="">ВХОД</a></div>
		</div>
	</div>
	<div class="wrapper">
		<form action="" method="POST">
			<div class="topAuth">
				<h3>Авторизация</h3>
			</div>
			<div class="formBody">
				<div class="logPassWrapper">
					<div class="labelBox">
						<label for="login">Логин</label>
						<label for="password">Пароль</label>
					</div>
					<div class="inputBox">
						<input type="text" class="inputLog" id="login" placeholder="Введите логин"/>
						<input type="password" id="password" placeholder="Введите пароль"/>
					</div>	
				</div>
				<button type="submit" name="submit">Войти</button>
			</div>		
		</form>
	</div>
</body>
</html>