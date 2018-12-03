<?php

require_once 'Handler.php';

$handler = new Handler();
$handler->connect();
$pdoConnection = $handler->connect();

$loginForm = $handler->getLoginForm($_POST);
$passwordForm = $handler->getPasswordForm($_POST);



$stmt = $pdoConnection->prepare('select distinct * from users where login = :login and us_password = :password');

$stmt->execute([':login' => $loginForm, ':password' => $passwordForm]);
$resultObjectArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (count($resultObjectArray)>0){
	echo "Успешно";
}
else {
	echo "Отказано в доступе";
}



?>