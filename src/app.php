<?php

if (isset($_GET['post'])) {
    $postName = $_GET['post'];

    require 'src/posts/index.php';
} else if (isset($_GET["view"])) {
    $view = $_GET["view"];

    require 'src/posts/' . $view . '.php';
} else {
    require 'src/home.php';
}
