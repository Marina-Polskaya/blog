<?php
require_once '../../../startSessionComposer.php';

if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Редактирование</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<div class="top">
		<div class="bigLogo">
			<div class="home"><a href="../../../index.php" title="Лента">VGO.RU</a></div>
			<div class="imgLogo"></div>
		</div>
		<div class="authBox">
			<div class="regist"><a href="">ЛЕНТА</a></div>
			<?php 
			if (isset($_SESSION['user'])) {
				echo "<div class=\"auth\" id=\"exit\"><a href=\"../../../authorization/logout.php\">ВЫХОД</a></div>";
			}
			?>
		</div>
	</div>
	<div class="wrapper">
		<div class="wrapperMini">
			<?php
			// if(!isset($_GET['postId'])) {
			// 	header('Location:/blog/myposts/index.php');
			// }
			// else{
			// $postId = $_GET['postId'];
			// $post = new Posts();
			// $resultMyPost = $post->getOnePostOnlyToID($postId);
			// $post->printOneFullPost($resultMyPost);}
			?>


			<!-- <div class="outsidePostBox"> -->
					<div class="leftLabel">
						<div class="labelMini">author</div>
						<div class="labelMini">date</div>
					</div>
				<form method="POST" action="edit.php">
					<h3>Редактирование</h3>
					<input type="text" maxlength="50" id="header"/>
					<textarea id="text" cols="50" rows="20"></textarea>
					<div class="buttonPosition">
						<button type="submit" name="submit">Сохранить</button>
					</div>
					
					

				</form>

		<!-- </div> -->
	</div>
</body>
</html>
<?php }
else {
	header('Location:/blog/index.php');
}
?>