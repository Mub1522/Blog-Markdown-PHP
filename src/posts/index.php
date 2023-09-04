<?php

use Mub\Blog\Model\post;

if (isset($_GET['post'])) {
    $post = new Post($postName . '.md');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>

    <link rel="stylesheet" href="src/resources/main.css">

</head>

<body>
    <?php
    require 'src/resources/nav.php';
    ?>
    <main>
        <h1><?php echo $post->getName(); ?></h1>
        <?php

        echo $post->getContent();

        ?>
    </main>
</body>

</html>