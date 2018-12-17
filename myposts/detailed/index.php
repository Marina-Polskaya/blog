<?php
require_once '../../startSessionComposer.php';
// require_once '../../authorization/Posts.php';
if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Мой пост</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<div class="top">
		<div class="bigLogo">
			<div class="home"><a href="../../index.php" title="Лента">VGO.RU</a></div>
			<div class="imgLogo"></div>
		</div>
		<div class="authBox">
			<div class="regist"><a href="">ЛЕНТА</a></div>
			<?php 
			if (isset($_SESSION['user'])) {
				echo "<div class=\"auth\" id=\"exit\"><a href=\"..\..\authorization/logout.php\">ВЫХОД</a></div>";
			}
			?>
		</div>
	</div>
	<div class="wrapper">
		<div class="wrapperMini">
			<?php
			if(!isset($_GET['postId'])) {
				header('Location:/blog/myposts/index.php');
			}
			else{
			$postId = $_GET['postId'];
			$post = new Posts();
			$resultMyPost = $post->getOnePostOnlyToID($postId);
			$post->printOneFullPost($resultMyPost);}
			?>
		</div>
	</div>
</body>
</html>
<?php }
else {
	header('Location:/blog/index.php');
}
?>