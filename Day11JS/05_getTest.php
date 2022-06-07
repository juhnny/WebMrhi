<?php
    header("Content-Type:text/plain; charset=utf-8");

    $title = $_GET['title'];
    $msg = $_GET['msg'];
    
    echo "$title : $msg";
?>