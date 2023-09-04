<?php

use Mub\Blog\Model\post;

if(isset($_GET['post'])){
    $post = new Post($postName . '.md');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    <?php

    echo $post->getContent();

    ?>
</body>

</html>