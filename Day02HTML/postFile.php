<?php
    header('Content-Type:text/html; charset=utf-8');

    //form으로 전달된 파일은 별도의 임시공간에 저장되고
    //이 php로 전달되는 것은 파일의 body 데이터가 아니라 파일을 설명하는 meta 데이터
    //meta data에 써있는 정보는 5 가지. 5 칸짜리 배열로 이뤄져 있음
    //파일명, 타입, 사이즈, 임시저장소 이름, 에러 정보
    //각각 키값은 'name', 'type', 'size, 'tmp_name', 'error'
    
    //multipart로 전달된 건 $_FILES에 저장돼있음
    $file = $_FILES['myFile'];
    $srcName = $file['name'];
    $type = $file['type'];
    $size = $file['size'];
    $tmpName = $file['tmp_name'];
    $error = $file['error'];

    echo "$srcName<br>";
    echo "$type<br>";
    echo "$size<br>";
    echo "$tmpName<br>";
    echo "$error<br>";

    //임시저장소에 있는 파일은 이 php 문서가 끝나면 자동으로 삭제
    //영구 저장하기 위해서는 위치를 이동시켜야 함
    $dstName = "./" . date('YMdHms') . $srcName;
    move_uploaded_file($tmpName, $dstName);
    echo $dstName;
?>