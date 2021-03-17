<?php
require_once 'connection.php';
require_once 'generation.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Блог</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <header class="main-header">
        <h1 class='main-title'>Блог</h1>
        <div class="langs-wrap">
            <button class="lang" name='en'>English</button>
            <button class="lang" name='de'>German</button>
        </div>
    </header>
    <ul class='posts'>
        <?php
        get_posts($connect);
        ?>

    </ul>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./index.js"></script>
</body>

</html>