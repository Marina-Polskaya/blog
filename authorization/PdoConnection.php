<?php
require_once 'Handler.php';

abstract class PdoConnection extends Handler {

	protected function getPdoConnection(){

		return $this->connect();
	}
}

?>