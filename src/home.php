<?php

use Mub\Blog\Model\Post;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="src/resources/main.css">

</head>

<body>
    <?php
    require 'src/resources/nav.php';
    ?>
    <main>
        <div class="container mt-4">
            <h1>Posts</h1>
            <ul>
                <?php
                $posts = Post::getPosts();
                foreach ($posts as $post) {
                    echo "<div class='post-item'><a href='{$post->getUrl()}'>{$post->getName()}</div>";
                }
                ?>
            </ul>
        </div>
    </main>
</body>

</html>