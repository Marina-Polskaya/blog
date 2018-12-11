<?php

require_once 'Handler.php';
require_once 'login.php';
require_once 'PdoConnection.php';

class Posts extends PdoConnection {

	public function printNewPreview($post) {

		echo "<div class=\"leftLabel\">
				<div class=\"labelMini\">";
				print($post['author']);
				echo "</div>
				<div class=\"labelMini\">";
				print($post['publ_date']);
				echo "</div>
			</div>
			<div class=\"previewBox\">
				<div class=\"leftPrevBox\">
					<div class=\"imageBox\";
				</div></div></div>
				<div class=\"rightPrevBox\">
					<div class=\"headerBox\"><h3>";
					print($post['header']);
					echo "</h3></div>
					<div class=\"textPreview\">";
					print($post['text']);
					echo "</div>
					<button>Читать полностью</button>
				</div>
			</div>";
	}

	private function isNotEmpty ($array) { //return true, if it's not empty

		if (count($array)>0){
			$boolRes = true;
		}
		else {
			$boolRes = false;
		}
		return $boolRes;
	}



	public function enterIfLoginTrue () {

		$login = new Login();
		
		if(!($login->isLoginPasswordNotEmpty())) {
			header('Location:/blog/authorization/index.php');
		}

		$objectLogPass = $login->getLogPassObj();
		
		if ($this->isNotEmpty($objectLogPass)) {

			session_start();
			$_SESSION['user'] = $login->getLoginForm($_POST);
			// $login->setCurrentLoginForm('$login->getLoginForm($_POST)');

			header('Location:/blog/myposts/index.php');

		}
		else {
			 header('Location:/blog/authorization/index.php');
		}
	}
 
	public function PrintAllUserPosts () {

		$login = new Login();
		$pdo = $login->getPdoConnection();

		$stmtMyPosts = $pdo->prepare('select users.login, posts.* from users join posts where users.login = :login and :login = posts.author order by publ_date desc');
		$stmtMyPosts->execute([':login' => $_SESSION['user']]);
		$resultMyPosts = $stmtMyPosts->fetchAll(PDO::FETCH_ASSOC);


		foreach ($resultMyPosts as $post) {
			$this->printNewPreview($post);

		}
	}
}
	

?>
