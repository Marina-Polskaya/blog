<?php
require_once 'PdoConnection.php';
require_once '../myposts/Requests.php';


class Login extends PdoConnection {

	public function getLoginForm($params) {
   		return trim($params['login']);
	}

	public function getPasswordForm($params) {
   		return trim($params['password']);
	}

	public function getLogPassObj() {

		$pdoConnection = $this->getPdoConnection();

		$stmt = $pdoConnection->prepare('select distinct * from users where login = :login and us_password = :password');

		$stmt->execute([':login' => $this->getLoginForm($_POST), ':password' => $this->getPasswordForm($_POST)]);

		return $resultObjectArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function isLoginPasswordNotEmpty () {
		if(empty($this->getLoginForm($_POST)) || empty($this->getPasswordForm($_POST))) {
			return false;
		}
		else return true;
	}

}

?>