<?php
    header('Content-Type:text/html; charset=utf-8');

    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $sex = $_POST['sex'];
    $fruits = $_POST['fruits'];
    $msg = $_POST['msg'];
    $carBrand = $_POST['brand'];

    //textarea 안에 작성한 글에서 줄바꿈문자는 \n
    //html에 맞는 줄바꿈문자인 <br> 태그로 바꿔주는 함수
    $msg = nl2br($msg);

    echo "$id<br>$pw<br>$sex<br>$msg<br>$carBrand<br>";

    //멀티초이스에 의해 선택된 값들은 배열로 전달받기에 반복문으로 값들을 echo
    
    $len = count($fruits); //count()와 sizeof()는 동일한 함수. php 공식문서피셜
    for($i = 0; $i < $len; $i++){
        echo $fruits[$i] . ", ";
    }
?>
