<?php
require_once 'connection.php';

function get_posts($connect)
{
    $query = "SELECT * FROM news";
    $res = $connect->query($query);

    if ($res->num_rows > 0) {
        while ($post = $res->fetch_assoc()) {
?>
            <li class='post'>
                <div class='image' style=<?= 'background-image:url(' . $post['photo'] . ')' ?>>
                </div>
                <a href=<?= '/post.php?post_id=' . $post['id'] ?> target='_blank' rel='noopener noreferrer' class='title-link'>
                    <h3 class='title'>
                        <?= $post['title'] ?>
                    </h3>
                </a>
                <p class='description'><?= $post['description'] ?></p>
                <span>Дата создания: <?= date("d/m/Y", strtotime($post['date'])) ?></span>
            </li>
        <?php
        }
    } else {
        echo "Не удалось найти статьи :(((";
    }
}

function get_post($connect, $post_id)
{
    $query = "SELECT * FROM `news` WHERE `id` = '$post_id'";
    $res = $connect->query($query);
    if ($res->num_rows === 1) {
        $post = $res->fetch_assoc() ?>
        <div class="post-full">
            <div class='image' style=<?= 'background-image:url(' . $post['photo'] . ')' ?>>
            </div>
            <h1 class="title"><?= $post['title'] ?></h1>
            <p class="text"><?= $post['text'] ?></p>
            <span>Дата создания: <?= date("d/m/Y", strtotime($post['date'])) ?></span>
        </div>
    <?php
    } else {
    ?>
        <div class="error-wrap">
            <h2>Не удалось найти статью</h2>
            <a href="/index.php" rel="noopener noreferrer">Вернутся на главную страницу</a>
        </div>
        <?php
    }
}

function get_lang_posts($connect, $lang)
{
    $query = "SELECT * FROM `news` WHERE `lang` = '$lang'";
    $res = $connect->query($query);
    if ($res->num_rows > 0) {
        while ($post = $res->fetch_assoc()) {
        ?>
            <li class='post'>
                <div class='image' style=<?= 'background-image:url(' . $post['photo'] . ')' ?>>
                </div>
                <a href=<?= '/post.php?post_id=' . $post['id'] ?> target='_blank' rel='noopener noreferrer' class='title-link'>
                    <h3 class='title'>
                        <?= $post['title'] ?>
                    </h3>
                </a>
                <p class='description'><?= $post['description'] ?></p>
                <span>Дата создания: <?= date("d/m/Y", strtotime($post['date'])) ?></span>
            </li>
<?php
        }
    } else {
        echo "Не удалось найти статьи :(((";
    }
}

?>