<?php
require_once 'connection.php';
require_once 'generation.php';
$post_id = $_REQUEST["post_id"];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <?php
    get_post($connect, $post_id);
    ?>
</body>

</html>