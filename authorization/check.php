<?php
require_once '../startSessionComposer.php';

$posts = new Posts();

$posts->enterIfLoginTrue();

?>