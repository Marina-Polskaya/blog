<?php
session_start();
session_destroy();
header('Location:/blog/authorization/index.php');
exit;


?>