<?php
    header('Content-Type:text/plain; charset=utf-8');

    $id= $_POST['id'];
    $pw= $_POST['pw'];

    echo "아이디: $id, 비밀번호: $pw";

?>