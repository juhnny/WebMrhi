<?php
    header('Content-Type:text/html; charset=utf=8');

    $title = $_GET('title');
    $msg = $_GET('msg');

    echo "<h1>$title</h1><p>$msg</p>";

?>