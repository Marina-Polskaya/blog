<?php

class Requests {

	private $checkUserPassword = 'select distinct * from users where login = :login and us_password = :password';

	private $myPosts = 'select users.login, posts.* from users join posts where users.login = :login and :login = posts.author order by publ_date desc';

	public function getCheckUserPassword() {
		return $checkUserPassword;
	}

	public function getMyPosts() {
		return $myPosts;
	}

}


?>