<?php
require_once '../authorization/Handler.php';
require_once '../authorization/login.php';
require_once '../authorization/Posts.php';
session_start();
if(!$_SESSION['user']){
	header('Location:/blog/authorization/index.php');
}
else {
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Мой блог</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="top">
		<div class="bigLogo">
			<div class="home"><a href="">VGO.RU</a></div>
			<div class="imgLogo"></div>
		</div>
		<div class="authBox">
			<div class="regist" id="allPosts"><a href="">ЛЕНТА</a></div>
			<div class="auth" id="exit"><a href="../index.php">ВЫХОД</a></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="wrapperMini">
		<?php

		$posts = new Posts();
		$posts->PrintAllUserPosts();

		?>		
		</div>
	</div>
</body>
</html>
<?php
	}
?>