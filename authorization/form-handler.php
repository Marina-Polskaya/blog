
<?php

require_once 'Handler.php';

$handler = new Handler();
$handler->connect();
$pdoConnection = $handler->connect();


$stmt = $pdoConnection->prepare('select distinct * from users where login = :login and us_password = :password');

$stmt->execute([':login' => $handler->getLoginForm($_POST), ':password' => $handler->getPasswordForm($_POST)]);
$resultObjectArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
			require_once '../function.php';
			if (count($resultObjectArray)>0){
				// $dateIndex = 
				// $pdoConnection->prepare('create index publ_date on posts(publ_date)');
				$stmtMyPosts = $pdoConnection->prepare('select users.login, posts.* from users join posts where users.login = :login and :login = posts.author order by publ_date desc');

				$stmtMyPosts->execute([':login' => $handler->getLoginForm($_POST)]);
				$resultMyPosts = $stmtMyPosts->fetchAll(PDO::FETCH_ASSOC);
				foreach ($resultMyPosts as $post) {
					printNewPreview($post);
				}
			}
			else {
				echo "Отказано в доступе";
			}


?>

			
		</div>
	</div>
</body>
</html>