<?php
require_once '../startSessionComposer.php';

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
			<div class="home"><a href="../index.php" title="Лента">VGO.RU</a></div>
			<div class="imgLogo"></div>
		</div>
		<div class="authBox">
			<div class="auth" id="exit"><a href="../authorization/logout.php">ВЫХОД</a></div>
		</div>
	</div>
	<div class="wrapper">
		<div class="wrapperMini">
		<?php

		$posts = new Posts();
		$posts->PrintUserPreviews();

		?>		
		</div>
	</div>
</body>
</html>
<?php
	}
?>