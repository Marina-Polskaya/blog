<?php
require_once 'Handler.php';

class PdoConnection extends Handler {

	protected function getPdoConnection(){
		$handler = new Handler();
		return $pdoConnection = $handler->connect();
	}
}

?>