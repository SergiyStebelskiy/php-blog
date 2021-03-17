<?php
require_once 'connection.php';
require_once 'generation.php';
$lang = $_REQUEST["lang"];
echo get_lang_posts($connect, $lang);
