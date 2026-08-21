<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduardo Destruti - Profile</title>
    <?php require_once 'parts/css.php'; ?>

<body>

    <!-- Banner verde do topo -->
    <div class="hero-banner"></div>

    <div class="main-container">

        <?php require_once 'parts/presentation.php'; ?>

        <div class="content-grid">

            <div class="sidebar-column">
                <?php require_once 'parts/side_box_presentation.php'; ?>
                <?php require_once 'parts/side_box_menu.php'; ?>
            </div>

            <div class="post-card">

                <?php

                $json_data = file_get_contents('data/posts.json');
                $posts = json_decode($json_data, true);
                foreach ($posts as $post) {
                    ?>

                    <a href="<?php echo $post['link']; ?>" target="_blank" class="post-title">
                        <?php echo $post['title']; ?>
                    </a>

                    <div class="post-tags">
                        <?php foreach ($post['hashtags'] as $hashtag) { ?>
                            <a href="#" class="tag">#<?php echo $hashtag['tag']; ?></a>
                        <?php } ?>
                    </div>

                    <div class="post-footer">
                    </div>

                <?php } ?>



            </div>

        </div>

    </div>

</body>

</html>