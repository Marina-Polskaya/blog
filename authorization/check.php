<?php
//точка входа
require_once 'Posts.php';

$posts = new Posts();

$posts->enterIfLoginTrue();

?>