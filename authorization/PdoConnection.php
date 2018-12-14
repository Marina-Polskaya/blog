<?php
// namespace auth; 
abstract class PdoConnection extends Handler {

	protected function getPdoConnection(){

		return $this->connect();
	}
}

?>