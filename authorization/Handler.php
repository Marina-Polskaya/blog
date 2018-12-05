<?php
 class Handler {

 	private $connection;
	private $dsn = 'mysql:dbname=db_blog;host=localhost';
	private $user = 'root';
	private $password = '';
	private $options = array (
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	);

	public function connect ()
	{
		$this->connection = new PDO($this->dsn, $this->user, $this->password, $this->options);
		return $this->connection;
	}

 	public function getLoginForm($params) {
   		return $params['login'];
	}

	public function getPasswordForm($params) {
   		return $params['password'];
	}

}





?>