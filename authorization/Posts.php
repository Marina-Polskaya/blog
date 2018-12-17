<?php

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
					<button class=\"detailed\"><a href=\"../myposts/detailed/index.php?postId=".$post['post_id']."\">Читать полностью</a></button>
				</div>
			</div>";
	}

	public function printOneFullPost($post) {

		echo "<div class=\"outsidePostBox\">
				<div class=\"leftBigLabel\">
					<div class=\"leftLabel\">
						<div class=\"labelMini\">".$post[0]['author']."</div>
						<div class=\"labelMini\">".$post[0]['publ_date']."</div>
					</div>";
					if(isset($_SESSION['user'])){
					echo "<div class=\"midLabel\"><a href=\"edit/index.php?postId=".$post[0]['post_id']."\">Редактировать</a></div>
					<div class=\"bottomLabel\"><a href=\"delete/index.php?postId=".$post[0]['post_id']."\">Удалить</a></div>";
				}
				echo "</div>
				<div class=\"postBox\">
					<div class=\"headerBigBox\"><h1>".$post[0]['header']."</h1></div>
					<div class=\"imgBigBox\"></div>
					<div class=\"textBigBox\">".$post[0]['text']."</div>
					<button><a href=\"../\">Вернуться к постам</a></button>
				</div>
			</div>";
	}

	public function printAllUsersPreview () {
		$arrayPosts = $this->getObjAllUsersPosts();
		if($this->isNotEmpty($arrayPosts)) {
			foreach ($arrayPosts as $allPosts) {
				$this->printNewPreview($allPosts);
			}
			}
	}

	public function getObjAllUsersPosts () {
		$login = new Login();
		$stmtAllPosts = $login->getPdoConnection()->query('select * from posts order by publ_date desc');
		$resultAllPosts = $stmtAllPosts->fetchAll(PDO::FETCH_ASSOC);
		return $resultAllPosts;
	}

	public function isNotEmpty ($array) { //return true, if it's not empty

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

			header('Location:/blog/myposts/index.php');

		}
		else {
			 header('Location:/blog/authorization/index.php');
		}
	}


 
	public function PrintUserPreviews () {

		$login = new Login();

		$stmtMyPosts = $login->getPdoConnection()->prepare('select users.login, posts.* from users join posts where users.login = :login and :login = posts.author order by publ_date desc');
		$stmtMyPosts->execute([':login' => $_SESSION['user']]);
		$resultMyPosts = $stmtMyPosts->fetchAll(PDO::FETCH_ASSOC);

		foreach ($resultMyPosts as $post) {
			$this->printNewPreview($post);
		}
	}

	public function getOnePostOnlyToID ($postId) {
		$login = new Login();
		$stmtMyPost = $login->getPdoConnection()->prepare('select * from posts where posts.post_id = :postId');
		$stmtMyPost->execute([':postId' => $postId]);
		$resultMyPost = $stmtMyPost->fetchAll(PDO::FETCH_ASSOC);
		return $resultMyPost;
	}
}
	

?>
