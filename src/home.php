<?php
    use Mub\Blog\Model\Post;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Home</h1>
    <?php

    $posts = Post::getPosts();

    foreach ($posts as $post) {
        echo  '<a href="' . $post->getUrl() . '">' . $post->getName() . '</a></a><br>';
    }

    ?>
</body>

</html>